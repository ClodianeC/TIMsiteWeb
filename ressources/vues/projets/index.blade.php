@extends('gabarit')

@section('title')
    Les projets
@endsection

@section('contenu')
    <h1 class="h1">Les projets</h1>
    <p class="accroche">Page {{$noPage + 1}}</p>

    <div class="fondFiltresTri">
        <form class="filtresTri" action="index.php?controleur=projet&action=index&filtres=true" method="POST">
            <h2 class="filtresTri__h2 h2">Filtrer les projets:</h2>
            <div class="filtresTri__section">
                <h3 class="filtresTri__section__h3 h3">Par année:</h3>
                <ul class="filtresTri__section__liste">
                    @for($i=1; $i<=3; $i++)
                        <li class="filtresTri__section__liste__item">
                            <input type="checkbox" value="{{$i}}" name="annee[]" id="annee{{$i}}" class="filtresTri__section__liste__item__checkbox">
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
                            <input type="checkbox" value="axe{{$unAxe->getId()}}" name="axeFormation[]" id="axe{{$unAxe->getId()}}" class="filtresTri__section__liste__item__checkbox">
                            <label for="axe{{$unAxe->getId()}}" class="filtresTri__section__liste__item__label">{{$unAxe->getNom()}}<span class="filtresTri__section__liste__item__label__icone"></span></label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <button class="filtresTri__btnTriEtFiltre btnPrincipal" id="triEtFiltre">Appliquer les filtres</button>
        </form>
    </div>

    <div class="lesProjets">
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
                <h2 class="lesProjets__unProjet__h2 h2">
                    {{substr($unProjet->getTitre(), 0, 34)}}
                    @if(strlen($unProjet->getTitre()) > 34)
                        ...
                    @endif
                </h2>
            </a>
        @endforeach
    </div>

    <div class="pagination">
        <a
        @if($noPage > 0)
            class="pagination__lien hyperlien" href="{{$urlPagination}}&page=0"
        @else
            class="pagination__lien"
        @endif
        >Premier</a>

        |

        <a
        @if($noPage > 0)
            class="pagination__lien hyperlien" href="{{$urlPagination}}&page={{$noPage - 1}}"
        @else
            class="pagination__lien"
        @endif
        >Précédent</a>

        |

        <p class="pagination__texte">Page {{$noPage + 1}} de {{$nbPagesTotal + 1}}</p>

        |

        <a
        @if($noPage < $nbPagesTotal)
            class="pagination__lien hyperlien" href="{{$urlPagination}}&page={{$noPage + 1}}"
        @else
               class="pagination__lien"
        @endif
        >Suivant</a>

        |

        <a
        @if($noPage < $nbPagesTotal)
            class="pagination__lien hyperlien" href="{{$urlPagination}}&page={{$nbPagesTotal}}"
        @else
            class="pagination__lien"
        @endif
        >Dernier</a>
    </div>

@endsection