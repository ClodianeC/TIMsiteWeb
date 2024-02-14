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
                <li class="formulaire__destinataires__item active">
                    <div class="conteneurFormPhotoTexte">
                        <img class="formulaire__destinataires__item__img" src="liaisons/img/profile.jpg">
                        <div class="conteneurFormTexte">
                            <h3 class="formulaire__destinataires__item__h3 h3">Sylvain Lamoureux</h3>
                            <p class="formulaire__destinataires__item__contact">(418) 659-6600 Poste 6662</p>
                        </div>
                    </div>
                    <h4 class="formulaire__destinataires__item__h4 h4">Coordonateur départemental</h4>
                </li>
                <li class="formulaire__destinataires__item inactive">
                    <div class="conteneurFormPhotoTexte">
                        <img class="formulaire__destinataires__item__img" src="liaisons/img/profile.jpg">
                        <div class="conteneurFormTexte">
                            <h3 class="formulaire__destinataires__item__h3 h3">Ève Février</h3>
                            <p class="formulaire__destinataires__item__contact">(418) 659-6600 Poste 6655</p>
                        </div>
                    </div>
                    <h4 class="formulaire__destinataires__item__h4 h4">Webmestre</h4>
                </li>
                <li class="formulaire__destinataires__item inactive">
                    <div class="conteneurFormPhotoTexte">
                        <img class="formulaire__destinataires__item__img" src="liaisons/img/profile.jpg">
                        <div class="conteneurFormTexte">
                            <h3 class="formulaire__destinataires__item__h3 h3">Pascal Larouche</h3>
                            <p class="formulaire__destinataires__item__contact">(418) 659-6600 Poste 6653</p>
                        </div>
                    </div>
                    <h4 class="formulaire__destinataires__item__h4 h4">Responsable des stages</h4>
                </li>
                <li class="formulaire__destinataires__item inactive">
                    <div class="conteneurFormPhotoTexte">
                        <img class="formulaire__destinataires__item__img" src="liaisons/img/profile.jpg">
                        <div class="conteneurFormTexte">
                            <h3 class="formulaire__destinataires__item__h3 h3">Benoît Frigon</h3>
                            <p class="formulaire__destinataires__item__contact">(418) 659-6600 Poste 6656</p>
                        </div>
                    </div>
                    <h4 class="formulaire__destinataires__item__h4 h4">Responsable « Étudiant d’un jour » </h4>
                </li>
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

