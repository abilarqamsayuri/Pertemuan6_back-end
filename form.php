<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <form method="POST" action="form.php">
<fieldset>

<!-- Form Name -->
<h3>Form Login</h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="textinput" name="nama" type="text"  class="form-control input-md">
  </div>
</div>
<br>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="pass" type="password"  class="form-control input-md">
  </div>
</div>
<br>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Login</button>
  </div>
</div>
<br><hr>

</fieldset>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


 
<?php 
    function otentikasi($uname, $pass){
        // user admin , password 12345*
        if ($uname == "admin" && $pass == "12345*"){
            return "<h2>Berhasil Login</h2>";
        } else {
            return "<h2>Coba Lagi</h2>";
        }
    }

    
    echo otentikasi($_POST['nama'], $_POST['pass']);
?>
