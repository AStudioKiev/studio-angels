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

    <div class="article-container">
        <div class="container-md">
            <div id="article">
                <div class="panel panel-default article-holder">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div>
                                <div class="pink-top">
                                    <span>{{$post->title}}</span>
                                </div>

                                <div class="white-bottom">
                                    <img class="article-image" src="{{asset($post->image)}}">
                                </div>
                            </div>
                        </h4>
                    </div>

                    <div class="panel-body">
                        <div class="article-text-holder">
                            {{$post->text}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="{{asset('js/mine.js')}}"></script>

</html>