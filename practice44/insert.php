<?php
$con = mysqli_connect("localhost", "root", "", "testing"); 
 
 if(isset($_POST['submitBtn'])){

 	$first_name = $_POST['first_name'];
 	$last_name = $_POST['last_name'];
 	$gender = $_POST['gender'];
 	$query = "insert into tbl_sample (first_name,last_name, gender) values('$first_name','$last_name','$gender')";

 	$run = mysqli_query($con,$query);

 	if($run){
     echo "inserted";

     echo "<br>";

     header("location:view.php");

 	}
 	else{

 		echo "not inserted";

 	}

 }
 {

 }



?>