<?php
//Database connection file
session_start();
include('../includes/connect.php');
 

?>

<?php


error_reporting(0);

   $sql = "SELECT * FROM `type`";
    $all_types = mysqli_query($db,$sql);

          $sql = "SELECT * FROM `meterials`";
    $all_meterials = mysqli_query($db,$sql);


    ?>
<?php
include('header.php');
?>

<html>
	<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
	<div class="container">
<!-- 	<h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2><br />
 -->	<div class="form-group">
<form name="add_name" id="add_name" method="post" action="generate_process.php">
	<h2>Add Questions</h2></br>
<div class="table-responsive">
	  
                <input type="hidden" name="id" value="<?php echo($_SESSION["id"]); ?>">

<table class="table table-bordered" id="dynamic_field">






<td >
<input type="text" name="qno[]" placeholder="Question No" class="form-control name_list" />
</td>	
<td class="col-6"><input type="text" name="question[]" placeholder="Enter Question" class="form-control name_list" /></td>
<td >	
<input type="text" name="mark[]" placeholder="Mark" class="form-control name_list" />
</td>	<td class="">
	
    <input type="text" name="co[]" placeholder="CO" class="form-control name_list" />
    </td>	
    <td class="">
	
<input type="text" name="rbt[]" placeholder="RBT" class="form-control name_list" />
</td>	

<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
</tr>

</table>
<!-- <td><input type="text" name="address" placeholder="Enter Address" class="form-control form-control name_list" /></td> -->
<!-- <br> -->

<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
</div>
				</form>
			</div>
		</div>
	</body>
<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
	i++;
	$('#dynamic_field').append('<tr id="row'+i+'"><td ><input type="text" name="qno[]" placeholder="Question No" class="form-control name_list" /></td><td><input type="text" name="question[]" placeholder="Enter Question" class="form-control name_list" /></td><td >	<input type="text" name="marks[]" placeholder="Enter Mark" class="form-control name_list" /></td><td class=""><input type="text" name="co[]" placeholder="Enter CO" class="form-control name_list" /></td>	<td class=""><input type="text" name="rbt[]" placeholder="Enter RBT" class="form-control name_list" /></td>	<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td></tr>');
	});
	
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
});
</script>
</html>