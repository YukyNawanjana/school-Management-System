
const menu = document.getElementById('menu-toggle');
const wrapper = document.getElementById('wrapper');
const navBtnIcon =  document.querySelector('.fa-bars')

menu.addEventListener('click',()=>{
    wrapper.classList.toggle('active');
    navBtnIcon.classList.toggle('fa-times');
  
})
  