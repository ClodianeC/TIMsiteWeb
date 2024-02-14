<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;

class ControleurSite {
    public function __construct() {
    }

    public function leProgramme(): void {
        $tDonnees = array("contenu"=>"Je suis le contenu de la page d'accueil...");
        echo App::getBlade()->run('leProgramme',$tDonnees);
    }

    public function apropos():void {
        $tDonnees = array("contenu"=>"Je suis le contenu de la page à propos...");
        echo App::getBlade()->run('nousJoindre',$tDonnees);
    }
    public function lesStages():void {
        $tDonnees = array("contenu"=>"Je suis le contenu de la page à propos...");
        echo App::getBlade()->run('lesStages',$tDonnees);
    }
}

