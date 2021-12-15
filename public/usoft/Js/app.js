if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}


const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

$('.success_modal').fadeIn();

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}





var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


/* uslugi slider============ */
var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    autoplay: {
        delay: 3000,
    },
    loop: true,
    loopFillGroupWithBlank: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
/* up down strelki */

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

mybutton.addEventListener('click', topFunction)
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


/* ======================= */
/*   var swiper = new Swiper(".mySwiper2", {
  effect: "flip",
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
}); */

$(document).ready(function ($) {
    $.mask.definitions['9'] = '';
    $.mask.definitions['n'] = '[0-9]';
    $(function () {
        $(".phone-number-input").mask("+nnn nn nnn nn nn");
    });
})

// $('.phone-number-input').mask('+(789) 99 999 9999');



const header = document.querySelector('.header');

window.addEventListener('scroll', function () {
    let scrollPos = window.scrollY;

    if (scrollPos > 0) {
        header.classList.add('red');
    } else {
        header.classList.remove('red');
    }
});


$('.bid').on('click', function () {
    let name = $('#name').val()
    let number = $('#number').val()
    let url = $('.bid').data("url");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: url,
        data: { name: name, number: number },
        type: 'POST',
        dataType: "json",
        success: function (res) {
            if (res.status === 400) {
                let name_error = res.errors['name']
                let number_error = res.errors['number']

                $('#name_error').html(name_error)
                $('#number_error').html(number_error)

                $('#name_error').fadeIn();
                $('#number_error').fadeIn();
            }
            if (res.status === 200) {
                $('#exampleModalToggle2').fadeIn();
                $('#name_error').fadeOut();
                $('#number_error').fadeOut();
                $('#name').val('')
                $('#number').val('')
                $('.none').fadeIn();
                $('.modal_form_cc').fadeOut();
                $('.modal-backdrop').fadeOut();
            }
        }
    });
});

$('.m_close').on('click', function () {
    $('.none').fadeOut();
})

$('#app__btn').on('click', function () {
    $('.usoft_modal_form').fadeIn()
})

$('#order_btn').on('click', function () {
    $('.usoft_modal_form').fadeIn()
})

$('#modal_close_button').on('click', function () {
    $('.usoft_modal_form').fadeOut()
})
let modal = document.querySelector('.usoft_modal_form')
window.addEventListener('click', function (e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
});



$('.mbtn').on('click', function () {
    let name = $('#modal_name').val()
    let number = $('#modal_number').val()
    let url = $('.mbtn').data("url");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: url,
        data: { name: name, number: number },
        type: 'POST',
        dataType: "json",
        success: function (res) {
            if (res.status === 400) {
                let name_error = res.errors['name']
                let number_error = res.errors['number']

                $('#name_modal_error').html(name_error)
                $('#number_modal_error').html(number_error)

                $('#name_modal_error').fadeIn();
                $('#number_modal_error').fadeIn();
            }
            if (res.status === 200) {
                $('#exampleModalToggle2').fadeIn();
                $('#name_modal_error').fadeOut();
                $('#number_modal_error').fadeOut();
                $('#modal_name').val('');
                $('#modal_number').val('');
                $('.none').fadeIn();
                $('.modal_form_cc').fadeOut();
                $('.modal-backdrop').fadeOut();
                $('.usoft_modal_form').fadeOut();
            }
        }
    });
})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

