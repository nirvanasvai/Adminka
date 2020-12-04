@extends('admin.layouts.app_')

@section('title','Наша Команда')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  О нас   @endslot
        @slot('parent') Главная @endslot
        @slot('active') Обзор   @endslot
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
                                        <h4 class="card-title mb-3">О нас описание</h4>
                                    </div>
                                    <form action="{{route('team.update',$team->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="card-title">НАША КОМАНДА</h4>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input for="full_name" id="full_name" name="full_name" type="text" class="form-control mb-3" placeholder="ИМЯ" value="{{$team->full_name}}">
                                                                <input for="image" id="image" name="image" type="file" class="form-control mb-3" value="{{$team->image_team}}">
                                                                <input for="position" id="position" name="position" type="text" class="form-control mb-3" placeholder="Должность" value="{{$team->position}}">
                                                                <textarea for="phrase" name="phrase" id="phrase" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$team->phrase}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">

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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
@endsection


