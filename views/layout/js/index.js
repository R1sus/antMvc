 //smooth scroll//
 $(document).ready(function () {
     $("#menu").on("click", "a", function (event) {
         //отменяем стандартную обработку нажатия по ссылке
         event.preventDefault();

         //забираем идентификатор бока с атрибута href
         var id = $(this).attr('href'),

             //узнаем высоту от начала страницы до блока на который ссылается якорь
             top = $(id).offset().top;

         //анимируем переход на расстояние - top за 1500 мс
         $('body,html').animate({
             scrollTop: top
         }, 1500);
     });
 });

 //call down parallax

var scene = document.getElementById('scene');
var parallax = new Parallax(scene);

 //fixed menu

 //var h_height = 690;

 if(window.screen.width <= 1024 ){
     var h_height = 580; 
    }
     else {
         h_height = 690;
     }
 
 var h_margin = 0;
 $(function () {
     $(window).scroll(function () {
         var top = $(this).scrollTop();
         var elem = $('#menu');
         if (top + h_margin < h_height) {
             elem.css('top', (h_height - top));
             elem.css('background', '');

         } else {
             elem.css('top', h_margin);
             elem.css('opacity', '0.9');
             elem.css('background-color', '#180d07');
         }
     });

 });

 //mobile menu 

 $(".hamburger").on("click", function () {
     $("#mobile-navigation").toggle();
     });


//send mail

    function call() {
 	  var msg   = $('#contact-form').serialize();
 	  console.log(msg);
        $.ajax({
          type: 'POST',
          url: '/post',
          dataType: 'json',
          data: msg,
          success: function(data) {
              $('#contact-form').trigger("reset");
              alert("Ваше сообщение отправлено,спасибо!");
              console.log(data);
          },
          error:  function(xhr, str){
	            alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }