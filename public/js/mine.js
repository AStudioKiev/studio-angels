$('.carousel').carousel();
        
$("#en_lang").click(function(){
    $("html").attr("lang", "en");
    $(this).addClass("lang-active");
    $("#ru_lang").removeClass("lang-active");
});

$("#ru_lang").click(function(){
    $("html").attr("lang", "ru");
    $(this).addClass("lang-active");
    $("#en_lang").removeClass("lang-active");
});

$(document).on('click', function(){
    if(!$(this).hasClass('navbar-collapse')){
    $('.navbar-collapse').removeClass('in');
  }
});

$(function() {
    $(document.body).on('appear', '.popup-up', function(e, $affected) {
        $(this).addClass("appeared");
    });

    $('.popup-up').appear({force_process: true});
});

$(function() {
    $(document.body).on('appear', '.popup-down', function(e, $affected) {
        $(this).addClass("appeared");
    });

    $('.popup-down').appear({force_process: true});
});

$(function() {
    $(document.body).on('appear', '.popup-left', function(e, $affected) {
        $(this).addClass("appeared");
    });

    $('.popup-left').appear({force_process: true});
});

$(function() {
    $(document.body).on('appear', '.popup-right', function(e, $affected) {
        $(this).addClass("appeared");
    });

    $('.popup-right').appear({force_process: true});
});

$(document).ready(function() {
    $("a").click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
             duration: 800,
             easing: "swing"
        });
        return false;
    });
});

function sendSectionName(section) {
    $("#sectionM").val(section.id);
    $("#section").val(section.id);
}