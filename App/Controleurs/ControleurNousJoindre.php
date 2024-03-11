<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\MenuLien;
use App\Modeles\Message;
use App\Modeles\Responsable;
use App\Modeles\Texte;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class ControleurNousJoindre {

    public function __construct() {
        //
    }

    public function creer():void {
        if(isset($_SESSION['tValidation'])) {
            $tValidation = $_SESSION['tValidation'];
            unset($_SESSION['tValidation']);
        }
        else {
            $tValidation = null;
        }

        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();

        $lesResponsables = Responsable::trouverTout();

        $tDonnees = ["infosFooter"=>$infosFooter, "lesResponsables"=>$lesResponsables, 'lesLiens'=>$lesLiensMenu, 'tValidation'=>$tValidation];

        echo App::getBlade()->run("nousJoindre.creer", $tDonnees);
//        var_dump($tValidation);
//        var_dump($_SESSION['tValidation']);

    }

    public function inserer():void {
        $contenuBruteFichierJson = file_get_contents("liaisons/script/messages-erreur_form.json");

        $tMessagesJson = json_decode($contenuBruteFichierJson, true);

        $tChampsCourriel = ['prenom', 'nom', 'courriel', 'destinataire', 'sujet', 'message'];
        $tChampsBen = ['telephone', 'consentement'];
        $tChampsTel = ['selectionResponsable'];
        $tChampsAValider = array();
        $tValidation = array();
        $leFormulaireEstValide = true;

        // Vérification de *quel formulaire* nous validons
        // Courriel Tous les champs à valider, sauf exclusivités Ben
        // Courriel avec Ben, deux champs de plus que Courriel avec autre responsable
        // Telephone seulement Responsable à valider aucun envoi au serveur
        if(isset($_POST['selectionContactPar'])) {
            if($_POST['selectionContactPar'] === 'courriel') {
                if(isset($_POST['destinataire'])) {
                    if($_POST['destinataire'] === '4') {
                        $tChampsAValider = array_merge($tChampsCourriel, $tChampsBen);
                    }
                }
                else {
                    $tChampsAValider = $tChampsCourriel;
                }
            }
            else {
                echo $_POST['telephone'];
                $tChampsAValider = $tChampsTel;
            }
        }
        echo $_POST['telephone'];
        echo $_POST['destinataire'];
        foreach ($tChampsAValider as $unChampAValider) {
            if(isset($_POST[$unChampAValider])) {
                $laValeurActuelle = trim($_POST[$unChampAValider]);
            }
            else {
                $laValeurActuelle = 'empty';
            }

            $tValidation[$unChampAValider] = ['estValide'=>false, 'valeur'=>$laValeurActuelle, 'messageErreur'=>''];

//            var_dump($tValidation);

            // Le champ est il vide
            if($laValeurActuelle === 'empty' || $laValeurActuelle === '' || !isset($_POST[$unChampAValider])) {
                $leFormulaireEstValide = false;
                $tValidation[$unChampAValider]['estValide'] = false;
                $tValidation[$unChampAValider]['messageErreur'] = $tMessagesJson[$unChampAValider]['erreurs']['vide'];
            }
            // Le champ répond-t-il au critères
            elseif($tMessagesJson[$unChampAValider]['regex'] !== '' && !preg_match($tMessagesJson[$unChampAValider]['regex'], $laValeurActuelle)) {
                $leFormulaireEstValide = false;
                $tValidation[$unChampAValider]['estValide'] = false;
                $tValidation[$unChampAValider]['messageErreur'] = $tMessagesJson[$unChampAValider]['erreurs']['motif'];
            }
            // Le champ n'a pas d'erreur
            else {
                $tValidation[$unChampAValider]['estValide'] = true;
            }
        }

        $_SESSION['tValidation'] = $tValidation;
        session_write_close();

        if($leFormulaireEstValide) {
            $unMessage = new Message();
            $unMessage->setPrenomNom($tValidation['prenom']['valeur'] . ' ' . $tValidation['nom']['valeur']);
            $unMessage->setCourriel($tValidation['courriel']['valeur']);
            // Si le destinataire est Ben
            if($tValidation['destinataire']['valeur'] === '4') {
                $unMessage->setTelephone($tValidation['telephone']['valeur']);
                $unMessage->setConsentement(1);
            }
            $unMessage->setSujet($tValidation['sujet']['valeur']);
            $unMessage->setContenu($tValidation['message']['valeur']);
            $unMessage->setDateHeure(date("Y-m-d H:i:s"));
            $unMessage->setIdResponsable((int) $tValidation['destinataire']['valeur']);

            if(isset($_POST['selectionContactPar'])) {
                if($_POST['selectionContactPar'] === 'courriel') {
                    $unMessage->inserer();
                }
            }

            $resultat = $this->envoyerCourriel();
            echo $resultat;
            if($resultat === "OK") {
                header('Location: index.php?controleur=joindre&action=confirmer');
                exit;
            }

        }
        else {
            header('Location: index.php?controleur=joindre&action=creer');
            exit;
        }
    }
    public function confirmer():void {
        if(isset($_SESSION['tValidation'])) {
            $tValidation = $_SESSION['tValidation'];
        }
        else {
            $tValidation = null;
        }

        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();

        $lesResponsables = Responsable::trouverTout();

        $tDonnees = ["infosFooter"=>$infosFooter, 'lesLiens'=>$lesLiensMenu, 'lesResponsables'=>$lesResponsables, 'tValidation'=>$tValidation];

        echo App::getBlade()->run("nousJoindre.confirmer", $tDonnees);
    }
    public function envoyerCourriel() {
        $leResponsable = Responsable::trouverParId((int) $_POST['destinataire']);
        $leCourrielResponsable = $leResponsable->getCourriel();
        if($_POST['destinataire'] === '4') {
//            $telExpediteur = str_replace(' ', '-', str_replace(array('(', ')'), '', $_POST['telephone']));
            $telExpediteur = $_POST['telephone'];
        }
        else {
            $telExpediteur = null;
        }
        // PRÉPARER LA VUE DU COURRIEL
        $tDonnees = ["contenuCourriel" => $_POST['message'], 'prenom'=>$_POST['prenom'], 'nom'=>$_POST['nom'], 'leCourrielRespo'=>$leCourrielResponsable, 'courrielExpediteur'=>$_POST['courriel'], 'telExpediteur'=>$telExpediteur];
        $vueTexte = App::getBlade()->run('courriels.messages.courrielTexte', $tDonnees); // Vue par défaut pour client low tech
        $vueHtml =  App::getBlade()->run('courriels.messages.courrielHtml' , $tDonnees); // Vue utilisée si supportée par le client

        // PRÉPARER L'OBJET COURRIEL
        //       Remplacer aaaaaa par: Votre nouvelle adresse courriel Gmail (d'où vient le courriel).
        //       Remplacer bbbbbb par: Votre nouvelle adresse courriel Gmail (où va le courriel -> pour tester).
        $courriel = new Email();
        $courriel->from('pourlewebtest@gmail.com')
            ->to('pourlewebtest@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($_POST['sujet'])
            ->text($vueTexte)
            ->html($vueHtml);

        // ENVOYER LE COURRIEL PAR LE SERVEUR SMTP DE GOOGLE
        //       Remplacer 111111 par: Votre nouvelle adresse courriel Gmail.
        //       Remplacer 222222 par: Le mot de passe applicatif de sécurité généré dans votre nouveau compte Google.
        //                             Pour tester l'erreur d'envoi: mettre un mot de passe bidon...
        $transport = Transport::fromDsn('smtp://pourlewebtest@gmail.com:pdfnlcamadqheoim@smtp.gmail.com:587');
        $mailer = new Mailer($transport);
        $bilan = 'OK';
        try {
            // Essayer d'envoyer...
            $mailer->send($courriel);
        } catch (TransportExceptionInterface $e) {
            // Si ça ne fonctionne pas...
            $bilan = 'ERREUR';
        }
        return $bilan;
    }
}