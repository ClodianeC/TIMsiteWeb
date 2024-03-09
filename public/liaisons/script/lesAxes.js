pointe1 = document.getElementById('pie1');
pointe2 = document.getElementById('pie2');
pointe3 = document.getElementById('pie3');
pointe4 = document.getElementById('pie4');
pointe5 = document.getElementById('pie5');

laTarte = [pointe1, pointe2, pointe3, pointe4, pointe5];

btn1 = document.getElementById('btnAxe1');
btn2 = document.getElementById('btnAxe2');
btn3 = document.getElementById('btnAxe3');
btn4 = document.getElementById('btnAxe4');
btn5 = document.getElementById('btnAxe5');

lesBtns = [btn1, btn2, btn3, btn4, btn5];

sectionAxe1 = document.getElementById('sectionAxe1');
sectionAxe2 = document.getElementById('sectionAxe2');
sectionAxe3 = document.getElementById('sectionAxe3');
sectionAxe4 = document.getElementById('sectionAxe4');
sectionAxe5 = document.getElementById('sectionAxe5');

lesSections = [sectionAxe1, sectionAxe2, sectionAxe3, sectionAxe4, sectionAxe5];

leCercle = document.querySelector('.pieChart');
lesCouleurs = ['#95AA91', '#B5C6B2', '#6A8065', '#3D5139', '#D0E3CC'];

window.addEventListener('load', function () {
    selectionnerAxe(btn1);
});
for(cpt = 0; cpt < lesBtns.length; cpt++) {
    lesBtns[cpt].addEventListener('click', function () {
        selectionnerAxe(this);
    });
}

function selectionnerAxe(btnClick) {
    if(!btnClick.classList.contains('click')) {
        for(cptBtn = 0; cptBtn < lesBtns.length; cptBtn++) {
            if(lesBtns[cptBtn].classList.contains('click')) {
                lesBtns[cptBtn].classList.remove('click');
                laTarte[cptBtn].classList.remove('outside');
                if(!lesSections[cptBtn].classList.contains('nonSelectionne')) {
                    lesSections[cptBtn].classList.add('nonSelectionne');
                }
            }
            if(lesBtns[cptBtn] === btnClick) {
                lesBtns[cptBtn].classList.add('click');
                laTarte[cptBtn].classList.add('outside');
                lesSections[cptBtn].classList.remove('nonSelectionne');
                // leCercle.style.border = lesCouleurs[cptBtn]+" solid 0.4rem";
            }
        }
    }
}