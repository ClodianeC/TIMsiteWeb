@extends('gabarit')

@section('title')
    Le programme
@endsection

@section('graphique')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Aspects du programme', 'Pourcentage'],
                ["Programmation", 25],
                ['Intégration', 25],
                ['Conception', 25],
                ['Médias', 15],
                ['Autres', 10]
            ]);

            var options = {
                allowHTML: true,
                title: '',
                pieStartAngle: 10,
                slices: {
                    0: {color: '#95AA91'},
                    1: {color: '#B5C6B2'},
                    2: {color: '#6A8065'},
                    3: {color: '#3D5139',
                        textStyle: { color: '#FFFAF1'}},
                    4: {color: '#D0E3CC'}
                },
                backgroundColor :  {
                    stroke: 'transparent',
                    fill: 'transparent'
                },
                pieSliceBorderColor: 'transparent',
                fontName: "Caviar Dreams",
                pieSliceText: 'label',
                pieSliceTextStyle: {
                    color: 'black'
                },
                fontSize: 18,
                legend: {
                    // position: 'none',
                    alignment: 'center',
                    textStyle: {
                        fontSize: 16
                    },
                },
                tooltip: {
                    showColorCode: true,
                    text: 'percentage'
                },
                chartArea: {
                    width: '100%',
                    height: '100%'
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

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

{{--  PieChart de Google  --}}
{{--  https://developers.google.com/chart/interactive/docs/gallery/piechart  --}}
    <div id="piechart" style="width: 900px; height: 900px;"></div>

    <div class="fondInfoPrgramme">
        <div class="infoProgramme">
            <div class="infoProgramme__titreExplication">
                <h2 class="infoProgramme__titreExplication__h2">{{$lesAxes[4]->getNom()}} - {{$lesAxes[4]->getPourcentage()}}%</h2>
                <p class="infoProgramme__titreExplication__texte">{!! strtok($lesAxes[4]->getDescription() , '<') !!}</p>
            </div>

            <ul class="infoProgramme__listeExemples">
                {!! str_replace('</ul>', '', substr($lesAxes[4]->getDescription(), strpos($lesAxes[4]->getDescription(), '>') + 1)) !!}
            </ul>
        </div>
    </div>

    <div class="infoSuppProgramme">
        <h2 class="infoSuppProgramme__h2 h2">Pour avoir de l'information plus spécifique sur les cours</h2>
        <div class="infoSuppProgramme__boutons">
            <a href="https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/" class="btnPrincipal infoSuppProgramme__boutons__btnSiteCegep">Visite le site web du Cégep de Sainte-Foy</a>
            <div class="infoSuppProgramme__boutons__ou"><span class="infoSuppProgramme__boutons__ou__texte">OU</span></div>
            <button class="btnSecondaire infoSuppProgramme__boutons__btnTelechargerGrille">Télécharge la grille du cours</button>
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
            <h2 class="etudiantDunJour__h2 h2">Étudiante et étudiant d'un jour</h2>
            <div class="etudiantDunJour__infos">
                <p class="etudiantDunJour__infos__texte">Tu veux en apprendre plus sur le programme? Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous, en Techniques d'intégration multimédia!</p>
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
@endsection



