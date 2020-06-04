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

                navbar.classList.remove("py-2");
            } else {
                logo.style.width = "80px";
            }
        }
    });

    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        mobileFirst: true,
        asNavFor: ".slider-nav"
    });
    $(".slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        arrows: true,
        mobileFirst: true,
        centerMode: true,
        focusOnSelect: true
    });

    $(".center").slick({
        centerMode: true,
        centerPadding: "60px",
        mobileFirst: true,
        slidesToShow: 3,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    centerMode: true,
                    mobileFirst: true,
                    centerPadding: "60px",
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    mobileFirst: true,
                    centerPadding: "60px",
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".slider").slick({
        dots: true,
        infinite: false,
        slidesToShow: 4,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                    autoplay: true
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    autoplay: true
                }
            }
        ]
    });

    (function($) {
        "use strict";

        /*==================================================================
          [ Focus Contact2 ]*/
        $(".input2").each(function() {
            $(this).on("blur", function() {
                if (
                    $(this)
                        .val()
                        .trim() != ""
                ) {
                    $(this).addClass("has-val");
                } else {
                    $(this).removeClass("has-val");
                }
            });
        });

        /*==================================================================
          [ Validate ]*/
        var name = $('.validate-input input[name="name"]');
        var email = $('.validate-input input[name="email"]');
        var message = $('.validate-input textarea[name="message"]');

        $(".validate-form").on("submit", function() {
            var check = true;

            if (
                $(name)
                    .val()
                    .trim() == ""
            ) {
                showValidate(name);
                check = false;
            }

            if (
                $(email)
                    .val()
                    .trim()
                    .match(
                        /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
                    ) == null
            ) {
                showValidate(email);
                check = false;
            }

            if (
                $(message)
                    .val()
                    .trim() == ""
            ) {
                showValidate(message);
                check = false;
            }

            return check;
        });

        $(".validate-form .input2").each(function() {
            $(this).focus(function() {
                hideValidate(this);
            });
        });

        function showValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).addClass("alert-validate");
        }

        function hideValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).removeClass("alert-validate");
        }
    })(jQuery);
});
