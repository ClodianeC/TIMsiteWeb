@extends('gabarit')

@section('title')
    {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}
@endsection

@section('contenu')
    <h1 class="h1">{{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}</h1>
    <p class="accroche">Diplômé(e) 2024</p>

    <div class="fondFicheDiplome">
        <div class="ficheDiplome">
            <img class="ficheDiplome__img"
            @if(is_file("liaisons/img/diplomes/".$leDiplome->getId().".jpg"))
                src="liaisons/img/diplomes/{{$leDiplome->getId()}}.jpg"
            @else
                src="liaisons/img/profile.jpg"
            @endif
            alt="Image de {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}">
            <div class="ficheDiplome__texte">
                {!! str_replace('"', '', $leDiplome->getPresentation()) !!}
            </div>
        </div>
    </div>

    <div class="niveauInteret">
        <h2 class="niveauInteret__h2 h2">Les niveaux d'intérêt</h2>
        <div class="niveauInteret__section interet{{$leDiplome->getInteretConception()}}">
            <h3 class="niveauInteret__section__h3">Conception</h3>
            <span class="niveauInteret__section__icone" id="iconeConception"></span>
            <h4 class="niveauInteret__section__note h4">{{$leDiplome->getInteretConception()}}/10</h4>
        </div>
        <div class="niveauInteret__section interet{{$leDiplome->getInteretMedias()}}">
            <h3 class="niveauInteret__section__h3">Médias</h3>
            <span class="niveauInteret__section__icone" id="iconeMedias"></span>
            <h4 class="niveauInteret__section__note h4">{{$leDiplome->getInteretMedias()}}/10</h4>
        </div>
        <div class="niveauInteret__section interet{{$leDiplome->getInteretIntegration()}}">
            <h3 class="niveauInteret__section__h3">Intégration</h3>
            <span class="niveauInteret__section__icone" id="iconeIntegration"></span>
            <h4 class="niveauInteret__section__note h4">{{$leDiplome->getInteretIntegration()}}/10</h4>
        </div>
        <div class="niveauInteret__section interet{{$leDiplome->getInteretProgrammation()}}">
            <h3 class="niveauInteret__section__h3">Programmation</h3>
            <span class="niveauInteret__section__icone" id="iconeProgrammation"></span>
            <h4 class="niveauInteret__section__note h4">{{$leDiplome->getInteretProgrammation()}}/10</h4>
        </div>
    </div>

    <div class="fondProjetsDiplome">
        <div class="projetsDiplome">
            <h2 class="projetsDiplome__h2 h2">Les projets de {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}</h2>
            @foreach($lesProjets as $unProjet)
                <a href="index.php?controleur=projet&action=fiche&idProjet={{$unProjet->getId()}}" class="projetsDiplome__unProjet">
                    <img class="projetsDiplome__unProjet__img" src="liaisons/img/projets/{{$leDiplome->getId()}}_{{$unProjet->getId()}}_01.png" alt="Image du projet {{$unProjet->getTitre()}}">
                    <h3 class="projetsDiplome__unProjet__h3 h3">{{$unProjet->getTitre()}}</h3>
                </a>
            @endforeach
        </div>
    </div>

@endsection