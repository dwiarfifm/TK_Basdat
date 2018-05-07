<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BMNC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Berita</a></li>
        <li><a href="#">Polling</a></li>
        <li class="active"><a href="#">Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>Registration form</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Role:</label>
      <div class="col-sm-10">
     <select class="form-control" id="sel1">
    <option>Staff</option>
    <option>Dosen</option>
    <option>Mahasiswa</option>
    </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Usernama:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nomor Identitas (NPM, NIK):</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nama:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Tempat Lahir:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Tanggal Lahir:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nomor HP:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Status Kemahasiswaan:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ID Universitas:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1">
          <option>A01</option>
          <option>A02</option>
          <option>A03</option>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
