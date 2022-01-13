const header = document.querySelector('.header');
const logo = document.querySelector('#header_logo');

window.onscroll = () => {
  let currentPosition = window.pageYOffset;
  if(currentPosition > 100) {
    header.style.backgroundColor = 'white';
    header.style.position = 'fixed';
    logo.classList.add('imageFilterOnScroll');
  }
  else {
    header.style.backgroundColor = 'transparent';
    logo.classList.remove('imageFilterOnScroll');
  }
}