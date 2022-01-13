const menuListItems = document.querySelector('.navbar-collapse');

$('#nav-toggler').on('click', (e) => {
  if(menuListItems.classList.contains('showCollapsedItems')) {
    menuListItems.classList.remove('showCollapsedItems');
  }
  else {
    menuListItems.classList.add('showCollapsedItems');
  }
})

$(window).on('resize', function(){
    let win = $(this);
    if (win.width() >= 800) { 
      menuListItems.classList.remove('showCollapsedItems');
     }
});