<?php
declare(strict_types=1);

namespace App\Controleurs;
use App\App;
use App\Modeles\Diplome;
use App\Modeles\Projet;
use App\Modeles\Texte;

class ControleurDiplome {
    public function __construct() {
    }

    public function index(): void {
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)], 'lesDiplomes'=>Diplome::trouverTout());
        echo App::getBlade()->run('diplomes.index', $tDonnees);
    }

    public function fiche():void {
        $id = (int) $_GET['idDiplome'];

        $leDiplome = Diplome::trouverParId($id);
        $lesProjets = Projet::trouverParDiplome($id);

        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)], 'leDiplome'=>$leDiplome, 'lesProjets'=>$lesProjets);
        echo App::getBlade()->run('diplomes.fiche', $tDonnees);
    }
}