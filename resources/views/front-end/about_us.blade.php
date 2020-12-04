@extends('layouts.app')

@section('title','О нас')

@section('content')

    <div class="about_us lines_bg p_page">
        <div class="container">
            <div class="about_us_main_block ">
                <div class="title">
                    <p>О нас</p>
                </div>
                <div class="about_us_info">
                    <div class="row">
                        @foreach($abouts as $about)
                        <div class="col-xl-6">
                            <p>{{$about->right_description }}</p>
                        </div>
                        @endforeach
                        @foreach($abouts as $about)
                        <div class="col-xl-6">
                            <p>{{$about->left_description}}</p>
                        </div>
                            @endforeach
                    </div>
                </div>
                <div class="about_us_banner">
                    <div class="about_banner_slider">
                        <div>
                            <img src="{{asset('dist/images/about_bg.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('dist/images/about_bg.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('dist/images/about_bg.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="question_block">
        <div class="container position-relative">
            <div class="quest_info">
                <p>Чем Вы не занимаетесь? 🤔 🤓</p>
            </div>
            <div class="questions_items_wrapper">
                <div class="quest_item">
                    <img src="{{asset('dist/images/icon2.svg')}}" alt="">
                    <p>Не делаем редизайн сторонних сайтов</p>
                </div>
                <div class="quest_item">
                    <img src="{{asset('dist/images/icon2.svg')}}" alt="">
                    <p>Не дорабатываем разработки своих коллег
                    </p>
                </div>
                <div class="quest_item">
                    <img src="{{asset('dist/images/icon2.svg')}}" alt="">
                    <p>Не работаем за процент с ваших будущих доходов</p>
                </div>
                <div class="quest_item">
                    <img src="{{asset('dist/images/icon2.svg')}}" alt="">
                    <p>Не разрабатываем сайты наподобие Facebook
                    </p>
                </div>
                <div class="quest_item">
                    <img src="{{asset('dist/images/icon2.svg')}}" alt="">
                    <p>Не программируем на CMS шаблонах (Joomla, WordPress)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="services_block">
        <div class="container">
            <div class="title">
                <p>Процесс предоставлении услуг</p>
            </div>
            <div class="services_content">
                <div class="services_task">
                    @foreach($abouts as $about)
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 ">
                            <div class="services_title">
                                    <img src="{{asset('dist/images/file.svg')}}" alt="">
                                <div class="title">
                                    <p>{{$about->description_title_up}}</p>
                                </div>
                            </div>
                            <div class="services_text">
                                <p>{{$about->description_title_down}}
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 ">
                            <div class="task_img">
                                <img src="/storage/{{$about->image}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="documents_block">
        <div class="container">
            <div class="title">
                <p>НАШИ ДОКУМЕНТЫ</p>
            </div>
            <div class="documents_content">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <a href="#">
                            <div class="document purple_bg">
                                <img src="{{asset('dist/images/download.svg')}}" alt="">
                                <p>Бриф на создание логотипа</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <a href="#">
                            <div class="document purple_bg">
                                <img src="{{asset('dist/images/download.svg')}}" alt="">
                                <p>Бриф на создание логотипа</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <a href="#">
                            <div class="document silver_bg">
                                <img src="{{asset('dist/images/download.svg')}}" alt="">
                                <p>Коммерческое предложение на 2020 год</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <a href="#">
                            <div class="document silver_bg">
                                <img src="{{asset('dist/images/download.svg')}}" alt="">
                                <p>Коммерческое предложение на 2020 год</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our_team">
        <div class="container">
            <div class="title">
                <p>НАША КОМАНДА</p>
            </div>
            <div class="our_team_content">
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="person_card">
                            <div class="person_ava">
                                <img src="/storage/{{$team->image}}"  width="">
                            </div>
                            <div class="person_info rose_bg info_left">
                                <div>
                                    <h4>{{$team->full_name}}</h4>
                                    <p class="dark_purple_text">{{$team->position}}</p>
                                </div>
                                <p class="small_text">{{$team->phrase}}</p>
                            </div>
                            <div class="empty_block">

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="brands about_brands">
        <div class="container">
            <div class="brand_links">
                @foreach($logos as $logo)
                <a href="#">
                    <img src="{{$logo->logo}}" alt="">
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="photo_gallery">
        <div class="container">
            <div class="title">
                <p>ФОТОГАЛЕРЕЯ</p>
            </div>
            <div class="row photo_gallery_content">
                @foreach($galleries as $gallery)
                <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                    <div class="gallery_img">
                        <a href="/storage/{{$gallery->image}}"><img src="/storage/{{$gallery->image}}" alt=""></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection
