@extends('admin.layouts.app_')



@section('content')
    @component('admin.components.breadcrumb')
        @slot('title')  О нас       @endslot
        @slot('parent') Главная     @endslot
        @slot('active') Обзор       @endslot
    @endcomponent
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <a href="{{route('about.create')}}" class="btn btn-warning text-white mb-4">Создать</a>
            <a href="{{route('team.index')}}" class="btn btn-warning text-white mb-4">Наша Команда</a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="container-fluid">
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->
                                <!-- basic table -->
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
                                                @foreach($abouts as $about)
                                                <tr>
                                                    <td><span class="badge badge-light-warning">{{$about->id}}</span></td>
                                                    <td><a href="{{url('about.index')}}" class="font-weight-medium link">{{$about->description_title_up}}</a></td>
                                                    <td>
                                                        <p class="font-bold link">{{$about->left_description}}</p>
                                                    </td>
                                                    <td><img src="/storage/{{$about->image}}" alt="" width="70px" height="70px"></td>
                                                    <td><p>{{$about->created_at->format('d.m.Y-H:i')}}</p></td>
                                                    <form action="{{ route('about.destroy',$about->id) }}" method="POST">
                                                        <td><a href="{{route('about.edit',$about->id)}}" class="btn btn-info">Редактировать</a></td>
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
