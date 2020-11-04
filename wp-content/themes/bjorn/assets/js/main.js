var remain_bv   = 180;
function parseTime_bv(timestamp){
    if (timestamp < 0) timestamp = 0;
 
    var day = Math.floor( (timestamp/60/60) / 24);
    var hour = Math.floor(timestamp/60/60);
    var mins = Math.floor((timestamp - hour*60*60)/60);
    var secs = Math.floor(timestamp - hour*60*60 - mins*60); 
    var left_hour = Math.floor( (timestamp - day*24*60*60) / 60 / 60 );
 
    $('span.afss_day_bv').text(day);
    $('span.afss_hours_bv').text(left_hour);
 
    if(String(mins).length > 1)
        $('span.afss_mins_bv').text(mins);
    else
        $('span.afss_mins_bv').text("0" + mins);
    if(String(secs).length > 1)
        $('span.afss_secs_bv').text(secs);
    else
        $('span.afss_secs_bv').text("0" + secs);   
}
function startTimer(){
    setInterval(function(){
        remain_bv = remain_bv - 1;
        parseTime_bv(remain_bv);
        if(remain_bv <= 0){
            
        }
    }, 1000);
  }

$(document).ready(function() {
 //Обработка формы
  $(".popup__form, .services__form").submit(function() {
    $.ajax({
      type: "POST",
      url: mailScript,
      data: $(this).serialize()
    }).done(function() {
      startTimer();
      $('.popup__content').slideUp();
      $('.popup__wrapp').hide();
      $('#popup__thanks').show();
      $('#popup__thanks .popup__content').slideDown();
    });
    return false;
  });

  $(".feedback__form").submit(function() {
    $.ajax({
      type: "POST",
      url: mailScript,
      data: $(this).serialize()
    }).done(function() {
      $("#popup__opinion").show();
      $('#popup__opinion .popup__content').slideDown();
    });
    return false;
  });

});


  $("#myInput").on("keyup", function() {
    $(".services__list__wrapp").show();
    var value = $(this).val().toLowerCase();
    $(".services__list__wrapp .services__list__item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


//Настройки скроллинга
$('a[href^="#"]').click(function () { 
     elementClick = $(this).attr("href");
     destination = $(elementClick).offset().top;
       $('html, body').animate( { scrollTop: destination - 49}, 1100 );
     return false;
});
$(window).scroll(function () {
  	$('section[id]').each(function(){
  		var id = $(this).attr('id');
  		if($(this).offset().top-100 < $(window).scrollTop()){
  			$('.active').removeClass('active');
  			$('.header__ul li a[href=#'+id+']').addClass('active');
  			$('.pushy-link a[href=#'+id+']').addClass('active');
  		}
  	});
});
$(window).scroll(
    function() {

       var top = 0;
       top = $(window).scrollTop();

       if(top < 300){
        $('.main-menu').removeClass('main-menu-fixed');
        $('.main-menu').css({'position':'static'}).fadeIn(300);
       	$('.active').removeClass('active');
        $('.pad').removeClass('pad-fixed');
       }else{
        $('.main-menu').addClass('main-menu-fixed');
        $('.main-menu').css({'position':'fixed'}).fadeIn(300);
        $('.pad').addClass('pad-fixed');
        $('.main-menu').slideDown();
       }

   });

//Настройки таймера
$('.countdown').downCount({
  date: '12/01/2020 12:00:00',
  offset: 3
}, function () {
  alert('WOOT WOOT, done!');
});


//Настройки слайдера
$('.sale__slider').slick({
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '21vw',
        focusOnSelect: true
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '18vw',
        focusOnSelect: true
      }
    }
  ]
});


$('.slider__main').slick({
  infinite: true,
  slidesToShow: 1,
  arrows: false,
  cssEase: 'cubic-bezier(0.600, -0.280, 0.735, 0.045)',
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 800
});

$('.slider__main').on('afterChange', function(event, slick, currentSlide, nextSlide){
  $( '.slider__car__leans' ).animate({
          opacity: 0.9,
        },
        400,
        function() {
          $( '.slider__car__leans' ).animate({
        opacity: 0
      },
      300,
      function() {
      }
    );
    }
  );
});










