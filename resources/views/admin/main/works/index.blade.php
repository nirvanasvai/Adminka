@extends('admin.layouts.app_')


@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Как мы это длеаем? @endslot
        @slot('parent') Главная            @endslot
        @slot('active') Обзор              @endslot
    @endcomponent

    <div class="container-fluid">
        <a href="{{route('work.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
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
                                            @foreach($works as $work)
                                                <tr>
                                                    <td><span class="badge badge-light-warning">{{$work->id}}</span></td>
                                                    <td>
                                                        <p class="font-bold link">{{$work->description}}</p>
                                                    </td>
                                                    <td><img src="/storage/{{$work->image}}" alt="" width="70px" height="70px"></td>
                                                    <td><p>{{$work->created_at->format('d.m.Y-H:i')}}</p></td>
                                                    <form action="{{ route('work.destroy',$work->id) }}" method="POST">
                                                        <td><a href="{{route('work.edit',$work->id)}}" class="btn btn-info">Редактировать</a></td>
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

