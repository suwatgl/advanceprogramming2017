
<input type="hidden" name="subject_table_id" value="{{ $subject_table_id }}">
<input type="hidden" name="grade" value="E">

<div class="form-group row">
    <label for="student_id" class="col-sm-2 col-form-label text-right">นักศึกษา</label>
    <div class="col-sm-4">
        {!! Form::select('student_id', $students, null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-4 float-right">
        <a href="/subject_tables/{{ $subject_table_id }}" class="btn btn-warning">ยกเลิก</a>
        <button type="submit" class="btn btn-primary pull-right">บันทึกข้อมูล</button>
    </div>
</div>