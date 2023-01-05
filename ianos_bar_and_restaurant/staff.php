<?php
require_once('config2.php');
?>

<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/bootstrap.min.css"> 
     <title>staff Registration | PHP</title>
      
  </head>

<body>

    <div>
      <?php
      if(isset($_POST['create'])){
      
      $firstname      =$_POST['firstname'];
      $lastname       =$_POST['lastname'];
      $id             =$_POST['id'];
      $email          =$_POST['email'];
      $phonenumber    =$_POST['phonenumber'];
      $password       =$_POST['password'];

        $sql="INSERT INTO staff_details (firstname, lastname, id, email, phonenumber, password ) VALUES(?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $id, $email, $phonenumber, $password]);
        if($result){
          echo 'Successfully saved.';
        }else{
          echo 'There was an error while saving the data.';
        }
      }
      ?>
    </div>
    <div>
        <form action="staff.php" method="post">
            <div class="container">        
          
            <div class="row">
              <div class="col-sm-6">
                <h2><p><i>Ianos Bar and Restaurant</i></p></h2> 
                <h2><p>STAFF REGISTRATION FORM</p></h2>
                <p>Fill up the form with the correct credentials</p>
                <hr class="mb-6">
                <label for="firstname"><b>First Name</b></label>
                <input class="form-control" id="firstname" type="text"  name="firstname" required>
            
                <label for="lastname"><b>Last Name</b></label>
                <input class="form-control" id="lastname" type="text"  name="lastname" required>

                <label for="id"><b>Customer's ID</b></label>
                <input class="form-control" id="id" type="number"  name="id" required>

                <label for="email"><b>Email Address</b></label>
                <input class="form-control" id="email" type="email"  name="email" required>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input class="form-control" id="phonenumber" type="number"  name="phonenumber" required>

                <label for="password"><b>Password</b></label>
                <input class="form-control" id="password" type="password"  name="password" required>
                <hr class="mb-3">

                <input class="btn btn-primary" type="submit"  name="create" value ="Create account">
                <input class="btn btn-primary" type="submit"  name="cancel" value ="Cancel"><a href="register.php"></a>
            
                    <p>Do you have an account? <a href="login.php">Sign in</a> </p>
                    <p><a href="reset.html">Forgot Your Password?</a></p>
                    <p>For customer registration click <a href="registration.php">Customer</a></p>
                    
                </div>
              </div>
            </div>
          </div>

          <!-- FOOTER -->
          <footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-18 col-sm-18 col-md-10 col-lg-10">
            <p><marquee direction="left" behaviour="alternate"> Ianos Bar and Restaurant &copy; 2021</marquee></p>
          </div>
        </div>
      </div>
    </footer>
        </form>
      </div>
  </body>
</html>