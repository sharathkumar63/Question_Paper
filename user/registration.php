<?php
//datbase connection file
include('../includes/connect.php');
error_reporting(0);
  // echo "123";

// Signup Process
if(isset($_POST['signup']))
{
  // echo "123";

// Getting Post values
$name=$_POST['name'];
// $address=$_POST['address'];
$email=$_POST['email'];   
$phone=$_POST['phone']; 
$address=$_POST['address']; 
$psw=md5($_POST['psw']);  
$status=1;

$dt="SELECT * from students where email='$email'  ";
// echo "$dt";
$drs = mysqli_query($db, $dt);
while($dr = mysqli_fetch_assoc($drs)){

  $em=$dr['email'];
  // echo "$em";

}

if($email==$em){
         echo "<script>alert('Fail : This email already Exist');</script>";
echo "<script>window.location.href='registration.php'</script>"; }  
else{
// query for data insertion
// $sql="INSERT INTO users(name,email,phone,address,password,id) VALUES(:fname,:emailid,:pnumber,:address,:password,:status)";
$sql="insert into students(name,email,phone,address,category_id,password,status) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['phone']."','".$_REQUEST['address']."','".$_REQUEST['category']."','".$_REQUEST['psw']."','$status')";
// echo "$sql";


        if(mysqli_query($db, $sql))
{
echo "<script>alert('Success : User signup successfull. Now you can signin');</script>";
echo "<script>window.location.href='login.php'</script>";  
}
else 
{
echo "<script>alert('Error : Something went wrong. Please try again');</script>"; 
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

<!--     <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
 --> <style type="text/css">
   .form-08-main{
  background:url(https://th.bing.com/th/id/R.3ba9c349900cb094cffc7f2c099b7692?rik=rAolWQnMJAqZrA&riu=http%3a%2f%2fthegctv.com%2fwp-content%2fuploads%2f2019%2f05%2fQuotes-From-Commencement-Speeches.jpg&ehk=zH%2fhUh%2fTnp8xunqmDTgiJhGH8VQt4BMTaUd6JK7miIw%3d&risl=&pid=ImgRaw&r=0);
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
  position:relative;
  z-index:2;
  overflow:hidden;
}

   .logo{
  display:block;
  margin:0px auto;
  width:100px;
  height:100px;
}

.form-group{
  padding:6px 0px;
  display:inline-block;
  width:100%;
  position:relative;
}
 </style>


  </head>
  <body>
    <form form name="signup" method="POST" action="">
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
                  <input type="text" name="name" class="form-control _ge_de_ol" type="text" placeholder="Enter Name" required="" aria-required="true">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                </div>
                                <div class="form-group">
                  <input type="tele" name="phone" class="form-control _ge_de_ol" type="text" placeholder="Enter Phone" required="" aria-required="true">
                </div>
                <div class="form-group">
                  <input type="text" name="address" class="form-control _ge_de_ol" type="text" placeholder="Enter Address" required="" aria-required="true">
                </div>

                                                                                                    <div class="form-group">
                                                <h6>Category</h6>
                                                <p>
                                                    <select class="form-control  _ge_de_ol" name="category" id="category">

                      <?php
error_reporting(0);

   $catsql = "SELECT * FROM `categories`";
    $all_cat = mysqli_query($db,$catsql);


    ?>
         <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($cat = mysqli_fetch_array(
                        $all_cat,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $cat["id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $cat["category"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>



                                                    </select>
                                                </p>
                                            </div>
                <div class="form-group">
                  <input type="password" name="psw" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <div class="checkbox form-group">
<!--                   <div class="form-check">
 -->                  <!--   <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                      Remember me
                    </label> -->
<!--                   </div>
 -->                  <a href="login.php">Already Have an Account</a>
                </div>

                <div class="form-group">
<!--                   <div class="_btn_04">
 --><!--                     <a href="#">Login</a>
 
 -->               
 <input type="submit" value="Register"  id="signup" name="signup" class="_btn_04" >
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




