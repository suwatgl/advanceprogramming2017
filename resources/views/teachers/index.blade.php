@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ข้อมูลอาจารย์</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('teachers.create') }}"> เพิ่มข้อมูล</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ชื่อ</th>
            <th>Tel.</th>
            <th>Email</th>
            <th>ที่อยู่</th>
            @if ($user->group_id != 2)
            <th width="280px">Action</th>
            @endif
        </tr>
    @foreach ($teachers as $teacher)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $teacher->prefix_name . $teacher->first_name . ' ' . $teacher->last_name}}</td>
        <td>{{ $teacher->tel}}</td>
        <td>{{ $teacher->email}}</td>
        <td>{{ $teacher->address}}</td>
        @if($user->group_id != 2)
        <td>
            <a class="btn btn-info" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['teachers.destroy', $teacher->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        @endif
    </tr>
    @endforeach
    </table>


    {!! $teachers->links() !!}
@endsection