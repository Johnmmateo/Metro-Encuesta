<?php
$img =  base_url("images/subway.png");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.2.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-9b6g9YkA3pNts/17Rv1oVN633iGTGjRNrBHSn2XFY0WJVdha5Ev3MOVPmJPZpFqD" crossorigin="anonymous">
    <style media="screen">

    body{
      background-image: url(<?php echo $img ?>);

    }


    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed|Permanent+Marker&effect=outline');
    *{
      font-family:  'Roboto Condensed', sans-serif;;
    }



.card{
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: 140px;
  width:400px;
  height:350px;
  padding: 50px;
  opacity: 0.9;
}

.brand{
  font-weight: bold;
  font-family:'Forte';
color:#158CBA;
}

  </style>
  </head>
  <body>



    <div class="card bg-light rounded" style="max-width: 25rem;">
        <h1 class="brand text-center">Admin</h1>

      <div class="card-body">

              <form  action="<?php echo base_url('Login/admin'); ?>" method="post">

                <div class="form-group">
                  <input required class="form-control form-control-lg" type="text" name="correo" placeholder="User" value="">
                </div>
                <div class="form-group">
                  <input required class="form-control form-control-lg" type="password" name="contrasena" placeholder="Password" value="">
                </div>

                <div class="text-center">
                  <input class="btn btn-success btn-lg" type="submit" name="submit" value="Login as Admin">
                  <a class="btn btn-danger btn-lg" href="<?php echo base_url('Maincontroller') ?>">Back</a>
                </div>
              </form>

        </div>
    </div>



  </body>
</html>
