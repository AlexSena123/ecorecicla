//botones 
const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownmenu = document.querySelector('.dropdown_menu');

toggleBtn.addEventListener('click', function(isopen) {
  dropDownmenu.classList.toggle('show');
  isopen = dropDownmenu.classList.contains('show');
  toggleBtnIcon.classList = isopen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars';
});

//contador

function animateCounter(target, start, end, duration) {
    let current = start;
    const increment = (end - start) / duration * 10;
    const timer = setInterval(() => {
      current += increment;
      if (current >= end) {
        clearInterval(timer);
        current = end;
      }
      target.textContent = "+" + Math.floor(current);
    }, 10);
  }
  
  const toneladasElement = document.getElementById('toneladas');
  const usuariosElement = document.getElementById('usuarios');
  const bodegasElement = document.getElementById('bodegas');
  const asociadosElement = document.getElementById('ASOCIADOS')
  
  animateCounter(toneladasElement, 0, 1803, 5000);
  animateCounter(usuariosElement, 0, 3278, 5000);
  setTimeout(() => {
    animateCounter(asociadosElement,0, 134,5000)
    animateCounter(bodegasElement, 0, 4, 5000);
  }, 600);
  
// slider

var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter ).checked=true;
    counter++;
    if(counter > 4){
        counter= 1;
    } 
} , 5000);