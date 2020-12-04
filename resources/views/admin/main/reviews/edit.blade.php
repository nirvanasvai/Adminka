@extends('admin.layouts.app_')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Отзывы     @endslot
        @slot('parent') Главная   @endslot
        @slot('active') Создать   @endslot
    @endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body b-l calender-sidebar">
                                    <form action="{{route('review.update',$review->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                            <div class="col-lg-12">
                                                <h4 class="card-title mb-3">Картинки Портфолио</h4>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img src="/storage/{{$review->image}}">
                                                                <input for="image" id="image" name="image" type="file" class="form-control mb-3">
                                                                <input for="full_name" id="full_name" name="full_name" type="text" class="form-control mb-3" placeholder="ИМЯ" value="{{$review->full_name}}">
                                                                <input for="position" id="position" name="position" type="text" class="form-control mb-3" placeholder="ССЫЛКИ" value="{{$review->position}}">
                                                                <textarea for="reviews" name="reviews" id="reviews" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$review->reviews}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-success ">Сохранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
