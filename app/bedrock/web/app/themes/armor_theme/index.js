const header = document.querySelector('.header');
const logo = document.querySelector('heeaderLogo');

window.onscroll = () => {
  let currentPosition = window.pageYOffset;
  if(currentPosition > 100) {
    console.log(header.style)
    header.style.backgroundColor = 'white';
    header.style.position = 'fixed';
    logo.style.backgroundColor = 'purple';
  }
  else {
    header.style.backgroundColor = 'transparent';
  }
}