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
{{--    <p>{{$contenu}}</p>--}}
    <p class="accroche">Conception, médias, intégration et programmation. Un seul but, former des techniciennes et des techniciens polyvalents, aptes à réaliser des sites et des applications Web de A à Z.</p>

{{--  PieChart de Google  --}}
{{--  https://developers.google.com/chart/interactive/docs/gallery/piechart  --}}
    <div id="piechart" style="width: 900px; height: 900px;"></div>

    <div class="fondInfoPrgramme">
        <div class="infoProgramme">
            <div class="infoProgramme__titreExplication">
                <h2 class="infoProgramme__titreExplication__h2">Intégration - 25%</h2>
                <p class="infoProgramme__titreExplication__texte">Transposer les médias et le design en code sémantique et programmer l’interactivité du côté client (front-end). S’assurer de l’accessibilité de l’interface.</p>
            </div>
            <ul class="infoProgramme__listeExemples">
                <li class="infoProgramme__listeExemples__item">HTML 5</li>
                <li class="infoProgramme__listeExemples__item">SASS</li>
                <li class="infoProgramme__listeExemples__item">CSS</li>
                <li class="infoProgramme__listeExemples__item">Flex et Grid</li>
                <li class="infoProgramme__listeExemples__item">JSON</li>
                <li class="infoProgramme__listeExemples__item">JavaScript</li>
                <li class="infoProgramme__listeExemples__item">Ajax</li>
                <li class="infoProgramme__listeExemples__item">TypeScript</li>
                <li class="infoProgramme__listeExemples__item">Mobile First</li>
                <li class="infoProgramme__listeExemples__item">Responsive Web</li>
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
    <div class="fondEtudiantDunJour">
        <div class="etudiantDunJour">
            <h2 class="etudiantDunJour__h2 h2">Étudiante et étudiant d'un jour</h2>
            <div class="etudiantDunJour__infos">
                <p class="etudiantDunJour__infos__texte">Tu veux en apprendre plus sur le programme? Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous, en Techniques d'intégration multimédia!</p>
                <p class="etudiantDunJour__infos__contact">Contacter <a class="etudiantDunJour__infos__contact__benoitF hyperlien" href="index.php?controleur=site&action=nousJoindre&idResponsable=4">Benoît Frigon</a> pour en savoir plus.</p>
            </div>
        </div>
    </div>
@endsection



