
document.addEventListener('DOMContentLoaded', function() {
    const boton = document.getElementById('js-menu-hamburguer');
    const menu = document.querySelectorAll('.c-header, .c-header--front-page')[0]
    boton.addEventListener('click', function() {
      console.log('click')
      menu.classList.toggle('opened')
    });
  });
  