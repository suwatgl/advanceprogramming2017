@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>รายละเอียดรายวิชาที่เปิดสอน</h2>
            </div>
        </div>
    </div>

    <dl class="row">
        <dt class="col-sm-3 float-right">รหัสวิชา</dt>
        <dd class="col-sm-9">{{ $subject_table->subject->subject_code }}</dd>
        <dt class="col-sm-3">ชื่อวิชา</dt>
        <dd class="col-sm-9">{{ $subject_table->subject->subject_name }}</dd>
        <dt class="col-sm-3">อาจารย์ผู้สอน</dt>
        <dd class="col-sm-9">{{ $subject_table->teacher ? $subject_table->teacher->first_name . ' ' . 
                $subject_table->teacher->last_name : '' }}</dd>
        <dt class="col-sm-3">วันที่/เวลา</dt>
        <dd class="col-sm-9">{{ $s_date[$subject_table->s_date_id]}} 
            เวลา {{ $s_begin_time[$subject_table->s_begin_time_id] . '-' . 
                    $s_end_time[$subject_table->s_end_time_id]}}</dd>
        <dt class="col-sm-3">ห้องเรียน</dt>
        <dd class="col-sm-9">{{ $subject_table->room->room_name}}</dd>
    </dl>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ราชชื่อนักศึกษาที่ลงทะเบียนเรียน</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('subject_registers.create') }}?subject_table_id={{ $subject_table->id }}"> เพิ่มนักศึกษา</a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อนักศึกษา</th>
                    <th>Tel.</th>
                    <th width="100px">Action</th>
                </tr>
                <?php $i = 0 ?>
                @foreach ($students as $table)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $table->student->std_code }}</td>
                    <td>{{ $table->student->prefix_name . $table->student->first_name . '  ' . 
                        $table->student->last_name }}</td>
                    <td>{{ $table->student->tel }}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE',
                        'route' => ['subject_registers.destroy', $table->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection