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
      $(".phone-number-input").mask("+998 nn nnn nn nn");
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

