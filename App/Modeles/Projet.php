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

//    public static function compter():int {
//        $chaineSQL = 'SELECT COUNT(*) as total FROM projets';
//        $requetePreparee = App::getPDO()->prepare($chaineSQL);
//        $requetePreparee->execute();
//        $resultat = $requetePreparee->fetch();
//        return $resultat["total"];
//    }
    public static function compter(array $filtresAnnee, array $filtresAxe):int {
        $desAnnees = "";
        $desAxes = "";
        // Transformer les tableaux en strings qui contiennent chacuns des filtres suivis d'un virgules
        foreach ($filtresAnnee as $unFiltre) {
            if($desAnnees === "") {
                $desAnnees = $desAnnees . $unFiltre;
            }
            else {
                $desAnnees = $desAnnees . ", " . $unFiltre;
            }
        }
        foreach ($filtresAxe as $unFiltre) {
            if($desAxes === "") {
                $desAxes = $desAxes . $unFiltre;
            }
            else {
                $desAxes = $desAxes . ", " . $unFiltre;
            }
        }

        // Définir la chaine SQL
        $chaineSQL = 'SELECT COUNT(DISTINCT projets.id) FROM projets';
        if(count($filtresAnnee) !== 0 || count($filtresAxe) !== 0) {
            $chaineSQL = $chaineSQL . " INNER JOIN cours ON projets.cours_id = cours.id";
            $chaineSQL = $chaineSQL . " INNER JOIN axes_cours ON cours.id = axes_cours.cours_id";
            $chaineSQL = $chaineSQL . " WHERE";
        }
        if(count($filtresAnnee) !== 0){
            $chaineSQL = $chaineSQL . " cours.annee in(".$desAnnees.")";
        }
        if(count($filtresAnnee) !== 0 && count($filtresAxe) !== 0) {
            $chaineSQL = $chaineSQL . " AND";
        }
        if(count($filtresAxe) !== 0){
            $chaineSQL = $chaineSQL . " axes_cours.axe_id in(".$desAxes.")";
        }
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->execute();
        $resultat = $requetePreparee->fetch();
        return $resultat["COUNT(DISTINCT projets.id)"];
    }
    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM projets';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Projet");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $projets = $requetePreparee->fetchAll();

        return $projets;
    }
    public static function trouverParId(int $unIdProjet):Projet{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM projets WHERE id=:idProjet';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idProjet', $unIdProjet);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Projet");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $projets= $requetePreparee->fetch();

        return $projets;
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
    public static function paginer(int $unNoPage, int $unNbParPage, array $filtresAnnee, array $filtresAxe):array {
        $occurence = $unNoPage * $unNbParPage;

        $desAnnees = "";
        $desAxes = "";
        // Transformer les tableaux en strings qui contiennent chacuns des filtres suivis d'un virgules
        foreach ($filtresAnnee as $unFiltre) {
            if($desAnnees === "") {
                $desAnnees = $desAnnees . $unFiltre;
            }
            else {
                $desAnnees = $desAnnees . ", " . $unFiltre;
            }
        }
        foreach ($filtresAxe as $unFiltre) {
            if($desAxes === "") {
                $desAxes = $desAxes . $unFiltre;
            }
            else {
                $desAxes = $desAxes . ", " . $unFiltre;
            }
        }

        // Définir la chaine SQL
        $chaineSQL = 'SELECT DISTINCT projets.id, projets.titre, projets.technologies, projets.description, projets.url, projets.diplome_id, projets.cours_id FROM projets';

        if(count($filtresAnnee) !== 0 || count($filtresAxe) !== 0) {
            $chaineSQL = $chaineSQL . " INNER JOIN cours ON projets.cours_id = cours.id";
            $chaineSQL = $chaineSQL . " INNER JOIN axes_cours ON cours.id = axes_cours.cours_id";
            $chaineSQL = $chaineSQL . " WHERE";
        }
        if(count($filtresAnnee) !== 0){
            $chaineSQL = $chaineSQL . " cours.annee in(".$desAnnees.")";
        }
        if(count($filtresAnnee) !== 0 && count($filtresAxe) !== 0) {
            $chaineSQL = $chaineSQL . " AND";
        }
        if(count($filtresAxe) !== 0){
            $chaineSQL = $chaineSQL . " axes_cours.axe_id in(".$desAxes.")";
        }
        $chaineSQL = $chaineSQL . " LIMIT " . $occurence . ", " . $unNbParPage;
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);

        // Définir le mode de récupération
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