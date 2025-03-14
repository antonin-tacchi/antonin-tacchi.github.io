// Tableau du Konami Code
const konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
let konamiCodePosition = 0;

// Fonction pour surveiller les touches
document.addEventListener('keydown', function(event) {
    // Vérifier si la touche appuyée correspond à la position actuelle du Konami Code
    if (event.keyCode === konamiCode[konamiCodePosition]) {
        konamiCodePosition++;

        // Si la séquence complète est saisie, afficher le lien de connexion
        if (konamiCodePosition === konamiCode.length) {
            document.getElementById('login-link').style.display = 'block';
            alert('Konami Code activé ! Lien de connexion affiché.');
            konamiCodePosition = 0; // Réinitialiser la position
        }
    } else {
        // Réinitialiser si la touche n'est pas correcte
        konamiCodePosition = 0;
    }
});

document.getElementById('show-web-projects').addEventListener('click', function () {
    // Affiche les projets Web et cache les projets 3D
    document.getElementById('web-projects').classList.add('visible');
    document.getElementById('web-projects').classList.remove('hidden');
    
    document.getElementById('model-projects').classList.add('hidden');
    document.getElementById('model-projects').classList.remove('visible');
});

document.getElementById('show-3d-projects').addEventListener('click', function () {
    // Affiche les projets 3D et cache les projets Web
    document.getElementById('model-projects').classList.add('visible');
    document.getElementById('model-projects').classList.remove('hidden');
    
    document.getElementById('web-projects').classList.add('hidden');
    document.getElementById('web-projects').classList.remove('visible');
});


const bugerMenuButton = document.querySelector('#menu_button');
const burgerMenuButtonIcon = document.querySelector('#menu_button i');
const burgerMenu = document.querySelector('.nav-links_burger')

bugerMenuButton.onclick = function() {
    burgerMenu.classList.toggle('open');
    const isOpen = burgerMenu.classList.contains('open');
}