@extends('admin.layouts.app_')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Laravel 7 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('portfolio.create') }}">Add</a>
        </div>
    </div>

{{--    @if ($message = Session::get('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p>{{ $message }}</p>--}}
{{--        </div>--}}
{{--    @endif--}}

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($portfolios as $portfolio)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <form action="{{ route('portfolio.destroy',$portfolio->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('portfolio.show',$student->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('portfolio.edit',$student->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
