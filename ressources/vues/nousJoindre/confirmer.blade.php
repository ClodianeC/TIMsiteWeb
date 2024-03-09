@extends('gabarit')

@section('title')
    Confirmation du message
@endsection

@section('contenu')
    @if($_SESSION['tValidation'] != null && $_SESSION['tValidation'] != '')
        <h1>Bien reçu!</h1>
        <div class="fondConfirmation">
            <p class="accroche">Votre message à {{$lesResponsables[(int) $_SESSION['tValidation']['destinataire']['valeur'] -1]->getPrenom()}} {{$lesResponsables[(int) $_SESSION['tValidation']['destinataire']['valeur'] -1]->getNom()}} s'est bel et bien envoyé.</p>
            <p>{{$lesResponsables[(int) $_SESSION['tValidation']['destinataire']['valeur'] -1]->getPrenom()}} {{$lesResponsables[(int) $_SESSION['tValidation']['destinataire']['valeur'] -1]->getNom()}} vous répondra sous peu.</p>
            <p class="accroche">Merci de votre intérêt et au plaisir de peut-être vous voir en TIM!</p>
            <a class="hyperlien" href="index.php?controleur=site&action=leProgramme">Retourner à l'accueil</a>
        </div>
    @else
        @php
            unset($_SESSION['tValidation']);
            header('Location: index.php?controleur=site&action=leProgramme');
            exit;
        @endphp
    @endif
@endsection

