
if (!sessionStorage.getItem('visitedHomepage')) {

    document.querySelector('.preloader').style.display = 'flex';
  }
  

  window.addEventListener('load', function() {
   
    document.querySelector('.preloader').style.display = 'none';

    sessionStorage.setItem('visitedHomepage', true);
  });
  