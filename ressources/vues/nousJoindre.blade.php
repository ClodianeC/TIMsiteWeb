@extends('gabarit')

@section('title')
    Nous joindre
@endsection

@section('contenu')
    <h1 class="h1">Nous joindre</h1>
    <div class="selectionMoyen">
        <div class="selectionMoyen__section">
            <h2 class="selectionMoyen__section__h2 h2">Par Courriel</h2>
            <button class="selectionMoyen__section__btn active"><span class="selectionMoyen__section__btn__icone" id="courriel"></span></button>
        </div>
{{-- Switch basée de W3School --}}
{{-- https://www.w3schools.com/howto/howto_css_switch.asp --}}
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>

        <div class="selectionMoyen__section">
            <h2 class="selectionMoyen__section__h2 h2">Par Téléphone</h2>
            <button class="selectionMoyen__section__btn inactive"><span class="selectionMoyen__section__btn__icone" id="telephone"></span></button>
        </div>
    </div>

    <div class="fondFormulaire">
        <div class="formulaire courriel">
            <p class="formulaire__info">*Champs obligatoires</p>
            <div class="conteneurNomPrenom">
                <div>
                    <label class="formulaire__label" for="prenom">Prénom*</label>
                    <input type="text" id="prenom" name="prenom" class="formulaire__input moyen">
                </div>
                <div>
                    <label class="formulaire__label" for="nom">Nom*</label>
                    <input type="text" id="nom" name="nom" class="formulaire__input moyen">
                </div>
            </div>
            <label class="formulaire__label" for="courriel">Courriel*</label>
            <input type="text" id="courriel" name="courriel" class="formulaire__input large">
            <ul class="formulaire__destinataires">
                @foreach($lesResponsables as $unResponsable)
                    <li class="formulaire__destinataires__item">
                        <input type="radio" class="formulaire__destinataires__item__input screen-reader-only" id="selection{{$unResponsable->getNom()}}" name="selectionResponsable">
                        <label for="selection{{$unResponsable->getNom()}}" class="formulaire__destinataires__item__label">
                        <span class="conteneurFormPhotoTexte">
                            <img class="formulaire__destinataires__item__label__img" src="liaisons/img/responsables/{{$unResponsable->getId()}}.jpg" alt="image de profil de {{$unResponsable->getPrenom()}} {{$unResponsable->getNom()}}">
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
            <label class="formulaire__label" for="sujet">Sujet*</label>
            <input type="text" id="sujet" name="sujet" class="formulaire__input large">
            <label class="formulaire__label" for="message">Message*</label>
            <input type="text" id="message" name="message" class="formulaire__input xLarge">
        </div>
    </div>
    <button class="btnPrincipal active" id="envoyerCourriel">Envoyer un courriel</button>
    <button class="btnPrincipal inactive" id="appeler">Appeler</button>
@endsection

