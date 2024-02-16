<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Responsable {
    private int $id = 0;
    private string $responsabilite = '';
    private string $courriel = '';
    private string $prenom = '';
    private string $nom = '';
    private string $telephone = '';

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM responsables';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Responsable");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $responsables = $requetePreparee->fetchAll();

        return $responsables;
    }
    public static function trouverParId(int $unIdResponsable):Responsable{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM responsables WHERE id=:idResponsable';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idResponsable', $unIdResponsable);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Responsable");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $responsable= $requetePreparee->fetch();

        return $responsable;
    }

    public function getId():int{
        return $this->id;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getResponsabilite():string{
        return $this->responsabilite;
    }
    public function getCourriel():string{
        return $this->courriel;
    }
    public function getTelephone():string{
        return $this->telephone;
    }
}