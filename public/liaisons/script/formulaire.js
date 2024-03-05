btnCourriel = document.getElementById('btnCourriel');
btnTelephone = document.getElementById('btnTelephone');
btnAppeler = document.getElementById('appeler');
btnEnvoyerCourriel = document.getElementById('envoyerCourriel');
lesElementsCourriel = document.querySelectorAll('.elementCourriel');
sectionBen = document.getElementById('sectionBen');
checkboxABen = document.getElementById('selectionFrigon');
lesCheckboxsDesResponsables = document.querySelectorAll('.formulaire__destinataires__item__input')

btnCourriel.addEventListener('click', switcherAppelCourriel);
btnTelephone.addEventListener('click', switcherAppelCourriel);
lesCheckboxsDesResponsables.forEach(uneCheckbox => uneCheckbox.addEventListener('click', toggleSectionBen))
window.addEventListener('load', toggleSectionBen);

function switcherAppelCourriel() {
    btnTelephone.classList.toggle('active');
    btnTelephone.classList.toggle('inactive');
    btnCourriel.classList.toggle('inactive');
    btnCourriel.classList.toggle('active');

    for(cpt=0; cpt<lesElementsCourriel.length; cpt++) {
        element = lesElementsCourriel[cpt];
        element.classList.toggle('invisible');
        if(element.ariaHidden === false) {
            element.ariaHidden = true;
        }
        else {
            element.ariaHidden = false;
        }
    }

    btnAppeler.classList.toggle('active');
    btnAppeler.classList.toggle('inactive');
    btnEnvoyerCourriel.classList.toggle('active')
    btnEnvoyerCourriel.classList.toggle('inactive');
}

function toggleSectionBen() {
    if(checkboxABen.checked === true) {
        sectionBen.classList.remove('troisiemeReliqueDeLaMort')
        sectionBen.ariaHidden = false;
    }
    else {
        sectionBen.classList.add('troisiemeReliqueDeLaMort');
        sectionBen.ariaHidden = true;
    }
}