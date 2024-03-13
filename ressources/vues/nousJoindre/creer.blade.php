@extends('gabarit')

@section('title')
    Nous joindre
@endsection

@section('contenu')
{{--    @php var_dump($tValidation) @endphp--}}
    <h1 class="h1">Nous joindre</h1>
    <form action="index.php?controleur=joindre&action=inserer" method="POST" class="formulaire">
        <div class="selectionMoyen">
            <input type="radio" class="selectionMoyen__input" name="selectionContactPar" id="contactParCourriel" value="courriel" checked>
            <label for="contactParCourriel" class="selectionMoyen__label">
                <span class="selectionMoyen__label__h2 h2">Par courriel</span>
                <span class="selectionMoyen__label__icone" id="iconeParCourriel"></span>
            </label>
            <input type="radio" class="selectionMoyen__input" name="selectionContactPar" id="contactParTel" value="telephone">
            <label for="contactParTel" class="selectionMoyen__label">
                <span class="selectionMoyen__label__h2 h2">Par téléphone</span>
                <span class="selectionMoyen__label__icone" id="iconeParTel"></span>
            </label>
        </div>
        <div class="fondFormulaire">
            <div class="conteneurForm">
                <p class="formulaire__info">*Champs obligatoires</p>
                <div class="conteneurNomPrenom elementCourriel">
                    <div>
                        <label class="formulaire__label elementCourriel elementCourriel" for="prenom">Prénom*</label>
                        <input type="text"
                               id="prenom"
                               name="prenom"
                               title="Caractères alphabétiques français seulement."
                               value="@isset($tValidation['prenom']['valeur']){{$tValidation['prenom']['valeur']}}@endisset"
                               class="formulaire__input moyen elementCourriel @isset($tValidation['prenom']['estValide']) @if($tValidation['prenom']['estValide'] === false) erreur @endif @endisset">
                        <p class="formulaire__message elementCourriel">
                        @if(isset($tValidation['prenom']))
                            @if($tValidation['prenom']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['prenom']['messageErreur']}} @endif
                            @if($tValidation['prenom']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                        @endif
                        </p>
                    </div>
                    <div>
                        <label class="formulaire__label elementCourriel elementCourriel" for="nom">Nom*</label>
                        <input type="text"
                               id="nom"
                               name="nom"
                               title="Caractères alphabétiques français seulement."
                               value="@isset($tValidation['nom']['valeur']){{$tValidation['nom']['valeur']}}@endisset"
                               class="formulaire__input moyen elementCourriel @isset($tValidation['nom']['estValide']) @if($tValidation['nom']['estValide'] === false) erreur @endif @endisset">
                        <p class="formulaire__message elementCourriel">
                            @if(isset($tValidation['nom']))
                                @if($tValidation['nom']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['nom']['messageErreur']}} @endif
                                @if($tValidation['nom']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                            @endif
                        </p>
                    </div>
                </div>
                <label class="formulaire__label elementCourriel elementCourriel" for="courriel">Courriel*</label>
                <input type="text"
                       id="courriel"
                       name="courriel"
                       title="Adresse courriel valide."
                       value="@isset($tValidation['courriel']['valeur']){{$tValidation['courriel']['valeur']}}@endisset"
                       class="formulaire__input large elementCourriel @isset($tValidation['courriel']['estValide']) @if($tValidation['courriel']['estValide'] === false) erreur @endif @endisset">
                <p class="formulaire__message elementCourriel">
                    @if(isset($tValidation['courriel']))
                        @if($tValidation['courriel']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['courriel']['messageErreur']}} @endif
                        @if($tValidation['courriel']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                    @endif
                </p>
                <ul class="formulaire__destinataires @isset($tValidation['destinataire']['estValide']) @if($tValidation['destinataire']['estValide'] === false) erreur @endif @endisset">
                    @foreach($lesResponsables as $unResponsable)
                        <li class="formulaire__destinataires__item">
                            <input type="radio" class="formulaire__destinataires__item__input screen-reader-only" id="selection{{$unResponsable->getNom()}}" value="{{$unResponsable->getId()}}" name="destinataire"
                                @if(isset($_GET['idResponsable']))
                                    @if((int) $_GET['idResponsable'] === $unResponsable->getId())
                                        checked
                                    @endif
                                @else
                                    @isset($tValidation['destinataire']['valeur'])
                                        @if($tValidation['destinataire']['valeur'] === $unResponsable->getId())
                                            checked
                                        @endif
                                    @endisset
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
                <p class="formulaire__message">
                    @if(isset($tValidation['destinataire']))
                        @if($tValidation['destinataire']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['destinataire']['messageErreur']}} @endif
                        @if($tValidation['destinataire']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                    @endif
                </p>
                <div class="formulaire__sectionBen  elementCourriel" id="sectionBen">
                    <label class="formulaire__sectionBen__label" for="telephone">Numéro de téléphone*</label>
                    <input type="text"
                           id="telephone"
                           name="telephone"
                           title="Numéro de téléphone au format xxx xxx xxxx ou xx xx xx xx."
                           value="@isset($tValidation['telephone']['valeur']){{$tValidation['telephone']['valeur']}}@endisset"
                           class="formulaire__sectionBen__input moyen @isset($tValidation['telephone']['estValide']) @if($tValidation['telephone']['estValide'] === false) erreur @endif @endisset">
                    <p class="formulaire__message elementCourriel">
                        @if(isset($tValidation['telephone']))
                            @if($tValidation['telephone']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['telephone']['messageErreur']}} @endif
                            @if($tValidation['telephone']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                        @endif
                    </p>
                    <input type="checkbox"
                           id="consentement"
                           name="consentement"
                           title="Acceptez le partage de votre numéro."
                           value="checked_value"
                           class="formulaire__sectionBen__checkbox @isset($tValidation['consentement']['estValide']) @if($tValidation['consentement']['estValide'] === false) erreur @endif @endisset">
                    <label class="formulaire__sectionBen__labelCheck" for="consentement">J'autorise l'utilisation de mon numéro de téléphone avec le responsable «Étudiant d'un jour»*</label>
                    <p class="formulaire__message elementCourriel">
                        @if(isset($tValidation['consentement']))
                            @if($tValidation['consentement']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['consentement']['messageErreur']}} @endif
                            @if($tValidation['consentement']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                        @endif
                    </p>
                </div>
                <label class="formulaire__label elementCourriel" for="sujet">Sujet*</label>
                <input type="text"
                       id="sujet"
                       name="sujet"
{{--                       required--}}
                       title="Caractères alphabétiques français seulement."
                       value="@isset($tValidation['sujet']['valeur']){{$tValidation['sujet']['valeur']}}@endisset"
                       class="formulaire__input large elementCourriel @isset($tValidation['sujet']['estValide']) @if($tValidation['sujet']['estValide'] === false) erreur @endif- @endisset">
                <p class="formulaire__message elementCourriel">
                    @if(isset($tValidation['sujet']))
                        @if($tValidation['sujet']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['sujet']['messageErreur']}} @endif
                        @if($tValidation['sujet']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                    @endif
                </p>
                <label class="formulaire__label elementCourriel" for="message">Message*</label>
                <textarea
                    id="message"
                    name="message"
                    title="Caractères alphabétiques français seulement."
                    class="formulaire__input xLarge elementCourriel @isset($tValidation['message']['estValide']) @if($tValidation['message']['estValide'] === false) erreur @endif @endisset"
                >
                    @isset($tValidation['message']['valeur']){{$tValidation['message']['valeur']}}@endisset
                </textarea>
                <p class="formulaire__message elementCourriel">
                @if(isset($tValidation['message']))
                    @if($tValidation['message']['messageErreur'] !== "") <span class="spriteRETRO spriteRETRO--warning"></span>{{$tValidation['message']['messageErreur']}} @endif
                    @if($tValidation['message']['messageErreur'] === "") <span class="spriteRETRO spriteRETRO--ok"></span> @endif
                @endif
                </p>
            </div>
        </div>
        <div class="g-recaptcha elementCourriel" data-sitekey="6Lfl5JcpAAAAABr11pv4rSVMlK-5PEbd8ze_z18Y"></div>
        <button class="btnPrincipal active" id="envoyerCourriel">Envoyer un courriel</button>
        <a class="btnPrincipal inactive" id="appeler" href="tel:">Appeler</a>
    </form>

    <script src="liaisons/script/messages-erreur_form.js"></script>
    <script src="liaisons/script/formulaire.js"></script>
    <script src="liaisons/script/validationClient.js"></script>
    <script src="liaisons/script/appel.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async></script>
@endsection

