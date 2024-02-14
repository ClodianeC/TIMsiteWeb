@extends('gabarit')

@section('title')
    Le programme
@endsection

@section('contenu')
    <h1 class="h1">Le programme</h1>
{{--    <p>{{$contenu}}</p>--}}
    <p class="accroche">Conception, médias, intégration et programmation. Un seul but, former des techniciennes et des techniciens polyvalents, aptes à réaliser des sites et des applications Web de A à Z.</p>

    <div class="wrapper">

        <div class="pie-wrap">
            <div class="light-yellow entry">
                <p>25%</p>
                <p class="entry-value">Rice</p>
            </div>

            <div class="sky-blue entry">
                <p>25%</p>
                <p class="entry-value">Pasta</p>
            </div>

            <div class="pink entry">
                <p>12.5%</p>
                <p class="entry-value">Beans </p>
            </div>

            <div class="purple entry">
                <p> 12.5%</p>
                <p class="entry-value">Plantain</p>
            </div>

            <div class="green entry">
                <p> 12.5%</p>
                <p class="entry-value">Potato</p>
            </div>

            <div class="wheat entry">
                <p> 12.5%</p>
                <p class="entry-value">Yam</p>
            </div>
        </div>

        <div class="key-wrap">
            <input type="radio" id="rice" name="values" class="rice-key"/>
            <label for="rice" class="rice-label">Rice</label>

            <input type="radio" name="values" id="beans" class="beans-key"/>
            <label for="beans" class="beans-label"> Beans</label>

            <input type="radio" name="values" id="plantain" class="plantain-key"/>
            <label for="plantain" class="plantain-label"> Plantain</label>

            <input type="radio" name="values" id="potato" class="potato-key"/>
            <label for="potato" class="potato-label"> Potato</label>

            <input type="radio" name="values" id="yam" class="yam-key"/>
            <label for="yam" class="yam-label"> Yam</label>

            <input type="radio" name="values" id="pasta" class="pasta-key"/>
            <label for="pasta" class="pasta-label"> Pasta</label>

            <p class="rice-text text">25% of the people eat Rice</p>
            <p class="beans-text text">12.5% of the people eat Beans</p>
            <p class="plantain-text text">12.5% of the people eat Plantain</p>
            <p class="potato-text text">12.5% of the people eat Potato</p>
            <p class="yam-text text">12.5% of the people eat Yam</p>
            <p class="pasta-text text">25% of the people eat Pasta</p>
        </div>


    </div>

@endsection



