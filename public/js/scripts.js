// CAROUSEL SCRIPTS
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    console.log('is working')
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


// MENU BAR
  
  function myFunction(x) {
      var menu = document.querySelector('.header ul');
      x.classList.toggle("change");
      
      if (menu.style.display === "block") {
          menu.style.display = "none";
      } else {
          menu.style.display = "block";
      }
  }
