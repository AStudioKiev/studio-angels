@extends('layouts.main')

@section('body')
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

    <script src="{{asset('js/mine.js')}}"></script>

@stop