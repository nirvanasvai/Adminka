@extends('admin.layouts.app_')

@section('title','Услуги')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Услуги     @endslot
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
                                    <div class="title">
                                        <h4 class="card-title mb-4">Услуги</h4>
                                    </div>
                                    <form class="row" action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="input-group mb-3">
                                                <input for="job_title" id="job_title" name="job_title" type="text" class="form-control" placeholder="Название">
                                                <input for="image" id="image" name="image" type="file" class="form-control" placeholder="Название">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input for="title" id="title" name="title" type="text" placeholder="title">
                                                <textarea for="description" name="description" id="description" rows="3" class="form-control" placeholder="Описание"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-success">Сохранить</button>
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

