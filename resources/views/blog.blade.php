@extends('layouts.main')

@section('body')

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

@stop

@section('js-section')

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

@stop