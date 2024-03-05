<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Axe;
use App\Modeles\Diplome;
use App\Modeles\Etape;
use App\Modeles\MenuLien;
use App\Modeles\Projet;
use App\Modeles\Texte;

class ControleurProjet {
    public function __construct() {
    }

    public function index(): void {
        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();

        $nbParPage = 12;
        $lesAxes = Axe::trouverTout();

        // Code pour trouver l'URL actuel de JavaTPoint
        // https://www.javatpoint.com/how-to-get-current-page-url-in-php
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $urlPagination = "https://";
        else
            $urlPagination = "http://";
        // Append the host(domain name, ip) to the URL.
        $urlPagination.= $_SERVER['HTTP_HOST'];

        // Append the requested resource location to the URL
        $urlPagination.= $_SERVER['REQUEST_URI'];

        $urlPagination = explode('?', $urlPagination)[0];
        $urlPagination = $urlPagination . "?controleur=projet&action=index";

        if (isset($_GET['page'])) {
            $page = (int) $_GET['page'];
        } else {
            $page = 0;
        }

        if(isset($_POST["annee"])){
            $lesChoixAnnee = $_POST["annee"];
            foreach ($lesChoixAnnee as $unChoixAnnee) {
                $urlPagination .= "&annee[]=" . $unChoixAnnee;
            }
        }
        elseif(isset($_GET["annee"])) {
            $lesChoixAnnee = $_GET["annee"];
            foreach ($lesChoixAnnee as $unChoixAnnee) {
                $urlPagination .= "&annee[]=" . $unChoixAnnee;
            }
        }
        else {
            $lesChoixAnnee = [];
        }

        if(isset($_POST["axeFormation"])){
            $lesChoixAxeFormation = $_POST["axeFormation"];
            foreach ($lesChoixAxeFormation as $unChoixAxeFormation) {
                $urlPagination .= "&axeFormation[]=" . $unChoixAxeFormation;
            }
        }
        elseif(isset($_GET["axeFormation"])) {
            $lesChoixAxeFormation = $_GET["axeFormation"];
            foreach ($lesChoixAxeFormation as $unChoixAxeFormation) {
                $urlPagination .= "&axeFormation[]=" . $unChoixAxeFormation;
            }
        }
        else {
            $lesChoixAxeFormation = [];
        }

        $lesProjets = Projet::paginer($page, $nbParPage, $lesChoixAnnee, $lesChoixAxeFormation);
        $nbPages = ceil(Projet::compter($lesChoixAnnee, $lesChoixAxeFormation) / $nbParPage -1);

        $tDonnees = array("infosFooter"=>$infosFooter, 'lesLiens'=>$lesLiensMenu,'lesProjets'=>$lesProjets, 'lesAxes'=>$lesAxes, 'noPage'=>$page, 'nbPagesTotal'=>$nbPages, 'urlPagination'=>$urlPagination);
        echo App::getBlade()->run('projets.index',$tDonnees);
    }

    public function fiche():void {
        $infosFooter = [Texte::trouverParId(9), Texte::trouverParId(1), Texte::trouverParId(2), Texte::trouverParId(5), Texte::trouverParId(3), Texte::trouverParId(4)];
        $lesLiensMenu = MenuLien::trouverTout();

        $id = (int) $_GET['idProjet'];

        $leProjet = Projet::trouverParId($id);
        $leDiplome = Diplome::trouverParId($leProjet->getDiplomeId());
        $lesProjetsDuDiplome = Projet::trouverParDiplome($leProjet->getDiplomeId());
        $lesEtapes = Etape::trouverParProjet($leProjet->getId());

        $tDonnees = array("infosFooter"=>$infosFooter, 'lesLiens'=>$lesLiensMenu, 'leProjet'=>$leProjet, 'leDiplome'=>$leDiplome,"lesProjets"=>$lesProjetsDuDiplome, 'lesEtapes'=>$lesEtapes);
        echo App::getBlade()->run('projets.fiche',$tDonnees);
    }
}