@extends('gabarit')

@section('title')
    Le programme
@endsection

@section('contenu')
    <h1 class="h1">Le programme</h1>
    <p class="accroche">{!! substr($lesTextes[11]->getTexte(), strpos($lesTextes[11]->getTexte(), '>') + 1) !!}</p>

    <div class="fondBoursesPerspective">
        <div class="boursesPerspective">
            <h2 class="boursesPerspective__h2 h2">{{ $lesTextes[9]->getTitre() }}</h2>
            {!! substr($lesTextes[9]->getTexte(), 0, strpos($lesTextes[9]->getTexte(), '<p') + 2) !!} class="boursesPerspective__texte" {!! substr($lesTextes[9]->getTexte(), strpos($lesTextes[9]->getTexte(), '<p') + 2, strpos($lesTextes[9]->getTexte(), '<a') + 1) !!} class="boursesPerspective__texte__lien hyperlien" {!! substr($lesTextes[9]->getTexte(), strpos($lesTextes[9]->getTexte(), '<a') + 2) !!}
        </div>
    </div>

    <p class="accroche">{!! $lesTextes[10]->getTexte() !!}</p>

    <div class="lesAxesDuProgramme">
        <div class="pieChart">
            @php($start = 0)
            @php($colors = ['#95AA91', '#B5C6B2', '#6A8065', '#3D5139', '#D0E3CC'])
            @foreach($lesAxes as $unAxe)
                <div
                        class="pieSlice pie{{$unAxe->getId()}}"
                        id="pie{{$unAxe->getId()}}"
                        style="background: conic-gradient(transparent 0% {{$start}}deg,
                                                  {{$colors[$loop->iteration-1]}} {{$start}}deg {{$start + $unAxe->getPourcentage()*360/100 +1}}deg,
                                                  transparent 25%)">
                    <span class="pourcentage">{{$unAxe->getPourcentage()}}%</span>
                    <span class="nom">{{$unAxe->getNom()}}</span>
                </div>
                @php($start = $start + $unAxe->getPourcentage()*360/100)
            @endforeach
        </div>
        <div class="lesBtns">
            @foreach($lesAxes as $unAxe)
                <button class="btnAxes" id="btnAxe{{$unAxe->getId()}}" style="background-color: {{$colors[$loop->iteration-1]}}">{{$unAxe->getNom()}}</button>
            @endforeach
        </div>
    </div>


    <div class="fondInfoPrgramme">
        @foreach($lesAxes as $unAxe)
            <div class="infoProgramme nonSelectionne" id="sectionAxe{{$unAxe->getId()}}">
                <div class="infoProgramme__titreExplication">
                    <h2 class="infoProgramme__titreExplication__h2">{{$unAxe->getNom()}} - {{$unAxe->getPourcentage()}}%</h2>
                    <p class="infoProgramme__titreExplication__texte">{!! strtok($unAxe->getDescription() , '<') !!}</p>
                </div>

                <ul class="infoProgramme__listeExemples">
                    {!! str_replace('</ul>', '', substr($unAxe->getDescription(), strpos($unAxe->getDescription(), '>') + 1)) !!}
                </ul>
            </div>
        @endforeach
    </div>

    <div class="infoSuppProgramme">
        <h2 class="infoSuppProgramme__h2 h2">Pour avoir de l'information plus spécifique sur les cours</h2>
        <div class="infoSuppProgramme__boutons">
            <a href="https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/" class="btnPrincipal infoSuppProgramme__boutons__btnSiteCegep">Visite la page du programme</a>
            <div class="infoSuppProgramme__boutons__ou"><span class="infoSuppProgramme__boutons__ou__texte">OU</span></div>
            <a class="btnSecondaire infoSuppProgramme__boutons__btnTelechargerGrille" href="liaisons/pdf/grille_cours_TIM.pdf">Télécharge la grille du cours</a>
        </div>
    </div>

    <div class="fondDemandeAdmission">
        <div class="demandeAdmission">
            <h2 class="demandeAdmission__h2 h2">{{$lesTextes[5]->getTitre()}}</h2>
            <div class="demandeAdmission__sectionGauche">
                {!! substr($lesTextes[5]->getTexte(), 0, strpos($lesTextes[5]->getTexte(), '<a') + 2) !!}
                class="hyperlien"
                {!! substr($lesTextes[5]->getTexte(), strpos($lesTextes[5]->getTexte(), '<a') + 2) !!}
            </div>
            <div class="demandeAdmission__sectionDroite">
                <h3 class="demandeAdmission__sectionDroite__h3">En bref:</h3>
                <div class="demandeAdmission__sectionDroite__bulleDates">
                    <h4 class="demandeAdmission__sectionDroite__bulleDates__h4">L'inscription se fait avant le:</h4>
                    <ul class="demandeAdmission__sectionDroite__bulleDates__liste">
                        <li class="demandeAdmission__sectionDroite__bulleDates__liste__item"><span>1<sup>er</sup> mars</span> <span class="demandeAdmission__sectionDroite__bulleDates__liste__item__icone"></span> 1<sup>er</sup> tour</li>
                        <li class="demandeAdmission__sectionDroite__bulleDates__liste__item"><span>1<sup>er</sup> mai</span> <span class="demandeAdmission__sectionDroite__bulleDates__liste__item__icone"></span> 2<sup>ème</sup> tour</li>
                        <li class="demandeAdmission__sectionDroite__bulleDates__liste__item"><span>1<sup>er</sup> juin</span> <span class="demandeAdmission__sectionDroite__bulleDates__liste__item__icone"></span> 3<sup>ème</sup> tour</li>
                        <li class="demandeAdmission__sectionDroite__bulleDates__liste__item"><span>1<sup>er</sup> août</span> <span class="demandeAdmission__sectionDroite__bulleDates__liste__item__icone"></span> 4<sup>ème</sup> tour</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="etudiantInternational">
        <h2 class="etudiantInternational__h2 h2">{!! $lesTextes[6]->getTitre() !!}</h2>
        {!! substr($lesTextes[6]->getTexte(), 0, strpos($lesTextes[6]->getTexte(), '<a') + 2) !!}
        class="hyperlien"
        {!! substr($lesTextes[6]->getTexte(), strpos($lesTextes[6]->getTexte(), '<a') + 2) !!}
    </div>

    <div class="fondEtudiantDunJour">
        <div class="etudiantDunJour">
            <h2 class="etudiantDunJour__h2 h2">{{$lesTextes[7]->getTitre()}}</h2>
            <div class="etudiantDunJour__infos">
                <p class="etudiantDunJour__infos__texte">{{ substr($lesTextes[7]->getTexte(), 3, strpos($lesTextes[7]->getTexte(), '</p>')) }}</p>
                <p class="etudiantDunJour__infos__contact">Contacter <a class="etudiantDunJour__infos__contact__benoitF hyperlien" href="index.php?controleur=joindre&action=creer&idResponsable=4">Benoît Frigon</a> pour en savoir plus.</p>
            </div>
        </div>
    </div>

    <div class="fondApresTim">
        <div class="apresTim">
            <h2 class="apresTim__h2">Et qu'est-ce qu'il se passe après la TIM?</h2>
            @for($i=18; $i<=21; $i++)
                <button class="apresTim__section" id="sectionApresTim{{$i}}">
                    <h3 class="apresTim__section__h3 h3">{{$lesTextes[$i]->getTitre()}}</h3>
                    <span class="apresTim__section__icone"></span>
                    @if($i !== 21)
                        {!! substr($lesTextes[$i]->getTexte(), 0, strpos($lesTextes[$i]->getTexte(), 'Postes') -3) !!}
                    <div class="apresTim__section__sousSection">
                        {!! substr($lesTextes[$i]->getTexte(), strpos($lesTextes[$i]->getTexte(), 'Postes'), strpos($lesTextes[$i]->getTexte(), ':') - strpos($lesTextes[$i]->getTexte(), 'Postes') +1) !!}
                        <ul class="apresTim__section__liste">
                            @foreach(explode(',', substr($lesTextes[$i]->getTexte(), strpos($lesTextes[$i]->getTexte(), ':') +1)) as $uneLigne)
                                <li>{!! $uneLigne !!}</li>
                            @endforeach
                        </ul>
                    </div>

                    @else
                        {!! substr($lesTextes[$i]->getTexte(), 0, strpos($lesTextes[$i]->getTexte(), '<u')) !!}
                        <div class="apresTim__section__sousSection">
                            {!! substr($lesTextes[$i]->getTexte(), strpos($lesTextes[$i]->getTexte(), '<u')) !!}
                        </div>
                    @endif
                </button>
            @endfor
            <div class="apresTim__employeurs">
                <h3 class="apresTim__employeurs__h3 h3">{{$lesTextes[22]->getTitre()}}</h3>
                {!! $lesTextes[22]->getTexte() !!}
            </div>
        </div>
    </div>

    <script src="liaisons/script/apresTim.js"></script>
    <script src="liaisons/script/lesAxes.js"></script>
@endsection



