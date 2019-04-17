$(document).ready(function(){

    var itemNavCount = $('.cproduct').find('.item').length;
    if (itemNavCount > 1)
    {
        $('.cproduct').css('width',(itemNavCount*195 +12) + 'px');
    }
    if(itemNavCount > 4)
    {
        $('.cproduct').css('width','792px');
    }


});