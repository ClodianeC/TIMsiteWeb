Nouveau courriel de {{$prenom}} {{$nom}}
Venant du site web de la TIM

{{ $contenuCourriel }}
Le courriel du destinataire {{ $leCourrielRespo }}

Répondez à {{$prenom}} {{$nom}}
À l'adresse courriel: {{$courrielExpediteur}}
@if($telExpediteur !== null)
    Le no de téléphone du destinataire {{ $telExpediteur }}
@endif
