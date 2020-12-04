@extends('admin.layouts.app_')

@section('title','Логитпы')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Логотипы   @endslot
        @slot('parent') Главная    @endslot
        @slot('active') Обзор      @endslot
    @endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body b-l calender-sidebar">
                                    <div class="col-lg-12 row">
                                        <h4 class="card-title mb-3">Изменить Фото Логотипов</h4>
                                    </div>
                                    <form action="{{route('logo.update',$logo->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="card-title">Логотипы</h4>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input for="logo" id="logo" name="logo" type="file" class="form-control mb-3" value="{{$logo->logo}}">
                                                                <input for="slug" id="slug" name="slug" type="text" class="form-control mb-3" placeholder="ССЫЛКИ" value="{{$logo->slug}}">
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
    </div>
@endsection





