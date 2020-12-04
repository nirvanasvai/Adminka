@extends('layouts.app')

@section('title','Главная')

@section('content')

<div class="main_slider">
    @foreach($mains as $main)
    <div class="slider_item" style="background-image: url(/storage/{{$main->image}});">
        <div class="container" >
            <div class="slider_text" >
                <p>МЫ <span class="dark_purple_text">НОМАДЫ <br></span> В <span class="purple_text">WEB</span> МИРЕ</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="our_works_wrapper" >
    <div class="our_works">
        @foreach($portfolios as $portfolio)
        <a href="{{route('portfolioInner.front',$portfolio->slug)}}" class="link_to_work" data-aos="fade-up" data-aos-delay="300">
            <img src="/storage/{{$portfolio->image}}" alt="">
            <div class="work_info_text">
                <p>{{$portfolio->title}}</p>
            </div>
        </a>
        @endforeach
    </div>
    <a href="{{url('portfolio')}}" class="all_info" data-aos="fade-right">БОЛЬШЕ <img src="{{asset('dist/images/arrow-long-right.svg')}}" alt=""></a>
</div>

<div class="development">
    <div class="container">
        <div class="work_info">
            <div class="title" data-aos="fade-right">
                    <p data-aos-delay="300">Чем мы занимаемся?</p>
                <span class="title_info"  data-aos="fade-right" data-aos-delay="600">Прорабатываем пользовательские сценарии, проектируем логику приложения, скечируем основные экраны.</span>
            </div>
            <div class="dev_card_wrapper">
                <div class="row">
                    @foreach($doings as $doing)
                    <div class="col-xl-4">
                        <div class="dev_card">
                            <img src="/storage/{{$doing->image}}" alt="">
                            <div class="dev_Card_text">
                                <h6>{{$doing->title}}</h6>
                                <p>{{$doing->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <a href="{{url('about')}}" class="all_info" data-aos="fade-right">БОЛЬШЕ <img src="{{asset('dist/images/arrow-long-right.svg')}}" alt=""></a>

        </div>
        <div class="working_process">
            <div class="title">
                <p data-aos="fade-right">КАК МЫ ЭТО ДЕЛАЕМ?</p>
                @forelse($banners as $banner)
                <div class="working_process_info" data-aos="fade-right" data-aos-delay="600">
                    {{$banner->description}}
                    <span><img src="{{asset('dist/images/like.svg')}}" alt="">{{$banner->like}}</span>

                @empty
                <div class="working_process_info" data-aos="fade-right" data-aos-delay="600">
                    Создание качественного 😇 продукта - очень кропотливая работа 💻 но Вы не ошибетесь, если закажете работу у нас🇰🇿
                    <span><img src="{{asset('dist/images/like.svg')}}" alt="">523</span>
                </div>
                @endforelse
            </div>
            </div>
            <div class="slider_working_process">
                @foreach($works as $work)
                <div class="slider_item">
                    <img src="/storage/{{$work->image}}" alt="">
                    <h5>{{$work->title}}</h5>
                    <p>{{$work->description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="info_banner">
    <div class="info_banner_text">
        <p>Оправдываем каждый потраченный тенге</p>
        <div class="info_btn">
            <a href="#" class="all_info">ВСЕ ЦЕНЫ <img src="{{asset('dist/images/arrow-long-right.svg')}}" alt=""></a>
            <a href="#" class="violet_btn">ОСТАВИТЬ ЗАЯВКУ</a>
        </div>
    </div>
</div>
<div class="info_btn info_btn_mobile">
    <a href="#" class="all_info">ВСЕ ЦЕНЫ <img src="{{asset('dist/images/arrow-long-right.svg')}}" alt=""></a>
    <a href="#" class="violet_btn">ОСТАВИТЬ ЗАЯВКУ</a>
</div>

<div class="website_creation_block">
    <div class="container">
        <div class="title" >
            <p >СОЗДАНИЕ САЙТА В АЛМАТЫ</p>
        </div>
        <div class="info_text">
            <div class="row">
                @foreach($mains as $main)
                <div class="col-xl-6">
                    <p>{{$main->description}}</p>
                </div>
                @endforeach
        <a href="#" class="all_info">Больше <img src="{{asset('dist/images/arrow-long-right.svg')}}" alt=""></a>

    </div>
</div>

<div class="brands">
    <div class="container">
        <div class="brand_links">
            @foreach($logos as $logo)
            <a href="{{$logo->slug}}" target="blank">
                <img src="/storage/{{$logo->image_logo}}" alt="">
            </a>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="comment_slider">
        @foreach($reviews as $review)
        <div class="slider_item">
            <div class="comment_user">
                <img src="{{$review->image}}" alt="">
                <div>
                    <h5>{{$review->full_name}}</h5>
                    <p class="purple_text">{{$review->position}}</p>
                    <div class="comment_text">
                        <p>{{$review->reviews}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    </div>
    <div class="slider-controls">
        <div class="append_dots">
        </div>
        <div class="slider-controls-content">
            <div class="slides-numbers" style="display: block;">
                <span class="active">1</span> <span>из</span> <span class="total"></span>
            </div>
            <div class="slider-arrows">
            </div>
        </div>
    </div>
</div>


<div class="articles">
    <div class="container">
        <div class="title">
            <p>СТАТЬИ ОТ STUDIO NOMAD</p>
        </div>
        <div class="articles_content">
            <div class="row">
                @forelse($blogs as $blog)
                <div class="col-xl-4 col-md-6 col-lg-6" >
                    <div class="articles_card" style="background-image: url(/storage/{{$blog->image}});">
                        <div class="card_text">
                            <p>{{$blog->title}}</p>
                        </div>
                    </div>
                </div>
                @empty


                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
