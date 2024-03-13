lesChoixDeResponsable = document.querySelectorAll('[name = destinataire]')
leLienAppel = document.getElementById('appeler');
lesPostesTel = ['6662', '6655', '6653', '6656'];

for(cpt = 0; cpt < lesChoixDeResponsable.length; cpt++) {
    lesChoixDeResponsable[cpt].addEventListener('blur', siCliqueOuSelectionne.bind(this));
    lesChoixDeResponsable[cpt].addEventListener('change', siCliqueOuSelectionne.bind(this));
}
window.addEventListener('load', siPreSelectionne);

function siCliqueOuSelectionne(objEvenement) {
    switcherNoTelBtn(objEvenement.currentTarget);
}
function siPreSelectionne() {
    if(document.querySelector('[name = destinataire]:checked') !== null) {
        switcherNoTelBtn(document.querySelector('[name = destinataire]:checked'));
    }
}
function switcherNoTelBtn(lElement) {
    console.log(lElement)
    leLienAppel.href = 'tel:418 659-6600p' + lesPostesTel[parseInt(lElement.value) -1];
}