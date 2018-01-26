@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ข้อมูลห้องเรียน</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New room</a>
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
            <th>ชื่อห้อง</th>
            <th>ชั้น</th>
            <th>สถานะ</th>
            <th>ที่นั่ง</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($rooms as $room)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $room->room_name}}</td>
        <td>{{ $room->room_class}}</td>
        <td>{{ $room->room_status}}</td>
        <td>{{ $room->capacity}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $room->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $rooms->links() !!}
@endsection