<?php
   session_start();
include('header.php');
?>


<?php
//datbase connection file
include('../includes/connect.php');
error_reporting(0);
                 $i = 1;



     $u_id=$_SESSION['id'];      
     // echo "$u_id";    
     $rsql="select course_id from rank where student_id=$u_id" ;
   // echo  $rsql;
          $rres = ($db->query($rsql));
              $rrow = []; 
    if ($rres->num_rows > 0) 
    {

        // fetch all data from db into array 
        $rrow = $rres->fetch_all(MYSQLI_ASSOC);  


      if(!empty($rrow))
               foreach($rrow as $rrows)
              {
                   $cour= $rrows['course_id'];

              } 

    } 


     $ranksql="select rank from rank where student_id=$u_id" ;
   // echo  $ranksql;
          $ranks = ($db->query($ranksql));
              $rankrow = []; 
    if ($ranks->num_rows > 0) 
    {

        // fetch all data from db into array 
        $rankrow = $ranks->fetch_all(MYSQLI_ASSOC);  


      if(!empty($rankrow))
               foreach($rankrow as $rankrows)
              {
                   $rnk= $rankrows['rank'];
// echo "$rnk";
              } 

    } 


     $cat="SELECT students.name,students.category_id,categories.id,categories.category from students,categories WHERE categories.id=students.category_id and students.id=$u_id" ;
   // echo  $rsql;
          $ccat = ($db->query($cat));
              $crow = []; 
    if ($ccat->num_rows > 0) 
    {

        // fetch all data from db into array 
        $crow = $ccat->fetch_all(MYSQLI_ASSOC);  


      if(!empty($crow))
               foreach($crow as $crows)
              {
                   $cat= $crows['category_id'];
                   $cname= $crows['name'];
                   // echo "$cat";

              } 

    } 



     $cut="SELECT * from cutoff where category_id=$cat" ;
   // echo  $rsql;
          $ccut = ($db->query($cut));
              $cutrow = []; 
    if ($ccut->num_rows > 0) 
    {

        // fetch all data from db into array 
        $cutrow = $ccut->fetch_all(MYSQLI_ASSOC);  


      if(!empty($cutrow))
               foreach($cutrow as $ccutrows)
              {
                   $cuut= $ccutrows['rank'];
                   // echo "$cuut";

 

  $sql = "select colleges.phone,colleges.address,colleges.name,course.course_name,rank.rank FROM categories,colleges,course,cutoff,rank,students WHERE colleges.course_id=rank.course_id and colleges.course_id=course.id and rank.student_id=students.id AND cutoff.college_email_id=colleges.email and cutoff.category_id=categories.id and rank.course_id=course.id AND cutoff.rank>$rnk AND rank.course_id=$cour group by colleges.email ";
  // echo "$sql";
      $result = ($db->query($sql));
    //declare array to store the data of database
    $row = []; 
    if ($result->num_rows > 0) 
    {

        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  

    }   
             } 

    } 
    ?>






<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

.container-fluid{
   margin-top: 20px;
    margin-left: 5%;
    margin-right:5%;
    width: 90%;
}

tr:hover {background-color: #D6EEEE;}
</style>
</head>
<body>
<br>

  <div class="container-fluid border border-dark rounded">
<h2 class="text-center">Predicted Results</h2>
<hr>
<h5>Student Details</h5>
<b><h6>Name : <?php echo "$cname"; ?></h6>
<h6>Rank  : <?php echo "$rnk"; ?></h6></b>

<hr>
<table class="table table-bordered table-condensed table-hover">

                <?php
               if(empty($row))
{
 ?>
<h4 class="text-center">Oops!! No Colleges Available</h4>
 <?php
}
else{
?>
    <tr>
         <th>#</th>

    <th>Name</th>
    <th>Course</th>
    <th>Phone</th>
        <th>Address</th>



  </tr>

  <tbody>
    <?php
               foreach($row as $rows)
              { 
            ?>
  <tr>
            <td><?php echo $i++ ?></td>

    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['course_name']; ?></td>
    <td><?php echo $rows['phone']; ?></td>
        <td><?php echo $rows['address']; ?></td>




  </tr>

    <?php
            }  }  ?>
  </tbody>
</table>
</div>

</body>
</html>

