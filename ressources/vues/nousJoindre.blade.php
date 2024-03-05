@extends('gabarit')

@section('title')
    Nous joindre
@endsection

@section('contenu')
    <h1 class="h1">Nous joindre</h1>
    <div class="selectionMoyen">
        <div class="selectionMoyen__section">
            <h2 class="selectionMoyen__section__h2 h2">Par Courriel</h2>
            <button class="selectionMoyen__section__btn active" id="btnCourriel"><span class="selectionMoyen__section__btn__icone" id="courriel"></span></button>
        </div>
{{-- Switch basée de W3School --}}
{{-- https://www.w3schools.com/howto/howto_css_switch.asp --}}
{{--        <label class="switch">--}}
{{--            <input type="checkbox" id="laSwitch" checked>--}}
{{--            <span class="slider round" id="lePtitRond"></span>--}}
{{--        </label>--}}

        <div class="selectionMoyen__section">
            <h2 class="selectionMoyen__section__h2 h2">Par Téléphone</h2>
            <button class="selectionMoyen__section__btn inactive" id="btnTelephone"><span class="selectionMoyen__section__btn__icone" id="telephone"></span></button>
        </div>
    </div>


    <form class="formulaire courriel" id="sectionCourriel">
        <div class="fondFormulaire">
            <div class="conteneurForm">
                <p class="formulaire__info">*Champs obligatoires</p>
                <div class="conteneurNomPrenom elementCourriel">
                    <div>
                        <label class="formulaire__label elementCourriel elementCourriel" for="prenom">Prénom*</label>
                        <input type="text" id="prenom" name="prenom" class="formulaire__input moyen elementCourriel">
                    </div>
                    <div>
                        <label class="formulaire__label elementCourriel elementCourriel" for="nom">Nom*</label>
                        <input type="text" id="nom" name="nom" class="formulaire__input moyen elementCourriel">
                    </div>
                </div>
                <label class="formulaire__label elementCourriel elementCourriel" for="courriel">Courriel*</label>
                <input type="text" id="courriel" name="courriel" class="formulaire__input large elementCourriel">
                <ul class="formulaire__destinataires">
                    @foreach($lesResponsables as $unResponsable)
                        <li class="formulaire__destinataires__item">
                            <input type="radio" class="formulaire__destinataires__item__input screen-reader-only" id="selection{{$unResponsable->getNom()}}" name="selectionResponsable"
                                   @if(isset($_GET['idResponsable']))
                                       @if((int) $_GET['idResponsable'] === $unResponsable->getId())
                                           checked
                                    @endif
                                    @endif
                            >
                            <label for="selection{{$unResponsable->getNom()}}" class="formulaire__destinataires__item__label">
                        <span class="conteneurFormPhotoTexte">
                            <img class="formulaire__destinataires__item__label__img" src="liaisons/img/responsables/{{$unResponsable->getId()}}_200.jpg" alt="image de profil de {{$unResponsable->getPrenom()}} {{$unResponsable->getNom()}}">
                            <span class="conteneurFormTexte">
                                <span class="formulaire__destinataires__item__label__h3 h3">{{$unResponsable->getPrenom()}} {{$unResponsable->getNom()}}</span>
                                <span class="formulaire__destinataires__item__label__contact">{{$unResponsable->getTelephone()}}</span>
                            </span>
                        </span>
                                <span class="formulaire__destinataires__item__label__h4 h4">{{$unResponsable->getResponsabilite()}}</span>
                            </label>
                        </li>
                    @endforeach
                </ul>
                <div class="formulaire__sectionBen  elementCourriel" id="sectionBen">
                    <label class="formulaire__sectionBen__label" for="noTelephone">Numéro de téléphone* <span>ex: (123) 456-7890</span></label>
                    <input type="text" id="noTelephone" name="noTelephone" class="formulaire__sectionBen__input moyen">
                    <input type="checkbox" id="acceptationTelephone" name="acceptationTelephone" class="formulaire__sectionBen__checkbox">
                    <label class="formulaire__sectionBen__labelCheck" for="acceptationTelephone">J'autorise l'utilisation de mon numéro de téléphone avec le responsable «Étudiant d'un jour»*</label>
                </div>
                <label class="formulaire__label elementCourriel" for="sujet">Sujet*</label>
                <input type="text" id="sujet" name="sujet" class="formulaire__input large elementCourriel">
                <label class="formulaire__label elementCourriel" for="message">Message*</label>
                <input type="text" id="message" name="message" class="formulaire__input xLarge elementCourriel">
            </div>
        </div>
        <button class="btnPrincipal active" id="envoyerCourriel">Envoyer un courriel</button>
        <button class="btnPrincipal inactive" id="appeler" aria-hidden="true">Appeler</button>
    </form>

    <script src="liaisons/script/formulaire.js"></script>
@endsection

