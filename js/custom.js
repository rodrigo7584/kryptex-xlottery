var etiqueta = document.getElementById('etiqueta-menu'),
  menuLateral = document.getElementById('menu-lateral')

etiqueta.addEventListener('click', function () {
  menuLateral.classList.toggle('esconder')
  etiqueta.classList.toggle('esconder')
})

// onclick="this.classList.toggle('up');

//var btns = paginador.getElementsByClassName('indicador')
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener('click', function () {
//     var current = document.getElementsByClassName('active')
//     current[0].className = current[0].className.replace(' active', '')
//     this.className += ' active'
//   })
// }
