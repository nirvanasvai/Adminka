@extends('admin.layouts.app_')

@section('title','Услуги')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Контакты     @endslot
        @slot('parent') Главная      @endslot
        @slot('active') Создать      @endslot
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
                                        <h4 class="card-title mb-4">Конакты</h4>
                                    </div>
                                    <form class="row" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="input-group mb-3">
                                                <input for="phone" id="phone" name="phone" type="text" class="form-control" placeholder="НОМЕР 1">
                                                <input for="secondphone" id="secondphone" name="secondphone" type="file" class="form-control" placeholder="НОМЕР 2">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input for="address" id="address" name="address" type="text" placeholder="address">
                                                <input for="email" id="email" name="email" type="text" placeholder="email">
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

