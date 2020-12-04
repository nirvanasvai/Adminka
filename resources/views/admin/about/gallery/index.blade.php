@extends('admin.layouts.app_')

@section('title','Логитпы')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Галлерея       @endslot
        @slot('parent') Главная        @endslot
        @slot('active') Обзор          @endslot
    @endcomponent
    <div class="container-fluid">
        <a href="{{route('gallery.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
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
                                                <th>Картинка</th>
                                                <th>Дата</th>
                                                <th>Редактировать</th>
                                                <th>Удалить</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($galleries as $gallery)
                                                <tr>
                                                    <td><span class="badge badge-light-warning">{{$gallery->id}}</span></td>
                                                    <td><img src="/storage/{{$gallery->image}}" alt="" width="70px" height="70px"></td>
                                                    <td><p>{{$gallery->created_at->format('d.m.Y-H:i')}}</p></td>
                                                    <form action="{{ route('gallery.destroy',$gallery->id) }}" method="POST">
                                                        <td><a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-info">Редактировать</a></td>
                                                        @csrf
                                                        @method('DELETE')
                                                        <td><button class="btn btn-danger">Удалить</button></td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            {{--                                                <tfoot>--}}
                                            {{--                                                <tr>--}}
                                            {{--                                                    <td colspan="3">--}}
                                            {{--                                                        <ul class="pagination pull-right">--}}
                                            {{--                                                            {{$about->links()}}--}}
                                            {{--                                                        </ul>--}}
                                            {{--                                                    </td>--}}
                                            {{--                                                </tr>--}}
                                            {{--                                                </tfoot>--}}
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

