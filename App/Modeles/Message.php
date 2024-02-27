<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Message {
    private int $id = 0;
    private string $prenom_nom = '';
    private string $courriel = '';
    private string $telephone = '';
    private int $consentement = 0;
    private string $sujet = '';
    private string $contenu = '';
    private string $dateheure_creation = '';
    private int $responsable_id = 0;

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM messages';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Message");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $messages = $requetePreparee->fetchAll();

        return $messages;
    }
    public static function trouverParId(int $unIdMessage):Message{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM messages WHERE id=:idMessage';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idMessage', $unIdMessage);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Message");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $message= $requetePreparee->fetch();

        return $message;
    }

    public function getId():int{
        return $this->id;
    }
    public function getPrenomNom():string{
        return $this->prenom_nom;
    }
    public function getCourriel():string{
        return $this->courriel;
    }
    public function getTelephone():string{
        return $this->telephone;
    }
    public function getConsentement():int{
        return $this->consentement;
    }
    public function getSujet():string{
        return $this->sujet;
    }
    public function getContenu():string{
        return $this->contenu;
    }
    public function getDateHeure():string{
        return $this->dateheure_creation;
    }
    public function getIdResponsable():int{
        return $this->responsable_id;
    }

    public function setId():int{
        return $this->id;
    }
    public function setPrenomNom(string $prenomNom):void{
        $this->prenom_nom = $prenomNom;
    }
    public function setCourriel(string $courriel):void{
        $this->courriel = $courriel;
    }
    public function setTelephone(string $telephone):void{
        $this->telephone = $telephone;
    }
    public function setConsentement(int $consentement):void{
        $this->consentement = $consentement;
    }
    public function setSujet(string $sujet):void{
        $this->sujet = $sujet;
    }
    public function setContenu(string $contenu):void{
        $this->contenu = $contenu;
    }
    public function setDateHeure(string $dateHeure):void{
        $this->dateheure_creation = $dateHeure;
    }
    public function setIdResponsable(int $idResponsable):void{
        $this->responsable_id = $idResponsable;
    }
}