<?php
$con = mysqli_connect("localhost", "root", "", "testing"); 
$query = "select * from tbl_sample";
if(isset($_GET['SearchBtn']))


{
	$searchBy = $_GET['SearchList'];
	$searchText = $_GET['search'];

	if($searchBy == "id")
	{
    
    $query = "select * from tbl_sample where id= '$searchText'";


   }
   else if($searchBy == "first_name")
	{
    
    $query = "select * from tbl_sample where first_name = '$searchText'";


   }

   else if($searchBy == "last_name")
	{
    
    $query = "select * from tbl_sample where last_name = '$searchText'";


   }
   else if($searchBy == "gender")
	{
    
    $query = "select * from tbl_sample where gender = '$searchText'";


   }
   else{

   	   echo "<script>alert('Please Select Any Field'); </script>";
   }


  }
$rows = mysqli_query($con,$query);
$totalrows = mysqli_num_rows($rows);

//$data = mysqli_fetch_assoc($rows);



/*if($totalrows !=0)
{
	echo "Rows Found !";
}else{

	echo "No Rows Found";
}*/
if($totalrows != 0)
{





?>



<div class="container">
     <br>
     
     <br>
     <?php
     if(isset($_REQUEST['msg'])){
	print"<div style='color:#f00'>$_REQUEST[msg]</div>";
}
    

     ?>
	<div class="row">
		 <div class="col-md-6-offset-3">

		 	<form action="" method="get">

		 		<label for="" class="btn btn-primary">SEARCH BY:</label>
		 		<select name="SearchList">
		 			<option value="Select">select</option>
		 			<option value="id">Id</option>
		 			<option value="first_name">First Name</option>
		 			<option value="last_name">Last Name</option>
		 			<option value="gender">Gender</option>
		 		</select>
		 		<input type="text" name="search" required>
		 		<input type="submit" value="Search" name="SearchBtn">
		 		<label class=" btn btn-danger"><a href="view.php" style="text-decoration:none ">Reset</a></label>
       


		 	</form>


	</div>

</div>

<table border="1" align="center" style="text-align:center; border-collapse:collapse;width:70%;text-transform: uppercase;font-family: verdana;border-color:blue;margin-top:200px;  ">



	<tr>
    <th>ID</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
    <th>GENDER</th>

    <th>EDIT</th>
    <th>DELETE</th>


	</tr>



	<?php
	while($data = mysqli_fetch_assoc($rows))

	{

		echo "
         <td>".$data['id']."</td>
        <td>".$data['first_name']."</td>
        <td>".$data['last_name']."</td>
        <td>".$data['gender']."</td>
        <td><a href='update.php?id=$data[id]'>Edit</a></td>
        <td><a href='delete.php?id=$data[id]'>Delete</a> </td>
        
		<tr>";



   }

		
	}

else{
      
	header("location:view.php?msg=THERE IS NO RECORD!");
}



	?>


</table>




<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<style type="text/css">


	body{


	}
		
		th{
			background-color:red; 
			color:white;
		}

		a{ 
			text-decoration:none;

		 }
	</style>

	<title></title>
</head>
<body>
 
 <a href="index.php" style="text-decoration:none;"><h2 style="text-align:center;color: green;background-color:orange;position:absolute;top:100px;left:550px;width: 300px;   ">ADD MORE </h2> </a>





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>