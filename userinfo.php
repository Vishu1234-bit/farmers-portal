<?php
$con = mysqli_connect("localhost","root","visa2000","farmersportal");

if($con){
	echo "connection successful";
}else{
	echo "No connection";
}
mysqli_select_db($con,'farmersportal');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$selected_radio = $_POST['buyerseller'];
if ($selected_radio == 'buyer') {
	$buyerseller=0;
}
else if ($selected_radio == 'seller') {
	$buyerseller=1;
}

$query="insert into userinfodata(user ,email ,mobile ,password ,buyerseller)
values('$user','$email','$mobile','$password','$buyerseller')";

echo $query;

mysqli_query($con, $query);

header('location:index.php');



?>