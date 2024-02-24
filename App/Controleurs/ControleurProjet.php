<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Axe;
use App\Modeles\Diplome;
use App\Modeles\Etape;
use App\Modeles\Projet;
use App\Modeles\Texte;

class ControleurProjet {
    public function __construct() {
    }

    public function index(): void {
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)],'lesProjets'=>Projet::trouverTout(), 'lesAxes'=>Axe::trouverTout());
        echo App::getBlade()->run('projets.index',$tDonnees);
    }

    public function fiche():void {
        $id = (int) $_GET['idProjet'];

        $leProjet = Projet::trouverParId($id);
        $leDiplome = Diplome::trouverParId($leProjet->getDiplomeId());
        $lesProjetsDuDiplome = Projet::trouverParDiplome($leProjet->getDiplomeId());
        $lesEtapes = Etape::trouverParProjet($leProjet->getId());
        if($lesEtapes === false || $lesEtapes === null) {
            $lesEtapes = false;
        }

        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)], 'leProjet'=>$leProjet, 'leDiplome'=>$leDiplome,"lesProjets"=>$lesProjetsDuDiplome, 'lesEtapes'=>$lesEtapes);
        echo App::getBlade()->run('projets.fiche',$tDonnees);
    }
}