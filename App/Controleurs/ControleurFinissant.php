<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;

class ControleurFinissant {
    public function __construct() {
    }

    public function index(): void {
        $tDonnees = array("contenu"=>"Je suis le contenu de la page d'accueil...");
        echo App::getBlade()->run('finissants.index',$tDonnees);
    }

    public function fiche():void {
        $tDonnees = array("contenu"=>"Je suis le contenu de la page à propos...");
        echo App::getBlade()->run('finissants.fiche',$tDonnees);
    }
}