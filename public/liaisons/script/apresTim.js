sectionInfo1 = document.getElementById('sectionApresTim18');
sectionInfo2 = document.getElementById('sectionApresTim19');
sectionInfo3 = document.getElementById('sectionApresTim20');
sectionInfo4 = document.getElementById('sectionApresTim21');

lesSections = [sectionInfo1, sectionInfo2, sectionInfo3, sectionInfo4];

window.addEventListener('load', initialiserSections);
for(cptEventListener = 0; cptEventListener < lesSections.length; cptEventListener++) {
    lesSections[cptEventListener].addEventListener("click", function () {
        ouvrirFermerSections(this);
    });
}

function initialiserSections() {
    for(cptSections = 0; cptSections < lesSections.length; cptSections++) {
        if(lesSections[cptSections] === sectionInfo1) {
            lesSections[cptSections].classList.add('ouvert');
        }
        else {
            lesSections[cptSections].classList.add('ferme');
            lesSpans = lesSections[cptSections].getElementsByTagName('span');
            for(cpt = 0; cpt < lesSpans.length; cpt++) {
                lesSpans[cpt].classList.add('actif');
            }
        }
    }
}
function ouvrirFermerSections(sectionClick) {
    if(!sectionClick.classList.contains('ouvert')) {
        // console.log('Je clique sur une case fermée')
        for(cptSections = 0; cptSections < lesSections.length; cptSections++) {
            if(lesSections[cptSections].classList.contains('ouvert')) {
                lesSections[cptSections].classList.remove('ouvert');
                lesSections[cptSections].classList.add('ferme');
                lesSpans = lesSections[cptSections].getElementsByTagName('span');
                for(cpt = 0; cpt < lesSpans.length; cpt++) {
                    lesSpans[cpt].classList.add('actif');
                }
            }
        }
        sectionClick.classList.add('ouvert');
        sectionClick.classList.remove('ferme')
        lesSpansClick = sectionClick.getElementsByTagName('span');
        for(cpt = 0; cpt < lesSpansClick.length; cpt++) {
            lesSpansClick[cpt].classList.remove('actif');
        }
    }
}