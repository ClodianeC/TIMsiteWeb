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
                        textStyle: { color: 'white'}},
                    4: {color: '#D0E3CC'}
                },
                backgroundColor :  {
                    fill: 'transparent'
                },
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

    <div id="piechart" style="width: 900px; height: 900px;"></div>

@endsection



