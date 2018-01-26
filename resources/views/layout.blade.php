
<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 CRUD Application</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>

<br>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ระบบจัดการห้องเรียน</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item {{ Request::segment(1) == 'teachers' ? 'active' : '' }}">
        <a class="nav-link" href="/teachers">อาจารย์ </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'students' ? 'active' : '' }}">
        <a class="nav-link" href="/students">นักศึกษา</a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'rooms' ? 'active' : '' }}">
        <a class="nav-link" href="/rooms">ห้องเรียน</a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'subjects' ? 'active' : '' }}">
        <a class="nav-link" href="/subjects">วิชาเรียน</a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'subject_tables' ? 'active' : '' }}">
        <a class="nav-link" href="/subject_tables">รายวิชาที่เปิด</a>
      </li>
    </ul>
  </div>
</nav>

    @yield('content')
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>