$(document).ready(function() {

    $('#input-original-url').focus();
    
    $('.nav-main li').each(function() {
        var href = $(this).find('a').attr('href');
        if (href == fullUrl) {
            $('.nav-main li').removeClass('active');
            $(this).addClass('active');
        }
    });

});