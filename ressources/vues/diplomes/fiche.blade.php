@extends('gabarit')

@section('title')
    {{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}
@endsection

@section('contenu')
    <h1 class="h1">{{$leDiplome->getPrenom()}} {{$leDiplome->getNom()}}</h1>

@endsection