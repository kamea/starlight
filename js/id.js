
  document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('progressBar');
    const article = document.querySelector('article');

    // Gérer le changement de largeur de la barre de progression en fonction du défilement
    function updateProgressBar() {
      const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
      const scrollPercent = (window.scrollY / documentHeight) * 100;

      // Assurez-vous que le pourcentage reste dans la plage de 0 à 100
      progressBar.style.width = Math.min(scrollPercent, 100) + '%';

      // Arrêtez la barre de progression à 100% lorsque la fin de l'article est atteinte
      if (scrollPercent >= 100) {
        progressBar.style.width = '100%';
      }
    }

    window.addEventListener('scroll', updateProgressBar);
    window.addEventListener('resize', updateProgressBar);
  });

  // Fonction pour activer le lien correspondant au paragraphe appelé
  function setActiveLink(id) {
    const listItems = document.querySelectorAll('#myList li');

    // Retirez la classe 'active' de tous les liens
    listItems.forEach(item => {
      item.classList.remove('active');
    });

    // Ajoutez la classe 'active' au lien correspondant
    const activeLink = document.querySelector(`#myList a[href="#${id}"]`);
    if (activeLink) {
      activeLink.parentNode.classList.add('active');
    }
  }

 // Fonction pour activer le li correspondant au h2 lorsque la position est à 200 pixels
function activateListItemOnScroll() {
  const article = document.getElementById('article');
  const headings = article.querySelectorAll('h2');
  const listItems = document.querySelectorAll('#myList li');

  window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;

    headings.forEach((heading, index) => {
      const rect = heading.getBoundingClientRect();
      const positionFromTop = rect.top;
      if (positionFromTop <= 200) {
        // Désactivez tous les li
        listItems.forEach(item => item.classList.remove('active'));
        // Activez le li correspondant au h2
        listItems[index].classList.add('active');
      }
    });
  });
}
// Appelez la fonction pour activer le li lors du chargement de la page
document.addEventListener('DOMContentLoaded', activateListItemOnScroll);


