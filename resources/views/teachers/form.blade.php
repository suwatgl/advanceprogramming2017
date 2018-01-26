
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-right">คำนำหน้า</label>
    <div class="col-sm-10">
        {!! Form::text('prefix_name', null, array('placeholder' => 'คำนำหน้า','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">ชื่อ</label>
    <div class="col-sm-10">
        {!! Form::text('first_name', null, array('placeholder' => 'ชื่อ','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">นามสกุล</label>
    <div class="col-sm-10">
        {!! Form::text('last_name', null, array('placeholder' => 'ชื่อ','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">Tel.</label>
    <div class="col-sm-10">
        {!! Form::text('tel', null, array('placeholder' => 'Tel.','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">E-mail</label>
    <div class="col-sm-10">
        {!! Form::text('email', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">ที่อยู่</label>
    <div class="col-sm-10">
        {!! Form::text('address', null, array('placeholder' => 'ที่อยู่','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 pull-right">
        <a href="/teachers" class="btn btn-warning">ยกเลิก</a>
      <button type="submit" class="btn btn-primary pull-right">บันทึกข้อมูล</button>
    </div>
  </div>
  