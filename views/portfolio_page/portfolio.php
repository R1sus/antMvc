<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="views/portfolio_page/css/port_page.css" />
</head>

<body translate="no">
  <section class="port-page">
    <div class="title-port">
      <h2><a id="portfolio">Portfolio</a></h2>
      <img src="<?php echo getImgUrlPort('branches_port.png')?>" alt="branch" />
      <button type="button"><a href="index">Home</a></button>
    </div>
  
    <div id="carousel">
     <?php foreach ( $portfolioList as $portfolioItem):?>
        <a href="<?php echo $portfolioItem['site_url'];?>">
        <img src="<?php echo getImgUrl($portfolioItem['image_url']);?>" /></a>
     <?php endforeach;?>
    </div>
    <div class="nav">
      <button id="prev"><img src="<?php echo getImgUrlPort('prev.png')?>" alt="prev point" /></button>
      <a href="" ><img src="<?php echo getImgUrlPort('Ant.gif')?>" id="ant" alt="ant" /></a>
      <button href="" id="next"><img src="<?php echo getImgUrlPort('next.png')?>" alt="next point" /></button>
    </div>
  </section>
  <footer>
    <p>Created by AntHill. All right reserved &copy; 2016</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="views/portfolio_page/js/jquery.waterwheelCarousel.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });
          var ant = $( "#ant" );
          var leftPosition = $("#ant").css("left");
          var pos = "60px";
          console.log(leftPosition);
          $( "#prev" ).click(function() {
             carousel.prev();
             ant.animate({ "left": "-=60px" }, "slow");
             ant.css("transform", "scale(-1, 1)");

//              if( leftPosition >"-60px"){
//                  leftPosition = "-60px";
//              }
          });
          $( "#next" ).click(function() {
              carousel.next();
              ant.animate({"left": "+=60px"}, "slow");
              ant.css("transform", "none");
              if(leftPosition === "60px") {
                  ant.animate({"left": "=60px"}, "slow");
                  console.log("dfsdfsdf");
              }


//              if( leftPosition >"60px"){
//                  leftPosition = "60px";
//              }

          });

//        $('#next').on('click', function () {
//          carousel.next();
//          $('#ant').toggle("slow", function (){
//              $('#ant').css('left','5rem');
//          });
//          return false;
//        });
//
//        $('#prev').on('click', function () {
//          carousel.prev();
//         $('#ant').toggle("slow", function (){
//              $('#ant').css('left','-80px');
//         });
//          return false;
//        });

      });
    </script>
   
</body>

</html>