@extends('gabarit')

@section('title')
    Les stages
@endsection

@section('contenu')
    <h1 class="h1">Les stages</h1>
    <p class="accroche">Le programme TIM du Cégep de Sainte-Foy offre des stages en Alternance travail études (ATE) pendant l’été et un stage crédité à la session 6 qui peut être réalisé en France. Contacter <a class="hyperlien" href="#">Pascal Larose</a> pour en savoir plus.</p>
    <div class="fondInfoStage">
        <div class="infoStage">
            <div class="infoStage__section">
                <h2 class="infoStage__section__h2 h2">Stage de fin d'étude</h2>
                <div class="infoStage__section__sousSection">
                    <h3 class="infoStage__section__sousSection__h3 h3">Début le 17 mars pour une durée de 8 semaines</h3>
                    <p class="infoStage__section__sousSection__texte">Les étudiantes et les étudiants seront ensuite disponibles à l'emploi. Ces stages rémunérés sont admissibles à des crédits d'impôt avantageux.</p>
                </div>
            </div>
            <div class="infoStage__section">
                <h2 class="infoStage__section__h2 h2">Stage Alternance travail-étude (ATE)</h2>
                <div class="infoStage__section__sousSection">
                    <h3 class="infoStage__section__sousSection__h3 h3">Début à partir du 26 mai 2025 pour une durée minimum de 8 semaines.</h3>
                    <p class="infoStage__section__sousSection__texte">Ces stages rémunérés sont admissibles à des crédits d'impôt avantageux.</p>
                </div>
            </div>
        </div>
        <p class="texteStage">Consultez le profil des compétences de nos étudiantes et étudiants. Contactez <a class="infoStage__texte__lien hyperlien" href="#">Pascal Larose</a> Pour en savoir plus. Téléphone : (418) 659-6600, poste 6663</p>
    </div>
    <div class="stageDerniereSession">
        <h2 class="stageDerniereSession__h2 h2">Le stage de dernière session</h2>
        <p class="stageDerniereSession__texte">La dernière session de la formation est divisée en deux parties. La première comporte des cours réalisés en mode intensif d’une durée de sept semaines. La seconde est entièrement consacrée à un stage rémunéré en entreprise. </p>
    </div>
    <div class="fondInfoATE">
        <div class="stageATE">
            <h2 class="stageATE__h2 h2">Les stages en Alternance travail-étude (ATE)</h2>
            <p class="stageATE__texte">Les stages ATE sont une formule qui permet aux étudiants et aux étudiantes qui le désirent, dès la fin de la première année, de vivre une expérience de travail enrichissante, tout en étant encadré par une personne enseignante et superviseure dans un milieu de travail authentique. Cette expérience permettra à l’étudiant et à l’étudiante de vivre la réalité du marché du travail et de mettre ses nouveaux acquis à profit.</p>
            <h3 class="stageATE__h3 h3">Pourquoi faire un stage ATE?</h3>
            <ul class="stageATE__liste">
                <li class="stageATE__liste__item">Découvrir la dynamique d’un environnement de travail de professionnel</li>
                <li class="stageATE__liste__item">Faire de nouveaux apprentissages complémentaires au programme</li>
                <li class="stageATE__liste__item">Développer ses compétences professionnelles</li>
                <li class="stageATE__liste__item">Agrandir son réseau de contact dans le domaine</li>
            </ul>
        </div>
    </div>
@endsection