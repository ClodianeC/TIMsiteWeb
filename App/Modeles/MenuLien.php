<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class MenuLien {
    private int $id = 0;
    private string $nom = '';
    private string $identifiant = '';
    private string $controleur = '';
    private string $action = '';
    private string $lien = '';

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM menuliens';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\MenuLien");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $menuLiens = $requetePreparee->fetchAll();

        return $menuLiens;
    }
    public static function trouverParId(int $unIdMenuLien):MenuLien{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM menuliens WHERE id=:idMenuLien';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idMenuLien', $unIdMenuLien);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\MenuLien");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $menuLien= $requetePreparee->fetch();

        return $menuLien;
    }

    public function getId():int{
        return $this->id;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getIdentifiant():string{
        return $this->identifiant;
    }
    public function getControleur():string{
        return $this->controleur;
    }
    public function getAction():string{
        return $this->action;
    }
    public function getLien():string{
        return $this->lien;
    }
}