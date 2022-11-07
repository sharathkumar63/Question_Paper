

<?php
session_start();

include('../includes/connect.php');


 // $sql = "SELECT * FROM `meterials` where meterial id='$_POST['meterial']'";
 //    $all_meterials = mysqli_query($db,$sql);
 //      while ($category = mysqli_fetch_array($all_meterials,MYSQLI_ASSOC))
 //      {
 //      $amt=$category['price'];
 //      print_r($amt);

 //      }
    // print_r($all_meterials);
    // echo "$all_meterials['price']";

$data=$_POST;
echo "<pre>";
// echo "123";
var_dump($data);

$count = count($_POST['qno']);

for($i=0; $i <$count; $i++){




$sql= "INSERT INTO `qstn` (`no`,`question`,`mark`,`co`, `rbt`) VALUES ('{$_POST['qno'][$i]}','{$_POST['question'][$i]}','{$_POST['mark'][$i]}','{$_POST['co'][$i]}','{$_POST['rbt'][$i]}')";
print_r($sql);
$result=($db->query($sql));

 if ($result) 
    {
     echo "<script>alert('Success : Question Added Successfully.');</script>";
echo "<script>window.location.href='generate_paper.php'</script>";  
    } 


}

?>