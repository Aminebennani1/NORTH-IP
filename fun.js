
let check_box = document.querySelector('#check')
let loader = document.querySelector('.loader')
let tick = document.querySelector('.fa-check')
let txt = document.querySelector('label')

check_box.addEventListener('click', function loaderEffect(params) {
  this.style.display = 'none'
  loader.style.display = 'block'
  txt.innerText = 'Veryfing...'

  setTimeout(() => {
    loader.style.display = 'none'
    tick.style.display = 'block'
    txt.innerText = 'I am not a robot'
  }, 2000);
})