@extends('gabarit')

@section('title')
    {{$leProjet->getTitre()}} par {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}
@endsection

@section('contenu')
    <h1 class="h1">{{$leProjet->getTitre()}}</h1>
    <p class="accroche">Par {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}</p>

    <div class="fondFicheProjet">
        <img class="imgPrincipale" src="liaisons/img/projets/{{$leProjet->getDiplomeId()}}_{{$leProjet->getId()}}_01.png" alt="Image du projet {{$leProjet->getTitre()}}">
        <div class="ficheProjet">
            <div class="ficheProjet__premierePhrase accroche">{!!explode('.', str_replace('"', '',$leProjet->getDescription()))[0]!!}.</div>
            <img class="ficheProjet__img" src="liaisons/img/projets/{{$leProjet->getDiplomeId()}}_{{$leProjet->getId()}}_02.png" alt="Image du projet {{$leProjet->getTitre()}}">
            <div class="ficheProjet__restantPhrases">
            @foreach(explode('.', $leProjet->getDescription()) as $unePhrase)
                @if($loop->iteration != 1 && strlen($unePhrase) > 5)
                    {!!$unePhrase!!}.
                @endif
            @endforeach
            </div>
            <div class="ficheProjet__sectionTechnologies">
                <h2 class="ficheProjet__sectionTechnologies__h2 h2">Technologies utilisées:</h2>
                <ul class="ficheProjet__sectionTechnologies__listeTechno">
                    @foreach(explode(', ', $leProjet->getTechnologies()) as $uneTechno)
                        <li>{!! str_replace('"', '',$uneTechno) !!}</li>
                    @endforeach
                </ul>
            </div>
            <img class="ficheProjet__img" src="liaisons/img/projets/{{$leProjet->getDiplomeId()}}_{{$leProjet->getId()}}_03.png" alt="Image du projet {{$leProjet->getTitre()}}">
        </div>
    </div>

    @if($lesEtapes !== false)
        <div class="lesEtapes">
            <h2 class="lesEtapes__h2 h2">Les étapes</h2>
            @foreach($lesEtapes as $uneEtape)
                <div>
                    @if($loop->iteration % 2 == 0)
                        <p>{!! $uneEtape->getDescription() !!}</p>
                        <img>
                    @else
                        <img>
                        <p>{!! $uneEtape->getDescription() !!}</p>
                    @endif
                </div>
            @endforeach
        </div>
    @endif

    <div class="fondFicheCreateurProjet">
        <div class="ficheCreateurProjet">
            <h2 class="ficheCreateurProjet__h2 h2">Projet réalisé par <a class="ficheCreateurProjet__h2__lien hyperlien" href="index.php?controleur=diplome&action=fiche&idDiplome={{$leDiplome->getId()}}">{{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}</a></h2>
            <a class="ficheCreateurProjet__lienCreateur" href="index.php?controleur=diplome&action=fiche&idDiplome={{$leDiplome->getId()}}">
                <img class="ficheCreateurProjet__lienCreateur__img"
                     @if(is_file("liaisons/img/diplomes/".$leDiplome->getId().".jpg"))
                         src="liaisons/img/diplomes/{{$leDiplome->getId()}}.jpg"
                     @else
                         src="liaisons/img/profile.jpg"
                     @endif
                     alt="Image de {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}">
            </a>
            <div class="ficheCreateurProjet__section">
                <h3 class="ficheCreateurProjet__section__h3 h3">Voir d'autre projets par la même personne</h3>
                @foreach($lesProjets as $unProjet)
                    @if($unProjet->getId() !== $leProjet->getId())
                        <a href="index.php?controleur=projet&action=fiche&idProjet={{$unProjet->getId()}}" class="ficheCreateurProjet__section__unProjet">
                            <img class="ficheCreateurProjet__section__unProjet__img" src="liaisons/img/projets/{{$unProjet->getDiplomeId()}}_{{$unProjet->getId()}}_01.png" alt="Image du projet {{$unProjet->getTitre()}}">
                            <h4 class="ficheCreateurProjet__section__unProjet__h4 h4">
                                {{substr($unProjet->getTitre(), 0, 34)}}
                                @if(strlen($unProjet->getTitre()) > 34)
                                    ...
                                @endif
                            </h4>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection