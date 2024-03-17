leBtnOuvrirFerme = document.getElementById('ouvrirFermerTriFiltres');
leFormulaireTriFiltres = document.querySelector('form.filtresTri');

leBtnOuvrirFerme.addEventListener('click', ouvrirFermeLaSectionFormulaire);
window.addEventListener('load', testSiDevraitEtreOuvertOuFerme);

function ouvrirFermeLaSectionFormulaire() {
    leBtnOuvrirFerme.classList.toggle('ferme');
    leBtnOuvrirFerme.classList.toggle('ouvert');
    leFormulaireTriFiltres.classList.toggle('ferme');
    leFormulaireTriFiltres.classList.toggle('ouvert');
}
function testSiDevraitEtreOuvertOuFerme() {
    let onDoitOuvrir = false;
    document.querySelectorAll('input.filtresTri__section__liste__item__checkbox').forEach(function(lInput) {
        if(lInput.checked === true) {
            onDoitOuvrir = true;
        }
    });
    if(onDoitOuvrir === true) {
        ouvrirFermeLaSectionFormulaire();
    }
}