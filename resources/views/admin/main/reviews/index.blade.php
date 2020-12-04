@extends('admin.layouts.app_')


@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')     @endslot
        @slot('parent') Главная     @endslot
        @slot('active') Обзор       @endslot
    @endcomponent
        <div class="container-fluid">
            <a href="{{route('review.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
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
                                                    <th>Ссылки</th>
                                                    <th>Описание</th>
                                                    <th>Картинка</th>
                                                    <th>Дата</th>
                                                    <th>Редактировать</th>
                                                    <th>Удалить</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($reviews as $review)
                                                    <tr>
                                                        <td><span class="badge badge-light-warning">{{$review->id}}</span></td>
                                                        <td><a href="{{url('review.index')}}" class="font-weight-medium link">{{$review->full_name}}</a></td>
                                                        <td><p class="font-weight-medium link">{{$review->position}}</p></td>
                                                        <td>
                                                            <p class="font-bold link">{{$review->reviews}}</p>
                                                        </td>
                                                        <td><img src="/storage/{{$review->image}}" alt="" width="70px" height="70px"></td>
                                                        <td><p>{{$review->created_at->format('d.m.Y-H:i')}}</p></td>
                                                        <form action="{{ route('review.destroy',$review->id) }}" method="POST">
                                                            <td><a href="{{route('review.edit',$review->id)}}" class="btn btn-info">Редактировать</a></td>
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
