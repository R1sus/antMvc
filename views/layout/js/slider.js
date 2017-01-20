$(function () {
   $(function() {
    var ul = $('#carusel'), widthAll = 0;
    $('li', ul).each(function(indx, element){
      widthAll +=  this.offsetWidth
      });
    ul.width(widthAll);
    function go() {
        var li = $('li:first', ul), w = li.width();
        li.delay(1800).animate({top : -200},1200);
        ul.delay(4600).animate({
            left: -w
        }, 2000, function () {
            li.appendTo(this).css({top : 0})
            $(this).css({
                left: '0px'
            });
            go()
        })
    }
    go()
});
})