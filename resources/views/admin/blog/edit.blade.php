@extends('admin.layouts.app_')


@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  О нас            @endslot
        @slot('parent') Главная          @endslot
        @slot('active') Редактивровать   @endslot
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
                                    <form action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <textarea for="full_description" name="full_description" id="full_description" rows="3" class="form-control">{{$blog->full_description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="card-title">Blog</h4>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input for="image" id="image" name="image" type="file" class="form-control mb-3" value="{{$blog->image}}">
                                                                <input for="title" id="title" name="title" type="text" class="form-control mb-3" value="{{$blog->title}}">
                                                                <textarea for="description" name="description" id="description" rows="3" class="form-control" placeholder="ОПИСАНИЕ">{{$blog->description}}</textarea>
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
@endsection

