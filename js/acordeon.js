$(document).ready(function(){
    $('#acordeones .imgac').click(function() {
        $(this).siblings('.imgac').removeClass('active');
        $(this).addClass('active');
    });
});