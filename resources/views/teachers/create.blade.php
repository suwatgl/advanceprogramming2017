
@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>เพิ่มข้อมูลอาจารย์</h2>
            </div>
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'teachers.store','method'=>'POST')) !!}
         @include('teachers.form')
    {!! Form::close() !!}


@endsection