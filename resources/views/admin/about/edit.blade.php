@extends('admin.layouts.app_')


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
                                        <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <textarea for="right_description" name="right_description" id="right_description" rows="3" class="form-control">{{$about->right_description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <textarea for="left_description" name="left_description" id="left_description" cols="30" rows="3" class="form-control">{{$about->left_description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h4 class="card-title">ПРОЦЕСС ПРЕДОСТАВЛЕНИЯ УСЛУГ</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Загрузить</span>
                                                                        </div>
                                                                        <div class="custom-file">
                                                                            <input name="image" type="file" class="custom-file-input" id="image">
                                                                            <label class="custom-file-label" for="image">{{$about->image}}</label>
                                                                        </div>
                                                                    </div>
                                                                    <input for="description_title_up" id="description_title_up" name="description_title_up" type="text" class="form-control mb-3" placeholder="ИМЯ" value="{{$about->description_title_up}}">
                                                                    <textarea for="description_title_down" name="description_title_down" id="description_title_down" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$about->description_title_down}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-12">
                                                    <h4 class="card-title">НАША КОМАНДА</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <input type="text" class="form-control mb-3" placeholder="ИМЯ">
                                                                    <input type="text" class="form-control mb-3" placeholder="Должность">
                                                                    <textarea name="" id="" rows="3" class="form-control" placeholder="ОПИСАНИЕ"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">

                                                        </div>
                                                    </div>
                                                </div> -->
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

