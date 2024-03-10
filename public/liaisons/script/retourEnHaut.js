btnRetourEnHaut = document.getElementById('btnRetourEnHaut');
leHautDeLaPage = document.getElementById('topOfTheWorld');

btnRetourEnHaut.addEventListener('click', retourEnHaut)

function retourEnHaut() {
    leHautDeLaPage.scrollIntoView({behavior: 'smooth'});
}