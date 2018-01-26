
  <div class="form-group row">
    <label for="teacher_id" class="col-sm-2 col-form-label text-right">ผู้สอน</label>
    <div class="col-sm-4">
        {!! Form::select('teacher_id', $teachers, null, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label for="subject_id" class="col-sm-2 col-form-label text-right">วิชา</label>
    <div class="col-sm-4">
        {!! Form::select('subject_id', $subjects, null, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label for="room_id" class="col-sm-2 col-form-label text-right">ห้องเรียน</label>
    <div class="col-sm-4">
        {!! Form::select('room_id', $rooms, null, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label for="s_date_id" class="col-sm-2 col-form-label text-right">วันที่เรียน</label>
    <div class="col-sm-4">
        {!! Form::select('s_date_id', $s_date, null,['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label for="s_begin_time_id" class="col-sm-2 col-form-label text-right">เวลาเริ่มเรียน</label>
    <div class="col-sm-4">
        {!! Form::select('s_begin_time_id', $s_begin_time, null,['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label for="s_end_time_id" class="col-sm-2 col-form-label text-right">เวลาสิ้นสุด</label>
    <div class="col-sm-4">
        {!! Form::select('s_end_time_id', $s_end_time, null,['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label for="s_term_id" class="col-sm-2 col-form-label text-right">ภาคเรียนที่</label>
    <div class="col-sm-4">
        {!! Form::select('s_term_id', $s_term, null,['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-4 float-right">
        <a href="/subject_tables" class="btn btn-warning">ยกเลิก</a>
      <button type="submit" class="btn btn-primary pull-right">บันทึกข้อมูล</button>
    </div>
  </div>
  