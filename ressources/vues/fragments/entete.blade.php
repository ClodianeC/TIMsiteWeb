<span class="enteteFondRectangle"></span>
<span class="enteteFondRond"></span>
<p class="titre">Techniques d'Intégration Multimédia</p>
<p class="sous-titre">- Web et Apps -</p>
<div class="menu">
    <ul class="menu__liste">
        @foreach($lesLiens as $unLien)
            <li class="menu__liste__item">
                <a class="menu__liste__item__lien" href="{{$unLien->getLien()}}">
                    <span class='menu__liste__item__lien__rond
                        @if(isset($_GET['controleur']) && isset($_GET['action']))
                            @if($_GET['controleur'] === $unLien->getControleur() && $_GET['action'] === $unLien->getAction())
                                actif
                            @endif
                        @elseif($unLien->getIdentifiant() === 'programme')
                            actif
                        @endif
                    '>
                        <span class="menu__liste__item__lien__rond__icone" id="{{$unLien->getIdentifiant()}}"></span>
                    </span>
                    <p class="menu__liste__item__lien__texte">{{$unLien->getNom()}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</div>
