<?php

$db =new  mysqli("localhost","root","","student");
if(mysqli_connect_errno())
{
	echo "connection not successful";
	exit();
}
else
{
	echo "connection successful";
}
?>