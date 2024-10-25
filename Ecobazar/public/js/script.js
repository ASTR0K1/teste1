//copiar menu para o telefone
function copyMenu(){
  var dptCategory = document.querySelector('.dpt-cat');
  var dptPlace = document.querySelector('.produtos');
  dptPlace.innerHTML = dptCategory.innerHTML;


  // var mainNav = document.querySelector('.header-nav nav');
  // var navPlace = document.querySelector('.off-canvas nav');
  // navPlace.innerHTML = mainNav.innerHTML;


  var topNav = document.querySelector('.header-top .wrapper');
  var toplace = document.querySelector('.off-canvas .thetop-nav');
  toplace.innerHTML = topNav.innerHTML;
}
copyMenu();


//butão do menu on mobilee
const menubutton = document.querySelector('.trigger'),
  closeButton = document.querySelector('.t-close'),
  addClass = document.querySelector('.site');
menubutton.addEventListener('click', function() {
  addClass.classList.toggle('showmenu')
})

closeButton.addEventListener('click', function() {
  addClass.classList.remove('showmenu')
})

//mostrar sub menu no telefone
const submenu = document.querySelectorAll('.has-child .icon-small');
submenu.forEach((menu) => menu.addEventListener('click', toggle));

function toggle(e) {
  e.preventDefault();
  submenu.forEach((item) => item != this ? item.closest('.has-child').classList.remove('expand') : null);
  if (!this.closest('.has-child').classList.contains('expand'))
    this.closest('.has-child').classList.toggle('expand');

}


//show dpt menu 
const dptButton = document.querySelector('.dpt-cat .dpt-trigger'),
  dptClass = document.querySelector('.site');
dptButton.addEventListener('click',function(){
  dptClass.classList.toggle('showdpt')
})

//show carrinho no mobile
const Cshow = '.mini-cart';
const Cpup = document.querySelector(Cshow);
const Ctrigger = document.querySelector('.cart-trigger');


 Ctrigger.addEventListener('click', () => {
   setTimeout(() => {
     if(!Cpup.classList.contains('show')){
       Cpup.classList.add('show');
     }
   }, 250);
 })

//close
document.addEventListener('click', (e) => {
  const IsClosest = e.target.closest(Cshow);
  if(!IsClosest && Cpup.classList.contains('show')){
    Cpup.classList.remove('show');
  }
});


