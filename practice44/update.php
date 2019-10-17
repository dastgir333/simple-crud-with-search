



<?php

 
 $connect = mysqli_connect("localhost", "root", "", "testing"); 


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


$id = $_REQUEST['id'];
/*$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$gender = $_REQUEST['gender'];*/

$query = "select * from tbl_sample where id = '$id'";


$row = mysqli_query($connect,$query);
$data = mysqli_fetch_array($row);




?>

<form action="update.php" method="post">

	<input type="hidden" name="id" value="<?php echo $data[0];?>">
	
	<p><label>FIRSTNAME:</label><input type="text" name="first_name" value="<?php echo  $data[1];?>" required>
		<p><label>LASTNAME:</label><input type="text" name="last_name" value="<?php echo  $data[2];?>" required>
		GENDER:	<select name="gender">
				<option value="male" <?php echo ($data[3]=='male') ? 'selected="selected"' : '' ;?>>MALE</option>
				<option value="female" <?php echo ($data[3]=='famale') ? 'selected="selected"' : '' ;?>>FEMALE</option>


			</select>

			<input type="submit" value="update" name="updateBtn">


</form>



<?php

if(isset($_POST['updateBtn'])){

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];


$query ="update tbl_sample set first_name = '$first_name', last_name='$last_name', gender='$gender' where id = '$id'";

print_r($query) or die('there is not data'); 

 
 $run = mysqli_query($connect,$query);

 if($run){

    echo "<p style='color:green;background-color:black;width:300px;height:30px;'>data updated</p>";
     header("location:view.php");
 }else{


  echo "not updated";

 }

}





?>
</body>


</body>
</html>