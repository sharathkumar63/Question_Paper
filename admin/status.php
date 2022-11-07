 <?php
//datbase connection file
include('../includes/connect.php');
error_reporting(0);

// Signup Process
// if(isset($_POST['signup']))
// {
  // echo "123";

// Getting Post values
// $name=$_POST['name'];
// $price=$_POST['price'];   
// $description=$_POST['description']; 

$id = $_GET["id"];
$status= $_GET['status'];
print_r($id);


 
$sql="UPDATE students SET  status='$status' WHERE id='".$_REQUEST['id']."'";

        if(mysqli_query($db, $sql))
{
// echo "<script>alert('Success : Meterial Updated Successfully.');</script>";
// echo "<script>window.location.href='viewmeterial.php'</script>";  
	header('location:viewstudents.php');
}
else 
{
echo "<script>alert('Error : Something went wrong. Please try again');</script>"; 
}

// }

    ?>