$('.reviews__slider').slick({
  centerMode: true,
  centerPadding: '222px',
  slidesToShow: 3,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1672,
      settings: {
        centerPadding: '150px'
      }
    },
    {
      breakpoint: 1400,
      settings: {
        centerPadding: '100px'
      }
    },
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        centerPadding: '320px'
      }
    },
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '170px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '55px',
        slidesToShow: 1
      }
    }
    ,
    {
      breakpoint: 576,
      settings: {
        centerPadding: '55px',
        slidesToShow: 1
      }
    }
  ]
});


//Маска для телефона
$(function(){
  $("#phone").mask("8(999) 999-9999");
});


//Эффекты наведения
$('#whatsapp__link img').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/whatsapp-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/whatsapp.svg');
});
$('#telegram__link img').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/telegram-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/telegram.svg');
});
$('#viber__link img').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/viber-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/viber.svg');
});
$('#instagram__link img').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/instagram-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/header/instagram.svg');
});
$('.fancy__play').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/play-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/play.svg');
});
$('.footer__youtube').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/youtube-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/youtube.svg');
});
$('.footer__instagram').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/instagram-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/instagram.svg');
});

$('.footer__facebook').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/facebook-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/facebook.svg');
});

$('.footer__vk').hover(function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/vk-hover.svg');
},function(){
   $(this).attr('src', 'https://bjorn-motors.ru/wp-content/themes/bjorn/assets/img/icons/vk.svg');
});



//Открытие и закрытие меню
$('.menu__mobile__flex__btn').click(function(){
  $('body').toggleClass('pushy-open-left');
  $('.menu-icon').toggleClass('menu-icon-active'); 
});
$('.site-overlay').click(function(){
  $('.menu-icon').removeClass('menu-icon-active'); 
});
$('.pushy-link').click(function(){
  $('.menu-icon').removeClass('menu-icon-active'); 
  $('body').removeClass('pushy-open-left');
});



/*Открытие попап окон*/
$('.popup_close').click(function(){
  $('.popup__content').slideUp();
  $('.popup__wrapp').slideUp();
});

$('.sale__box__btn, .sale__left__btn, .sercives__btn__text').click(function(){
 $('#popup__repairs').show();
 $('#popup__repairs .popup__content').slideDown();
});
$('.header__right__btn, .callback-btn').click(function(){
 $('#popup__callback').show();
 $('#popup__callback .popup__content').slideDown();
});



$('.footer__name-btn1').click(function(){
  $('.footer__list1').slideToggle();
  $('.footer__list2').slideUp();
  $('.footer__list3').slideUp();
  $('.footer__arrow1').toggleClass('footer__arrow-reverse');
  $('.footer__arrow2').removeClass('footer__arrow-reverse');
  $('.footer__arrow3').removeClass('footer__arrow-reverse');
});
$('.footer__name-btn2').click(function(){
  $('.footer__list2').slideToggle();
  $('.footer__list1').slideUp();
  $('.footer__list3').slideUp();
  $('.footer__arrow2').toggleClass('footer__arrow-reverse');
  $('.footer__arrow1').removeClass('footer__arrow-reverse');
  $('.footer__arrow3').removeClass('footer__arrow-reverse');
});
$('.footer__name-btn3').click(function(){
  $('.footer__list3').slideToggle();
  $('.footer__list2').slideUp();
  $('.footer__list1').slideUp();
  $('.footer__arrow3').toggleClass('footer__arrow-reverse');
  $('.footer__arrow1').removeClass('footer__arrow-reverse');
  $('.footer__arrow2').removeClass('footer__arrow-reverse');
});

$('.services__btn1').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list').show();
  $('.services__list1').show();
});
$('.services__btn2').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list2').show();
  $('.services__list').show();
});
$('.services__btn3').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list3').show();
  $('.services__list').show();
});

$('.services__btn4').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list4').show();
  $('.services__list').show();
});

$('.services__btn5').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list5').show();
  $('.services__list').show();
});

$('.services__btn6').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list6').show();
  $('.services__list').show();
});

$('.services__list__close').click(function(){
  $('.services__list__wrapp').hide();
  $('.services__list').hide();
});


