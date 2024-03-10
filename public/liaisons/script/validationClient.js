champPrenom = document.getElementById('prenom');
champNom = document.getElementById('nom');
champCourriel = document.getElementById('courriel');
champTelephone = document.getElementById('telephone');
checkConsentement = document.getElementById('consentement');
champSujet = document.getElementById('sujet');
champMessage = document.getElementById('message');

const refRadiosDestinataires = document.querySelectorAll('[name = destinataire]');
for(cpt = 0; cpt < refRadiosDestinataires.length; cpt++) {
    refRadiosDestinataires[cpt].addEventListener('blur', validerSelectionRadio.bind(this));
    refRadiosDestinataires[cpt].addEventListener('change', validerSelectionRadio.bind(this));
}
champPrenom.addEventListener('blur', validerChampsTexte.bind(this));
champNom.addEventListener('blur', validerChampsTexte.bind(this));
champCourriel.addEventListener('blur', validerChampsTexte.bind(this));
champTelephone.addEventListener('blur', checkSectionBenoit.bind(this));
checkConsentement.addEventListener('blur', checkSectionBenoit.bind(this));
champSujet.addEventListener('blur', validerChampsTexte.bind(this));
champMessage.addEventListener('blur', validerChampsTexte.bind(this));

function validerChampsTexte(objEvenement) {
    const objCible = objEvenement.currentTarget;
    const strChaine = objCible.value;
    const strIdCible = objCible.id;
    const refMessageErreur = objCible.nextElementSibling;

    const motif = new RegExp(`^${objCible.pattern}$`);
    const blnMotifChaineValide = motif.test(strChaine);

    if (strChaine === '') {
        objCible.classList.add('erreur');
        refMessageErreur.innerHTML = `<span class="spriteRETRO spriteRETRO--warning"></span> ${objJSONMessagesErreur[strIdCible].erreurs.vide}`
    } else if(blnMotifChaineValide === false && objCible.pattern.length > 0) {
        objCible.classList.add('erreur');
        refMessageErreur.innerHTML = `<span class="spriteRETRO spriteRETRO--warning"></span> ${objJSONMessagesErreur[strIdCible].erreurs.motif}`;
    } else {
        objCible.classList.remove('erreur');
        refMessageErreur.innerHTML = '';
        refMessageErreur.innerHTML = `<span class="spriteRETRO spriteRETRO--ok"></span>`;
    }
}
function validerAcceptationConsentement(objEvenement) {
    const objCible = objEvenement.currentTarget;
    const strIdCible = objCible.id;
    const refMessageErreur = objCible.nextElementSibling.nextElementSibling;

    if (objCible.checked === false) {
        objCible.classList.add('erreur');
        refMessageErreur.innerHTML = `<span class="spriteRETRO spriteRETRO--warning"></span> ${objJSONMessagesErreur[strIdCible].erreurs.vide}`;
    } else {
        objCible.classList.remove('erreur');
        refMessageErreur.innerHTML = '';
    }
}
function validerSelectionRadio(objEvenement) {
    const objCible = objEvenement.currentTarget;
    const strIdCible = objCible.id;
    const strNameCible = objCible.name;

    const refCtnValidation = objCible.closest('.formulaire__destinataires');
    const refMessageErreur = refCtnValidation.nextElementSibling;

    if (document.querySelector('[name = destinataire]:checked') == null) {
        refCtnValidation.classList.add('erreur');
        refMessageErreur.innerHTML = `<span class="spriteRETRO spriteRETRO--warning"></span> ${objJSONMessagesErreur[strNameCible].erreurs.vide}`;
    } else {
        refCtnValidation.classList.remove('erreur');
        refMessageErreur.innerHTML = '<span class="spriteRETRO spriteRETRO--ok"></span>';
    }
}
function checkSectionBenoit(objEvenement) {
    if(document.querySelector('[name = destinataire]:checked').id === 'selectionFrigon')
    if(objEvenement.currentTarget.id === 'telephone') {
        validerChampsTexte(objEvenement);
    }
    else {
        validerAcceptationConsentement(objEvenement);
    }
}