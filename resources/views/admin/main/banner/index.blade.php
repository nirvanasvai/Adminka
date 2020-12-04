@extends('admin.layouts.app_')


@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Как мы это делаем?  @endslot
        @slot('parent') Главная             @endslot
        @slot('active') Обзор               @endslot
    @endcomponent

    <div class="container-fluid">
        <a href="{{route('banner.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th>Описание</th>
                                                <th>Картинка</th>
                                                <th>Дата</th>
                                                <th>Редактировать</th>
                                                <th>Удалить</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($banners as $banner)
                                                <tr>
                                                    <td><span class="badge badge-light-warning">{{$banner->id}}</span></td>
                                                    <td>
                                                        <p class="font-bold link">{{$banner->description}}</p>
                                                    </td>
                                                    <td>
                                                    <p class="font-bold link">{{$banner->like}}</p>
                                                    </td>
                                                    <td><p>{{$banner->created_at->format('d.m.Y-H:i')}}</p></td>
                                                    <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
                                                        <td><a href="{{route('banner.edit',$banner->id)}}" class="btn btn-info">Редактировать</a></td>
                                                        @csrf
                                                        @method('DELETE')
                                                        <td><button class="btn btn-danger">Удалить</button></td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

