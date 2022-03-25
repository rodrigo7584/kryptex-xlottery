const globo = document.querySelector('.globo')
const idiomas = document.querySelector('.idiomas')
globo.addEventListener('click', function () {
  idiomas.classList.toggle('ativo')
})
var etiqueta = document.getElementById('etiqueta-menu'),
  menuLateral = document.getElementById('menu-lateral'),
  widthTela = window.screen.width

etiqueta.addEventListener('click', function () {
  menuLateral.classList.toggle('mostrar')
  etiqueta.classList.toggle('mostrar')
})

var verificador = true
window.onscroll = function () {
  if (
    document.documentElement.scrollTop > 564 &&
    widthTela <= 576 &&
    verificador
  ) {
    esconderMenuScroll()
    verificador = false
  } else if (
    document.documentElement.scrollTop <= 563 &&
    widthTela <= 576 &&
    verificador === false
  ) {
    verificador = true
  }
}
function esconderMenuScroll() {
  if (widthTela <= 576) {
    if (
      menuLateral.classList.contains('mostrar') &&
      etiqueta.classList.contains('mostrar')
    ) {
      menuLateral.classList.remove('mostrar')
      etiqueta.classList.remove('mostrar')
      verificador = false
    }
  }
}
