@extends('layouts.app')

@section('title','Блог')

@section('content')

    <div class="blog p_page bg_line  ">
        <div class="container">
            <div class="title">
                <p>Блог</p>
            </div>
            <div class="blog_card_wrapper">
                @forelse($blogs as $blog)
                <div class="blog_card col-xl-11 p-0">
                    <div class="row no-gutters ">
                        <div class="col-md-3">
                            <img src="/storage/{{$blog->image}}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="blog_card_text">
                               <a href="{{route('blog.inner.front',$blog->slug)}}"><h5 class="card-title">{{$blog->title}}</h5></a>
                                <p class="card_text">{{$blog->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-sm-12">

                        <div class="jumbotron jumbotron-fluid text-center">
                            <div class="container-fluid">
                                <h1 class="display-4">Статьи отсутствуют</h1>
                                <p class="lead">Вы можете вернуться позже и мы обязательно заполним данный раздел.</p>
                                <hr class="my-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('main.front') }}" role="button">Перейти на главную</a>
                            </div>
                        </div>

                    </div>

                @endforelse
            </div>
        </div>
    </div>
@endsection
