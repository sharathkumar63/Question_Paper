
<?php

include('header.php');
?>

<?php
//datbase connection file
include('../includes/connect.php');
error_reporting(0);
                 $i = 1;

  $sql = "select * from qstn ";
    $result = ($db->query($sql));
    //declare array to store the data of database
    $row = []; 
    if ($result->num_rows > 0) 
    {

        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  

    }   

    ?>

<!DOCTYPE html>
<html>
<head>

      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

tr:hover {background-color: #D6EEEE;}
</style>
</head>
<body>
 <br>
  <div class="container">
<div class="row">
<h2 class="col-2">QestionPaper</h2>
<!-- <a href="addcolleges.php"><button class="btn btn-warning">Add New</button></a>  -->
</div>
<table class="border ">
  <tr>
    <th>Number</th>
    <th>Qstn</th>
    <th>Mark</th>
    <th>Co</th>
     <th>RBT</th>
          <!-- <th>Fees</th>

          <th>Description</th> -->

    <!-- <th>Action</th> -->
  </tr>

  <tbody>
                <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
  <tr>
    <!-- <td><?php echo $i++ ?></td> -->
    <td><?php echo $rows['no']; ?></td>
    <td><?php echo $rows['question']; ?></td>
    <td><?php echo $rows['mark']; ?></td>
       <td><?php echo $rows['co']; ?></td>
              <td><?php echo $rows['rbt']; ?></td>


       <!-- <td><a class="btn btn-warning" href="editcollege.php?id=<?= $rows['email']?>" >Edit</a></td> -->
  </tr>

    <?php
            } ?>
  </tbody>
</table>
<br>
<input type="button" class="btn btn-primary" value="Print" onclick="printPage();"></input>

</div>


</body>

  <script language="javascript">
    function printPage() {
        window.print();
    }
</script>
  
</html>

