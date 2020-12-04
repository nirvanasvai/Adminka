@extends('admin.layouts.app_')

@section('title','Наша Команда')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  О нас       @endslot
        @slot('parent') Команда     @endslot
        @slot('active') Обзор       @endslot
    @endcomponent

    <div class="col-lg-12">
        <div class="container">
        <h4 class="card-title">НАША КОМАНДА</h4>
        <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data" class="row form-group">
            @csrf
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <input for="full_name" id="full_name" name="full_name" type="text" class="form-control mb-3" placeholder="ИМЯ">
                        <input for="position" id="position" name="position" type="text" class="form-control mb-3" placeholder="Должность">
                        <textarea for="phrase" name="phrase" id="phrase" rows="3" class="form-control" placeholder="ОПИСАНИЕ"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <input for="image" id="image" name="image" type="file">
                    </div>
                </div>
                <button class="btn btn-success">Add</button>
            </div>
        </form>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

@endsection

