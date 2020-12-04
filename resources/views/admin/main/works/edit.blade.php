@extends('admin.layouts.app_')


@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Как мы это делаем? @endslot
        @slot('parent') Главная            @endslot
        @slot('active') Редактивровать     @endslot
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
                                    <form action="{{route('work.update',$work->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="title"></label>
                                                            <input id="title" name="title" type="text" class="form-control mb-3" value="{{$work->title}}">

                                                            <label for="description"></label>
                                                            <textarea name="description" id="description" rows="3" class="form-control">{{$work->description}}</textarea>

                                                            <label for="image"></label>
                                                            <input id="image" name="image" type="file" class="form-control mb-3" value="{{$work->image}}">
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

