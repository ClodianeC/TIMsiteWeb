@extends('gabarit')

@section('title')
    Les diplômés
@endsection

@section('contenu')
    <h1 class="h1">Les diplômés</h1>
    <p class="accroche">2024</p>

    <div class="fondDiplomes">
        <div class="lesDiplomes">
            @foreach($lesDiplomes as $unDiplome)
                @if($loop->iteration % 2 == 0)
                    <a href="index.php?controleur=diplome&action=fiche&idDiplome={{$unDiplome->getId()}}" class="lesDiplomes__unDiplome impair">
                @else
                    <a href="index.php?controleur=diplome&action=fiche&idDiplome={{$unDiplome->getId()}}" class="lesDiplomes__unDiplome pair">
                @endif
                    <img class="lesDiplomes__unDiplome__img"
                         @if(is_file("liaisons/img/diplomes/".$unDiplome->getId().".jpg"))
                             src="liaisons/img/diplomes/{{$unDiplome->getId()}}.jpg"
                         @else
                             src="liaisons/img/profile.jpg"
                         @endif
                         alt="Image de {{$unDiplome->getPrenom()}} {{$unDiplome->getNom()}}">
                    <h2 class="lesDiplomes__unDiplome__nom h2">{{$unDiplome->getPrenom()}} {{$unDiplome->getNom()}}</h2>
                </a>
            @endforeach
        </a>
    </div>
@endsection