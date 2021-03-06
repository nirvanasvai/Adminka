@extends('admin.layouts.app_')

@section('title','Наша Команда')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  Команда      @endslot
        @slot('parent') Главная      @endslot
        @slot('active') Обзор        @endslot
    @endcomponent

    <div class="container-fluid">
        <a href="{{route('team.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
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
                                            @foreach($teams as $team)
                                                <tr>
                                                    <td><span class="badge badge-light-warning">{{$team->id}}</span></td>
                                                    <td><a href="{{url('team.index')}}" class="font-weight-medium link">{{$team->full_name}}</a></td>
                                                    <td>
                                                        <p class="font-bold link">{{$team->position}}</p>
                                                    </td>
                                                    <td><img src="/storage/{{$team->image}}" alt="" width="70px" height="70px"></td>
                                                    <td><p>{{$team->created_at->format('d.m.Y-H:i')}}</p></td>
                                                    <form action="{{ route('team.destroy',$team->id) }}" method="POST">
                                                        <td><a href="{{route('team.edit',$team->id)}}" class="btn btn-info">Редактировать</a></td>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

@endsection

