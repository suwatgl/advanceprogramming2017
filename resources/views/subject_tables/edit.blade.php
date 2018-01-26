@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>แก้ไขข้อมูลรายวิชาที่เปิดสอน</h2>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($subject_table, ['method' => 'PATCH',
            'route' => ['subject_tables.update', $subject_table->id]]) !!}
        @include('subject_tables.form')
    {!! Form::close() !!}

@endsection
