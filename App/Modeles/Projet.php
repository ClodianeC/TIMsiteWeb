<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Projet {
    private int $id = 0;
    private string $titre = '';
    private string $technologies = '';
    private string $description = '';
    private string $url = '';
    private int $diplome_id = 0;
    private int $cours_id = 0;

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
    public static function trouverParDiplome(int $idDiplome):array{
        $chaineSQL = 'SELECT * FROM projets WHERE diplome_id = :idDiplome';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam('idDiplome', $idDiplome);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Projet");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $projets = $requetePreparee->fetchAll();
        return $projets;
    }

    public function getId():int{
        return $this->id;
    }
    public function getTitre():string{
        return $this->titre;
    }
    public function getTechnologies():string{
        return $this->technologies;
    }
    public function getDescription():string{
        return $this->description;
    }
    public function getUrl():string{
        return $this->url;
    }
    public function getDiplomeId():int{
        return $this->diplome_id;
    }
    public function getCoursId():int{
        return $this->cours_id;
    }
}