@extends('layouts.app')

@section('title','Подробнее')

@section('content')

    <div class="inner_portfolio p_page">
        <div class="inner_portfolio_banner">
            <div class="container">
                <div class="col-xl-5">
                    <div class="title">
                        <p>{{$portfolios->title}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="fixed_info_portfolio">
                <div class="row m-0">
                    <div class="col-xl-4 col-lg-6">
                        <ul>
                            <li>
                                <p><span>Проект: {{$portfolios->name_project}}</span></p>
                            </li>
                            <li>
                                <p><span>Дата создания: </span> {{$portfolios->created_at->format('d.h.Y')}}</p>
                            </li>
                            <li>
                                <p><span>Срок разработки:</span> {{$portfolios->development_time}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <ul class="lang_technology">
                            <li>
                                <p><span>Языки технологии:</span> </p>
                            </li>
                            <li>
                                <p>{{$portfolios->languages}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="all_link">
                            <a href="{{route('portfolio.front')}}" class="btn">БОЛЬШЕ <img src="{{asset('dist/images/arrow-long-right.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner_portfolio_text">
                <div class="row">
                    <div class="col-xl-6">
                        <p>
                            {{$portfolios->main_description}}
                        </p>
                        <p>
                            {{$portfolios->description}}
                        </p>
                    </div>
                    <div class="col-xl-6">
                        <p>
                            {{$portfolios->description_job}}
                        </p>
                        <p>
                            {{$portfolios->description_about}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="info_img">
                <img src="/storage/{{$portfolios->image}}" alt="">
            </div>
        </div>
    </div>




@endsection
