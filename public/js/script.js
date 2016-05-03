$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
$('[data-toggle=offcanvas]').click(function() {
    $('#sidebar').toggleClass('active');
  });
});


if ( $(window).width() > 739) {
    //Add your javascript for large screens here
    tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        width: 800,
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ],
    });
}
else {
    //Add your javascript for small screens here
    tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        width: 350,
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ],
    });
}
function showDiv(elem){
    if(elem.value == 1) {

        document.getElementById('hd').style.display = "inline-block";
        document.getElementById('dpw').style.display = "inline-block";
        document.getElementById('chc').style.display = "inline-block";
        document.getElementById('chco').style.display = "inline-block";
        document.getElementById('chn').style.display = "inline-block";
    }else {
        document.getElementById('hd').style.display = "none";
        document.getElementById('dpw').style.display = "none";
        document.getElementById('chc').style.display = "none";
        document.getElementById('chco').style.display = "none";
        document.getElementById('chn').style.display = "none";
    }
}
$('.select-cities').click(function () {
    $('.select-cities option:selected').appendTo('.chosen-cities');
});

$('.chosen-cities').click(function () {
    $('.chosen-cities option:selected').appendTo('.select-cities');
});
