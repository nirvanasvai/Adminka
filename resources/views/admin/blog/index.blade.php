@extends('admin.layouts.app_')


@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Блог        @endslot
        @slot('parent') Главная     @endslot
        @slot('active') Обзор       @endslot
    @endcomponent

    <div class="container-fluid">
        <a href="{{route('blog.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
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
                                            @foreach($blogs as $blog)
                                                <tr>
                                                    <td><span class="badge badge-light-warning">{{$blog->id}}</span></td>
                                                    <td><a href="{{url('blog.index')}}" class="font-weight-medium link">{{$blog->title}}</a></td>
                                                    <td>
                                                        <p class="font-bold link">{{$blog->description}}</p>
                                                    </td>
                                                    <td><img src="/storage/{{$blog->image}}" alt="" width="70px" height="70px"></td>
                                                    <td><p>{{$blog->created_at->format('d.m.Y-H:i')}}</p></td>
                                                    <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                                                        <td><a href="{{route('blog.edit',$blog->id)}}" class="btn btn-info">Редактировать</a></td>
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

