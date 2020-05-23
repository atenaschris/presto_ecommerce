$(document).ready(function() {
    $("#signInModal").on("shown.bs.modal", function() {
        $("#signInEmaiInput").trigger("focus");
    });

    // menu

    let navbar = document.getElementById("navbar");
    let logo = document.querySelector("#logo");
    let logoName = document.querySelector(".title-name");
    let navLinks = document.querySelectorAll(".nav-link");
   
    

    document.addEventListener("scroll", () => {
        let scrolled = pageYOffset;
        if (window.innerWidth > 1000) {
            if (scrolled > 5) {
                logo.style.width = "50px";
                logoName.classList.add("d-none");
                navbar.classList.remove("py-2");
              
            } else {
                logo.style.width = "80px";
                logoName.classList.remove("d-none");
              
            }
        }
    });


    

    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        mobileFirst:true,
        asNavFor: ".slider-nav"
    });
    $(".slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        arrows: true,
        mobileFirst:true,
        centerMode: true,
        focusOnSelect: true
    });

    $(".center").slick({
        centerMode: true,
        centerPadding: "60px",
        mobileFirst:true,
        slidesToShow: 3,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    centerMode: true,
                    mobileFirst:true,
                    centerPadding: "60px",
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    mobileFirst:true,
                    centerPadding: "60px",
                    slidesToShow: 1
                }
            }
        ]
    });
});
