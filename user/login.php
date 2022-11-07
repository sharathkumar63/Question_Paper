<?php
include('../includes/connect.php');
   session_start();



   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $password = $_POST['psw']; 
      
      $sql = "SELECT * FROM students WHERE email = '$email' and password = '$password' and status='1'";
      // print_r($sql);

      $result = mysqli_query($db,$sql);
      
      // echo "$result";
      // echo "1234";
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {


        $_SESSION['email']=$row['email'];
                $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];

         
         header("location: home.php ");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<?php
include('logheader.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style type="text/css">
         .form-08-main{
  background:url(https://th.bing.com/th/id/R.3ba9c349900cb094cffc7f2c099b7692?rik=rAolWQnMJAqZrA&riu=http%3a%2f%2fthegctv.com%2fwp-content%2fuploads%2f2019%2f05%2fQuotes-From-Commencement-Speeches.jpg&ehk=zH%2fhUh%2fTnp8xunqmDTgiJhGH8VQt4BMTaUd6JK7miIw%3d&risl=&pid=ImgRaw&r=0);
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
  position:relative;
  z-index:2;
  overflow:hidden;
}
    </style>

<!--     <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
 -->  </head>
  <body>
    <form method="POST" action="">
    <section class="form-08-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="../assets/images/user.png">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="psw" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <div class="checkbox form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                      Remember me
                    </label>
                  </div>
                  <a href="registration.php">Create New Account</a>
                </div>

                <div class="form-group">
<!--                   <div class="_btn_04">
 --><!--                     <a href="#">Login</a>
 
 -->               
 <input type="submit" value="Login" class="_btn_04" name="">
<!--     </div>
 -->                </div>

<!--                 <div class="form-group nm_lk"><p>Or Login With</p></div>

                <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <li><i class="fa fa-facebook"></i></li>
                      <li><i class="fa fa-twitter"></i></li>
                      <li><i class="fa fa-google-plus"></i></li>
                      <li><i class="fa fa-instagram"></i></li>
                      <li><i class="fa fa-linkedin"></i></li>
                    </ol>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>
  </body>
</html>


