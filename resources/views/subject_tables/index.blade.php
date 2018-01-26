@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>รายวิชาที่เปิดสอน</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('subject_tables.create') }}"> เพิ่มข้อมูล</a>
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
            <th>ผู้สอน</th>
            <th>วิชา</th>
            <th>ห้องเรียน</th>
            <th>วันที่เรียน</th>
            <th>เวลาเรียน</th>
            <th width="250px">Action</th>
        </tr>
    @foreach ($subject_tables as $subject_table)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $subject_table->teacher ? $subject_table->teacher->first_name . ' ' . 
               $subject_table->teacher->last_name : '' }}</td>
        <td>{{ $subject_table->subject->subject_name}}</td>
        <td>{{ $subject_table->room->room_name}}</td>
        <td>{{ $s_date[$subject_table->s_date_id]}}</td>
        <td>{{ $s_begin_time[$subject_table->s_begin_time_id] . '-' . $s_end_time[$subject_table->s_end_time_id]}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('subject_tables.show',$subject_table->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('subject_tables.edit',$subject_table->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['subject_tables.destroy', $subject_table->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $subject_tables->links() !!}
@endsection