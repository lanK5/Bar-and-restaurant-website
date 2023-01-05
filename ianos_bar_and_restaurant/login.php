<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="card mx-auto card-info col-lg-6 col-md-8 col-sm-8 col-xl-4" style="padding: 1px;">
              <div class="card-header">
                <h5 class="card-title text-center"><p>AUTOMATED ORDERING AND BOOKING SYSTEM FOR IANOS BAR AND RESTAURANT</p></h5>
                <h3><p>Login form</p></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action ="#">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-form-label col-12">Email</label><br>
                    <div class="col-12">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-form-label col-12">Password</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-12">
                        <a><input type="checkbox" value="" id="remember"> Remember me</a>
                    </div>
                  </div>
                  
              </div>


                <!-- /.card-body -->
                <div class="col text-center">
                  <a href= "index.html"><input type="button" name="submit" id="submit" class="btn btn-lg btn-secondary col-12" style=" margin-bottom: 10px;" value="Sign In"></a>


                
                  <!-- /.card-footer -->
                </div>
                <div class="form-group text-center">
                    <p>Do you have an account? <a href="registration.php">Sign up</a> </p>
                    <a href="reset.html">Forgot Your Password?</a>
                </div>
                
              </form>
            </div>
        


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

</body>
</html>