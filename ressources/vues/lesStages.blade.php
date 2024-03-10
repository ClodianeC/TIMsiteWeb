@extends('gabarit')

@section('title')
    Les stages
@endsection

@section('contenu')
    <h1 class="h1">{{$lesTextes[23]->getTitre()}}</h1>
    <p class="accroche">
        {!! substr($lesTextes[23]->getTexte(), 0, strpos($lesTextes[23]->getTexte(), '#')) !!}
        index.php?controleur=joindre&action=creer&idResponsable=3"
        class="hyperlien"
        {!! substr($lesTextes[23]->getTexte(), strpos($lesTextes[23]->getTexte(), '#') +2) !!}
    </p>
    <div class="fondInfoStage">
        <div class="infoStage">
            <div class="infoStage__section">
                <h2 class="infoStage__section__h2 h2">Stage de fin d'étude</h2>
                <div class="infoStage__section__sousSection">
                    <h3 class="infoStage__section__sousSection__h3 h3">Début le 17 mars pour une durée de 8 semaines</h3>
                    <p class="infoStage__section__sousSection__texte">Les étudiantes et les étudiants seront ensuite disponibles à l'emploi. Ces stages rémunérés sont admissibles à des crédits d'impôt avantageux.</p>
                </div>
            </div>
            <div class="infoStage__section">
                <h2 class="infoStage__section__h2 h2">Stage Alternance travail-étude (ATE)</h2>
                <div class="infoStage__section__sousSection">
                    <h3 class="infoStage__section__sousSection__h3 h3">Début à partir du 26 mai 2025 pour une durée minimum de 8 semaines.</h3>
                    <p class="infoStage__section__sousSection__texte">Ces stages rémunérés sont admissibles à des crédits d'impôt avantageux.</p>
                </div>
            </div>
        </div>
        <p class="texteStage">Consultez le profil des compétences de nos étudiantes et étudiants.</p>
        <a class="btnPrincipal btnGrille" id="btnGrilleCompetences" href="liaisons/pdf/profilCompetences_2024.pdf">Téléchargez le profil des compétences</a>
        <p class="texteStage">Contactez <a class="infoStage__texte__lien hyperlien" href="index.php?controleur=joindre&action=creer&idResponsable=3">Pascal Larose</a> Pour en savoir plus. Téléphone : (418) 659-6600, poste 6663</p>
    </div>
    <div class="stageDerniereSession">
        <h2 class="stageDerniereSession__h2 h2">{{$lesTextes[26]->getTitre()}}</h2>
        <p class="stageDerniereSession__texte">{!! $lesTextes[26]->getTexte() !!}</p>
    </div>
    <div class="fondInfoATE">
        <div class="stageATE">
            <h2 class="stageATE__h2 h2">{{$lesTextes[25]->getTitre()}}</h2>
            {!! $lesTextes[25]->getTexte() !!}
        </div>
    </div>
@endsection