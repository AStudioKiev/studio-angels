<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Angels</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body>
<div class="blog-container">
    <h1 class="lg-header">Блог Studio Angels</h1>

    <div class="container-md">
        <div id="articles_list" class="panel-group zero">
            @foreach($posts as $post)
            <div class="panel panel-default article-holder">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div>
                            <div class="pink-top">
                                <span>{{$post->title}}</span>
                            </div>

                            <div class="white-bottom">
                                <img class="article-image" src="{{asset($post->image)}}" alt="">
                                <a href="{{url('article', $post->id)}}" class="more-link">Подробнее...</a>
                            </div>
                        </div>
                    </h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</body>

<script>
    $('.carousel').carousel();
    $("#carousel-example-generic .carousel-indicators p").hover(function() {
        var goto = Number( $(this).attr('data-slide-to') );
        $("#carousel-example-generic").carousel(goto);
    });
</script>

<script>
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
</script>

<script>
    $(document).ready(function() {
        $(".scroll").click(function() {
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top + "px"
            }, {
                duration: 800,
                easing: "swing"
            });
            return false;
        });
    });
</script>

<script>
    function showNav() {
        var nav = document.getElementById("mobile_nav");

        if (nav.classList.contains('mobile-hidden')) {
            nav.classList.remove('mobile-hidden');
            nav.classList.add('mobile-visible');
        }
        else {
            nav.classList.remove('mobile-visible');
            nav.classList.add('mobile-hidden');
        }
    }
</script>

<!--<script>
    $('.more-link').on( "click", function() {
        var obj = this;
        var oldHeight = $(obj).parent().parent().parent().parent().parent().height();

        /*function addHeight() {
            if($(obj).parent().parent().parent().parent().parent().find('.in').length !== 0)
                $('#articles_list').height(1333 + oldHeight);
            else
                $('#articles_list').height(1333);
        }*/
        function addHeight() {
            $('#articles_list').height(1333 + oldHeight);
        }
        addHeight();
    });
</script>-->
</html>
