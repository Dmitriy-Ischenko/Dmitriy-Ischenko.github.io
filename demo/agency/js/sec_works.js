

$(function(){
     var totalLength = $('.main_line').outerHeight(),
        //ratio = ($(window).width()/$(window).height()).toFixed(2),
        right = 'circle--right',
        id = "#circle",
        man = $('#lineDraw').offset().top+100,
        targetOffset = man - screen.height,
        activeClassTextRight = 'main__line-text--right--active',
        activeClassTextLeft = 'main__line-text--left--active',
        targetLine = $('#lineDraw'),
        targetLineOffset = $(targetLine).offset().top ;

    //pointsOffset
    var points = [],
        offsetPoints = $('.main_line-circle'),
        offsetPointsLength = $('.main_line-circle').length;
        //get offset points
        for(var i = 0; i<=offsetPointsLength-1; i++){
            var point = $(offsetPoints[i]).offset().top+($(offsetPoints[i]).outerHeight()/2);
            points.push(+point.toFixed(0));
        }
   // console.log(totalLength);
    $(window).on('scroll', function(e){
        //getScroll
        var scroll = window.pageYOffset || document.documentElement.scrollTop;
        if( scroll >= (targetOffset)){
            // compire start scroll width target line
            if($(targetLine).height()  >= totalLength  ){
                $(targetLine).height(totalLength);
                return;
            }else{
            // animate scroll line
                $(targetLine).height((scroll-targetOffset)/1.5);
                var targetAnimate = +($(targetLine).height()+targetLineOffset).toFixed(0);
                //add points
                var idNumb = 1;
                //animate scroll points
                for(var j = 0; j <= points.length; j++ ){
                    var thisID = $(id +"_"+ (idNumb++));
                    if(targetAnimate >= points[j] ){
                        if(thisID.hasClass('bounceIn')){
                            return;
                        }else{
                            thisID.find('.main_line-circle--active ').addClass('bounceIn');
                            if(thisID.hasClass('circle--right')){
                                thisID.find('.main__line-text').addClass(activeClassTextRight);
                            }else{
                                thisID.find('.main__line-text').addClass(activeClassTextLeft);
                            }
                        }
                    }
                }
            }
        }
    })
})