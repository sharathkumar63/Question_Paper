

<?php
include('../includes/connect.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['name'];
      $password = $_POST['password']; 

echo "$email";


          if (empty($email)) {

        header("Location: adminlogin.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: adminlogin.php?error=Password is required");

        exit();

    }else{



            if ($email == "admin" && $email == "admin") {

                   $_SESSION['email']=$_POST['email'];
                $_SESSION['name']=$_POST['name'];
            header("Location: adminhome.php?");

             exit(); 


        }else{
            
                echo 'incorrect user name and password';

            header("Location: adminlogin.php?error=Incorect User name or password");

            exit();

        }

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
                  <input type="text" name="name" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <div class="checkbox form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                      Remember me
                    </label>
                  </div>
<!--                   <a href="registration.php">Create New Account</a>
 -->                </div>

                <div class="form-group">
<!--                   <div class="_btn_04">
 --><!--                     <a href="#">Login</a>
 
 -->               
 <input type="submit" value="Login" class="_btn_04" name="">
               </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>
  </body>
</html>


