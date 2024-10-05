
document.addEventListener('DOMContentLoaded', function() {
    const boton = document.getElementById('js-menu-hamburguer');
    const menu = document.getElementsByClassName('c-header')[0]
    boton.addEventListener('click', function() {
      console.log('click')
      menu.classList.toggle('opened')
    });
  });
  