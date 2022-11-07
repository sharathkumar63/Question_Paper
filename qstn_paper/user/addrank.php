
<?php
   session_start();
include('header.php');
?>


<?php
//datbase connection file
include('../includes/connect.php');
error_reporting(0);
  // echo "123";

// Signup Process
if(isset($_POST['signup']))
{

  $id=$_SESSION['id'];
$course=$_POST['course']; 
$rank=$_POST['rank']; 

$dt="SELECT * from rank where student_id='$id'  ";
// echo "$dt";
$drs = mysqli_query($db, $dt);
while($dr = mysqli_fetch_assoc($drs)){

  $em=$dr['student_id'];
  // echo "$em";

}


if($id==$em){
         echo "<script>alert('Fail : You already entered your rank');</script>";
echo "<script>window.location.href='addrank.php'</script>"; }  
else{

$sql="insert into rank(student_id,course_id,rank) values('$id', '$course','$rank')";
echo "$sql";
        if(mysqli_query($db, $sql))
{
echo "<script>alert('Success : Rank Added Successfully.');</script>";
echo "<script>window.location.href='addrank.php'</script>";  
}
else 
{
echo "<script>alert('Error : Something went wrong. Please try again');</script>"; 
}
}
}

    ?>


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,select:focus {
  background-color: #ddd;
  outline: none;
}



button:hover {
  opacity:1;
}


form {
   margin-top: 20px;
    margin-left: 35%;
    margin-right:35%;
    width: 30%;
}
</style>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 -->  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->  <title></title>
</head>
<body>




<form name="signup" method="POST" style="">
  <div class="container ">
    <h2>Add Rank </h2>
  <hr>

    <label for="name"><b>Course</b></label>

    <select name="course" class="">
                      <?php


error_reporting(0);

   $course = "SELECT * FROM `course`";
    $all_course = mysqli_query($db,$course);


    ?>
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($cour = mysqli_fetch_array(
                        $all_course,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $cour["id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $cour["course_name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>

        </select>
<br>





        <label for="rank"><b>Rank</b></label>
    <input type="text" placeholder="Enter Rank" name="rank" required>



    <div class="clearfix">
      <input value="Reset" type="reset" class="cancelbtn btn btn-danger col-3">
      &nbsp; &nbsp; 
      <button type="submit" class="signupbtn btn btn-warning col-3"  value="Submit" id="signup" name="signup">Add</button>
    </div>
  </div>
</form>

</body>
</html>
