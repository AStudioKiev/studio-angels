@extends('layouts.main')

@section('body')

    <ul id="mobile_nav" class="mobile-hidden">
        <li><a class="scroll" href="/">Главная</a></li>
        <li><a class="scroll" href="/#about_us">О нас</a></li>
        <li><a class="scroll" href="/#gallery">Галерея</a></li>
        <li><a class="scroll" href="{{url('blog')}}">Блог</a></li>
        <li><a class="scroll" href="/#info_block">Напрвления</a></li>
        <li><a class="scroll" href="/#timetable">Расписание</a></li>
        <li><a class="scroll" href="/#prices">Цены</a></li>
        <li><a class="scroll" href="/#contacts">Контакты</a></li>

        <div id="toggle_nav" onclick="showNav();"><img src="{{asset('img/menu-button.svg')}}" alt=""></div>
    </ul>

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

@stop

@section('js-section')

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

    <script src="{{asset('js/mine.js')}}"></script>

@stop