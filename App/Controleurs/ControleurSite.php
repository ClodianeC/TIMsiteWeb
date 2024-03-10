<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Axe;
use App\Modeles\MenuLien;
use App\Modeles\Responsable;
use App\Modeles\Texte;

class ControleurSite {
    public function __construct() {
    }

    public function leProgramme(): void {
        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();
        $lesAxes = Axe::trouverTout();
        $lesTextes = Texte::trouverTout();

        $tDonnees = array("infosFooter"=>$infosFooter, 'lesLiens'=>$lesLiensMenu, 'lesAxes'=>$lesAxes, 'lesTextes'=>$lesTextes);
        echo App::getBlade()->run('leProgramme',$tDonnees);
    }

    public function nousJoindre():void {
        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();

        $lesResponsables = Responsable::trouverTout();
        $tDonnees = array("infosFooter"=>$infosFooter, "lesResponsables"=>$lesResponsables, 'lesLiens'=>$lesLiensMenu);
        echo App::getBlade()->run('nousJoindre',$tDonnees);
    }
    public function lesStages():void {
        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();
        $lesTextes = Texte::trouverTout();

        $tDonnees = array("infosFooter"=>$infosFooter, 'lesLiens'=>$lesLiensMenu, 'lesTextes'=>$lesTextes);
        echo App::getBlade()->run('lesStages',$tDonnees);
    }
}

