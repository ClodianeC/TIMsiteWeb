@extends('gabarit')

@section('title')
    Les projets
@endsection

@section('contenu')
    <h1 class="h1">Les projets</h1>
    <p class="accroche">Page {{$noPage + 1}}</p>

    <div class="fondFiltresTri">
        <form class="filtresTri" action="index.php" method="GET">
            <h2 class="filtresTri__h2 h2">Filtrer les projets:</h2>
            <input type="hidden" name="controleur" value="projet" ></input>
            <input type="hidden" name="action" value="index" ></input>
            <div class="filtresTri__section">
                <h3 class="filtresTri__section__h3 h3">Par année:</h3>
                <ul class="filtresTri__section__liste">
                    @for($i=1; $i<=3; $i++)
                        <li class="filtresTri__section__liste__item">
                            <input type="checkbox" value="{{$i}}" name="annee[]" id="annee{{$i}}" class="filtresTri__section__liste__item__checkbox"
                                   @if(isset($_POST['annee']))
                                        @if(array_search($i, $_POST['annee']) !== false)
                                            checked
                                        @endif
                                   @elseif(isset($_GET['annee']))
                                        @if(array_search($i, $_GET['annee']) !== false)
                                            checked
                                        @endif
                                   @endif
                                   >
                            <label for="annee{{$i}}" class="filtresTri__section__liste__item__label">
                                <span>{{$i}}
                                    <sup>
                                        @if($i <= 1)
                                            ère
                                        @else
                                            ème
                                        @endif
                                    </sup> année
                                </span>
                                <span class="filtresTri__section__liste__item__label__icone">
                                </span>
                            </label>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="filtresTri__section">
                <h3 class="filtresTri__section__h3 h3">Par axe de formation:</h3>
                <ul class="filtresTri__section__liste">
                    @foreach($lesAxes as $unAxe)
                        <li class="filtresTri__section__liste__item">
                            <input type="checkbox" value="{{$unAxe->getId()}}" name="axeFormation[]" id="axe{{$unAxe->getId()}}" class="filtresTri__section__liste__item__checkbox"
                                @if(isset($_POST['axeFormation']))
                                    @if(array_search($unAxe->getId(), $_POST['axeFormation']) !== false)
                                        checked
                                    @endif
                                @elseif(isset($_GET['axeFormation']))
                                    @if(array_search($unAxe->getId(), $_GET['axeFormation']) !== false)
                                        checked
                                    @endif
                                @endif
                            >
                            <label for="axe{{$unAxe->getId()}}" class="filtresTri__section__liste__item__label">{{$unAxe->getNom()}}<span class="filtresTri__section__liste__item__label__icone"></span></label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <button class="filtresTri__btnTriEtFiltre btnPrincipal" id="triEtFiltre">Appliquer les filtres</button>
            @if(isset($_POST['axeFormation']) || isset($_POST['annee']) || isset($_GET['axeFormation']) || isset($_GET['annee']))
                <a href="index.php?controleur=projet&action=index" class="filtresTri__btnTriEtFiltre btnSecondaire">Réinitialiser les filtres</a>
            @endif
        </form>
    </div>

    <div class="lesProjets">
        @if(count($lesProjets) <= 0)
            <div class="aucunProjet">
                <p class="aucunProjet__accroche accroche">Désolé!</p>
                <p class="aucunProjet__texte">Aucun projet ne correspond aux critères de recherche que vous avez sélectionnés. Changez vos critères de recherche ou réinitialisez les filtres pour voir des projets.</p>
            </div>
        @endif
        @foreach($lesProjets as $unProjet)
            @if($loop->iteration % 2 == 0)
                <a href="index.php?controleur=projet&action=fiche&idProjet={{$unProjet->getId()}}" class="lesProjets__unProjet impair">
            @else
                <a href="index.php?controleur=projet&action=fiche&idProjet={{$unProjet->getId()}}" class="lesProjets__unProjet pair">
            @endif
                <img class="lesProjets__unProjet__img"
                @if(is_file("liaisons/img/projets/principales/".$unProjet->getDiplomeId() . "_" . $unProjet->getId(). "_01_300.png"))
                    src="liaisons/img/projets/principales/{{$unProjet->getDiplomeId()}}_{{$unProjet->getId()}}_01_300.png"
                @else
                    src="liaisons/img/projets/placeholders/projet{{rand(1, 4)}}.svg"
                @endif
                alt="Image du projet {{$unProjet->getTitre()}}">
                <h2 class="lesProjets__unProjet__h2 h2" title="{{$unProjet->getTitre()}}">
                    {{substr($unProjet->getTitre(), 0, 34)}}
                    @if(strlen($unProjet->getTitre()) > 34)
                        ...
                    @endif
                </h2>
            </a>
        @endforeach
    </div>

    @if(count($lesProjets) >=1)
        <div class="pagination">
            <a
            @if($noPage > 0)
                class="pagination__lien hyperlien" href="{{$urlPagination}}&page=0"
            @else
                class="pagination__lien"
            @endif
            >
                Premier
            </a>

            <div class="pagination__separateur">

            </div>

            <a
            @if($noPage > 0)
                class="pagination__lien hyperlien" href="{{$urlPagination}}&page={{$noPage - 1}}"
            @else
                class="pagination__lien"
            @endif
            >
                Précédent
            </a>

            <div class="pagination__separateur">

            </div>

            <p class="pagination__texte">Page {{$noPage + 1}} de {{$nbPagesTotal + 1}}</p>

            <div class="pagination__separateur">

            </div>

            <a
            @if($noPage < $nbPagesTotal)
                class="pagination__lien hyperlien" href="{{$urlPagination}}&page={{$noPage + 1}}"
            @else
                class="pagination__lien"
            @endif
            >
                Suivant
            </a>

            <div class="pagination__separateur">

            </div>

            <a
            @if($noPage < $nbPagesTotal)
                class="pagination__lien hyperlien" href="{{$urlPagination}}&page={{$nbPagesTotal}}"
            @else
                class="pagination__lien"
            @endif
            >
                Dernier
            </a>
        </div>
    @endif

@endsection