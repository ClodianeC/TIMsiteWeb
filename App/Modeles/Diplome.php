<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Diplome {
    private int $id = 0;
    private string $nom = '';
    private string $prenom = '';
    private string $presentation = '';
    private int $interet_conception = 0;
    private int $interet_medias = 0;
    private int $interet_integration = 0;
    private int $interet_programmation = 0;
    private string $courriel = '';
    private string $linkedin = '';
    private string $site_web = '';

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM diplomes';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Diplome");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $diplomes = $requetePreparee->fetchAll();

        return $diplomes;
    }
    public static function trouverParId(int $unIdDiplome):Diplome{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM diplomes WHERE id=:idDiplome';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idDiplome', $unIdDiplome);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Diplome");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $diplome= $requetePreparee->fetch();

        return $diplome;
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
    public function getPresentation():string{
        return $this->presentation;
    }
    public function getInteretConception():int{
        return $this->interet_conception;
    }
    public function getInteretMedias():int{
        return $this->interet_medias;
    }
    public function getInteretIntegration():int{
        return $this->interet_integration;
    }
    public function getInteretProgrammation():int{
        return $this->interet_programmation;
    }
    public function getCourriel():string{
        return $this->courriel;
    }
    public function getLinkedin():string{
        return $this->linkedin;
    }
    public function getSiteWeb():string{
        return $this->site_web;
    }
}