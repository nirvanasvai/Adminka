@extends('admin.layouts.app_')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Портфолио @endslot
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
                                    <form action="{{route('portfolio.update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <h4 class="card-title mb-3">ПОРТФОЛИО описание</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <textarea for="main_description" name="main_description" id="main_description" rows="3" class="form-control">{{$portfolio->main_description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="card-title mb-3">Картинки Портфолио</h4>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img src="/storage/{{$portfolio->image}}">
                                                                <input for="image" id="image" name="image" type="file" class="form-control mb-3">
                                                                <input for="title" id="title" name="title" type="text" class="form-control mb-3" placeholder="ИМЯ" value="{{$portfolio->title}}">
                                                                <input for="slug" id="slug" name="slug" type="text" class="form-control mb-3" placeholder="ССЫЛКИ" value="{{$portfolio->slug}}">
                                                                <textarea for="description" name="description" id="description" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$portfolio->description}}</textarea>

                                                                <input for="name_project" id="name_project" name="name_project" type="text" class="form-control mb-3" placeholder="НАЗВАНИЕ ПРОЕКТА" value="{{$portfolio->name_project}}">
                                                                <input for="development_time" id="development_time" name="development_time" type="text" class="form-control mb-3" placeholder="СРОКИ ИЗГОТОВЛЕНИЕ ПРОЕКТА" value="{{$portfolio->development_time}}">

                                                                <textarea for="languages" name="languages" id="languages" rows="3" class="form-control" placeholder="ИСПОЛЬЗОВАННЫЕ ЯЗЫКИ">{{$portfolio->languages}}</textarea>
                                                                <textarea for="description_job" name="description_job" id="description_job" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$portfolio->description_job}}</textarea>
                                                                <textarea for="description_about" name="description_about" id="description_about" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$portfolio->description_about}}</textarea>
                                                            </div>
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
