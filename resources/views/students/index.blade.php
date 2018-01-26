
@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ข้อมูลนักศึกษา</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> เพิ่มข้อมูล</a>
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
            <th>รหัสนักศึกษา</th>
            <th>ชื่อนักศึกษา</th>
            <th>E-mail</th>
            <th>Tel.</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->std_code }}</td>
        <td>{{ $student->prefix_name . $student->first_name . '  ' . $student->last_name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->tel }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $student->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $students->links() !!}
@endsection
