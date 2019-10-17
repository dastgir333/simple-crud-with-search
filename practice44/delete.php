
<?php
$con = mysqli_connect("localhost", "root", "", "testing"); 

$id = $_REQUEST['id'];

$sql = "delete from `tbl_sample` where `id`='$id'";
$res = mysqli_query($con, $sql) or die("error");
header("location:view.php?msg=record delted !");