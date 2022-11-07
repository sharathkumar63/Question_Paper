

<?php
include('../includes/connect.php');

   session_start();
   include('header.php');

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $password = $_POST['psw']; 
      
      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
      print_r($sql);

      $result = mysqli_query($db,$sql);
      
      // echo "$result";
      // echo "1234";
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        $_SESSION['email']=$_POST['email'];
                $_SESSION['name']=$_POST['name'];
        $_SESSION['id']=$_POST['id'];


// session_start();
//  session_register("name");
//  session_register("email");
//  session_register("id");
 //session_register("nojual");
 // $_SESSION['name']=$r[name];
 // $_SESSION['email']=$r[email];
 // $_SESSION['id']=$r[id];

// $_SESSION['name']="NAME";
// $_SESSION['email']="EMAIL";
// $_SESSION['id']="ID";

  //$_SESSION['nojual']=$r[nojual];
//$_SESSION['nojual']=$r[nojual];


         // session_register("myusername");
         // $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>




<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title></title>
    <style type="text/css">
    .img
{
background-image:url("https://th.bing.com/th/id/R.3ba9c349900cb094cffc7f2c099b7692?rik=rAolWQnMJAqZrA&riu=http%3a%2f%2fthegctv.com%2fwp-content%2fuploads%2f2019%2f05%2fQuotes-From-Commencement-Speeches.jpg&ehk=zH%2fhUh%2fTnp8xunqmDTgiJhGH8VQt4BMTaUd6JK7miIw%3d&risl=&pid=ImgRaw&r=0");
}</style>
</head>
<body>



<div class="img">

    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
</div>

</body>
</html>