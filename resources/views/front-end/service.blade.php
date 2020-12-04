@extends('layouts.app')

@section('title','Услуги')

@section('content')

    <div class="services_main_block p_page">
        <div class="container">
            <div class="title">
                <p>Услуги</p>
            </div>
            <div class="services_card_wrapper">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services_card">
                            <img src="/storage/{{$service->image}}" alt="">
                            <p>{{$service->job_title}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="services_info_wrapper">
        <div class="container">
            @foreach($services as $service)
            <div class="services_text">
                <div class="title">
                    <p>{{$service->title}}</p>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
