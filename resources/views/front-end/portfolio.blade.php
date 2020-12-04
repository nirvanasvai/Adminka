@extends('layouts.app')

@section('title','Портфолио')

@section('content')
<div class="portfolio_info_text p_page">
    <div class="container">
        <div class="title">
            <p>Портфолио</p>
        </div>
        @foreach($portfolios as $portfolio)
            <div class="col-xl-6 p-0 mt-4">{{$portfolio->main_description}}</div>
        @endforeach
    </div>
</div>
<div class="portfolio our_works_wrapper">
   <div class="our_works">
        @foreach($portfolios as $portfolio)
        <a href="{{route('portfolioInner.front', $portfolio->slug)}}" class="link_to_work">
            <img src="/storage/{{$portfolio->image}}" alt="">
            <div class="work_info_text">
                <h5>{{$portfolio->title}}</h5>
                <p>{{$portfolio->description}}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
