var deviceWidth;
var deviceHeight;

var headerHeight = '50';

$(window).on('load resize',function(){

    deviceHeight = $(window).height();
    deviceWidth = $(window).width();

    $('.content-wrapper').css('height',(deviceHeight-headerHeight)+'px');
});