btnCourriel = document.getElementById('contactParCourriel');
btnTelephone = document.getElementById('contactParTel');
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
window.addEventListener('load', switcherAppelCourriel);

function switcherAppelCourriel() {
    if(btnTelephone.checked === true) {
        for(cpt=0; cpt<lesElementsCourriel.length; cpt++) {
            element = lesElementsCourriel[cpt];
            element.classList.add('invisible');
            if(element.ariaHidden === false) {
                element.ariaHidden = true;
            }
        }
        btnAppeler.classList.remove('inactive');
        if(btnEnvoyerCourriel.classList.contains('inactive')) {
            btnEnvoyerCourriel.classList.add('inactive');
        }
    }
    else {
        for(cpt=0; cpt<lesElementsCourriel.length; cpt++) {
            element = lesElementsCourriel[cpt];
            element.classList.remove('invisible');
            if(element.ariaHidden === true) {
                element.ariaHidden = false;
            }
        }
        if(btnAppeler.classList.contains('inactive')) {
            btnAppeler.classList.add('inactive');
        }
        btnEnvoyerCourriel.classList.remove('inactive');
    }
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