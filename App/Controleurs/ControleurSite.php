<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Responsable;
use App\Modeles\Texte;

class ControleurSite {
    public function __construct() {
    }

    public function leProgramme(): void {
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)]);
        echo App::getBlade()->run('leProgramme',$tDonnees);
    }

    public function nousJoindre():void {
        $lesResponsables = Responsable::trouverTout();
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)], "lesResponsables"=>$lesResponsables);
        echo App::getBlade()->run('nousJoindre',$tDonnees);
    }
    public function lesStages():void {
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)]);
        echo App::getBlade()->run('lesStages',$tDonnees);
    }
}

