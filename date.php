<!DOCTYPE html>
<html>
<head>
<style>
  .one input[type=submit]:hover{
	  background:dodgerblue;
  }
</style>
</head>
<body>
<form class ="one" action="" method="POST">
<input type="date" name="d"/></br>
<input type="submit" name="submit"/>
</form>
<?php
    $con = new mysqli('localhost','root','','donordetails');//object create statement
    $pre_date= $_POST['d'];//get user date
	$pre = strtotime($_POST['d']);//convert date into string
	$current_date =date("y-m-d");//current date
	$current = strtotime(date("y-m-d"));//convert date into string
	$diff = abs($current-$pre);//difference between two dates
	$day = floor($diff/(24*60*60));//calculation of days
$sql = "INSERT INTO donorinfo (donation_date, CURRENT_da, days)
VALUES ('$pre_date', '$current_date', '$day')";//data insertion into donordetails database
mysqli_query($con,$sql);
	if($day>90)
		echo "available";
	else
		echo "not available";
	///echo $month;
?>

</body>
</html>