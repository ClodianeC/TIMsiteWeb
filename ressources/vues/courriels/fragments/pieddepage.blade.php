<h3>Répondez à {{$prenom}} {{$nom}}</h3>
<h4>À l'adresse courriel: {{$courrielExpediteur}}</h4>
@if($telExpediteur !== null)
    <h4>Le no de téléphone du destinataire <a href="tel:+{{ $telExpediteur }}">{{ $telExpediteur }}</a></h4>
@endif
