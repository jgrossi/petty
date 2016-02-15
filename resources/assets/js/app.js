$(document).ready(function() {

    // Set index focus to original url input
    $('#input-original-url').focus();

    // Set the active nav link
    $('.nav-main li').each(function() {
        var href = $(this).find('a').attr('href');
        if (href == fullUrl) {
            $('.nav-main li').removeClass('active');
            $(this).addClass('active');
        }
    });

    //// Bootstrap tooltip
    //$('#btn-copy-url').tooltip({
    //    //container: 'body',
    //    //trigger: 'manual'
    //});
    //
    //$('#btn-copy-url').mouseleave(function(){
    //    $('#btn-copy-url').tooltip('hide');
    //});
    //
    //// Clipboard to copy shorten link
    //var clipboard = new Clipboard('#btn-copy-url');
    //
    //clipboard.on('success', function(e) {
    //    $('#btn-copy-url').attr('title', 'Copied!').tooltip('show');
    //    e.clearSelection();
    //});
    //
    //clipboard.on('error', function(e) {
    //    $('#btn-copy-url').attr('title', 'Press Ctrl+C to copy!').tooltip('show');
    //});

});