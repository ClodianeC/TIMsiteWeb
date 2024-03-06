<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\MenuLien;
use App\Modeles\Message;
use App\Modeles\Responsable;
use App\Modeles\Texte;

class ControleurNousJoindre {

    public function __construct() {
        //
    }

    public function creer():void {
        if(isset($_SESSION['tValidation'])) {
            $tValidation = $_SESSION['tValidation'];
            session_unset();
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

    public function inserer() :void {
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
                if(isset($_POST['selectionResponsable'])) {
                    if($_POST['selectionResponsable'] === '4') {
                        $tChampsAValider = array_merge($tChampsCourriel, $tChampsBen);
                    }
                }
                else {
                    $tChampsAValider = $tChampsCourriel;
                }
            }
            else {
                $tChampsAValider = $tChampsTel;
            }
        }

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

            header('Location: index.php?controleur=joindre&action=confirmer');
            exit;
        }
        else {
            header('Location: index.php?controleur=joindre&action=creer');
            exit;
        }
//        var_dump($tChampsAValider);
//        var_dump($tValidation);
//        var_dump($_SESSION['tValidation']);
    }
    public function confirmer():void {
        if(isset($_SESSION['tValidation'])) {
            $tValidation = $_SESSION['tValidation'];
            session_unset();
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
}