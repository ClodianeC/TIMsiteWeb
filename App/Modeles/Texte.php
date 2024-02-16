<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Texte {
    private int $id = 0;
    private string $titre = '';
    private string $texte = '';

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM textes';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Texte");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $textes = $requetePreparee->fetchAll();

        return $textes;
    }
    public static function trouverParId(int $unIdTexte):Texte{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM textes WHERE id=:idTexte';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idTexte', $unIdTexte);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Texte");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $texte= $requetePreparee->fetch();

        return $texte;
    }

    public function getId():int{
        return $this->id;
    }
    public function getTitre():string{
        return $this->titre;
    }
    public function getTexte():string{
        return $this->texte;
    }
}