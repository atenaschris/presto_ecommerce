$(document).ready(function(){

$('#signInModal').on('shown.bs.modal', function () {
    $('#signInEmaiInput').trigger('focus')
})

// menu

let navbar = document.getElementById('navbar')
let logo = document.querySelector('#logo')
let logoName = document.querySelector('.title-name')
let navLinks = document.querySelectorAll('.nav-link')

document.addEventListener("scroll", () =>{
    let scrolled = pageYOffset      
    if(window.innerWidth > 1000){
        if (scrolled > 5) {
            logo.style.width = '50px'
            logoName.classList.add('d-none')
            navbar.classList.remove('py-4')
            navLinks.forEach(element => {
                element.classList.add('d-none')
            });
        }else{
            logo.style.width = '80px'
            logoName.classList.remove('d-none')
            navLinks.forEach(element => {
                element.classList.remove('d-none')
            });
        }
    }
})


$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
   
    
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: true,
    centerMode: true,
    focusOnSelect: true ,
    


  });



$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    focusOnSelect: true ,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 1
        }
      }
    ]
  });

});