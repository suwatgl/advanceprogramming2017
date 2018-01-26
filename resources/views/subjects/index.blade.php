@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ข้อมูลวิชาเรียน</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('subjects.create') }}"> เพิ่มข้อมูล</a>
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
            <th>รัหสวิชา</th>
            <th>ชื่อวิชา</th>
            <th>หน่วยกิต</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $subject->subject_code }}</td>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->subject_credit }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('subjects.show',$subject->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['subjects.destroy', $subject->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $subjects->links() !!}
@endsection
