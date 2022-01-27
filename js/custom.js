var etiqueta = document.getElementById('etiqueta-menu'),
  menuLateral = document.getElementById('menu-lateral')

etiqueta.addEventListener('click', function () {
  menuLateral.classList.toggle('mostrar')
  etiqueta.classList.toggle('mostrar')
})
