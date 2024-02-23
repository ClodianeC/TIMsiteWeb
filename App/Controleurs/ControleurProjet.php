<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Texte;

class ControleurProjet {
    public function __construct() {
    }

    public function index(): void {
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)]);
        echo App::getBlade()->run('projets.index',$tDonnees);
    }

    public function fiche():void {
        $tDonnees = array("infosFooter"=>[Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)]);
        echo App::getBlade()->run('projets.fiche',$tDonnees);
    }
}