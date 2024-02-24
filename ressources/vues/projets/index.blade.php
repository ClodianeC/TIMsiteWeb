@extends('gabarit')

@section('title')
    Les projets
@endsection

@section('contenu')
    <h1 class="h1">Les projets</h1>
    <p class="accroche">Page 1</p>

    <div class="fondFiltresTri">
        <div class="filtresTri">
            <h2 class="filtresTri__h2 h2">Filtrer les projets:</h2>
            <div class="filtresTri__section">
                <h3 class="filtresTri__section__h3 h3">Par année:</h3>
                <ul class="filtresTri__section__liste">
                    <li class="filtresTri__section__liste__item">
                        <input type="checkbox" value="1" name="annee" id="annee1" class="filtresTri__section__liste__item__checkbox">
                        <label for="annee1" class="filtresTri__section__liste__item__label">1<sup>ère</sup> année</label>
                    </li>
                    <li class="filtresTri__section__liste__item">
                        <input type="checkbox" value="2" name="annee" id="annee2" class="filtresTri__section__liste__item__checkbox">
                        <label for="annee2" class="filtresTri__section__liste__item__label">2<sup>ème</sup> année</label>
                    </li>
                    <li class="filtresTri__section__liste__item">
                        <input type="checkbox" value="3" name="annee" id="annee3" class="filtresTri__section__liste__item__checkbox">
                        <label for="annee3" class="filtresTri__section__liste__item__label">3<sup>ème</sup> année</label>
                    </li>
                </ul>
            </div>
            <div class="filtresTri__section">
                <h3 class="filtresTri__section__h3 h3">Par axe de formation:</h3>
                <ul class="filtresTri__section__liste">
                    @foreach($lesAxes as $unAxe)
                        <li class="filtresTri__section__liste__item">
                            <input type="checkbox" value="axe{{$unAxe->getId()}}" name="axeFormation" id="axe{{$unAxe->getId()}}" class="filtresTri__section__liste__item__checkbox">
                            <label for="axe{{$unAxe->getId()}}" class="filtresTri__section__liste__item__label">{{$unAxe->getNom()}}</label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="lesProjets">
        @foreach($lesProjets as $unProjet)
            @if($loop->iteration % 2 == 0)
                <a href="index.php?controleur=projet&action=fiche&idProjet={{$unProjet->getId()}}" class="lesProjets__unProjet impair">
            @else
                <a href="index.php?controleur=projet&action=fiche&idProjet={{$unProjet->getId()}}" class="lesProjets__unProjet pair">
            @endif
                <img class="lesProjets__unProjet__img" src="liaisons/img/projets/{{$unProjet->getDiplomeId()}}_{{$unProjet->getId()}}_01.png" alt="Image du projet {{$unProjet->getTitre()}}">
                <h2 class="lesProjets__unProjet__h2 h2">
                    {{substr($unProjet->getTitre(), 0, 34)}}
                    @if(strlen($unProjet->getTitre()) > 34)
                        ...
                    @endif
                </h2>
            </a>
        @endforeach
    </div>

@endsection