@extends('courriels.gabarit')

@section('title')
    Titre du courriel contact
@endsection

@section('contenu')
    <section>
        <p>{{ $contenuCourriel }}</p>
        <p>Le courriel du destinataire {{ $leCourrielRespo }}</p>
    </section>
@endsection



