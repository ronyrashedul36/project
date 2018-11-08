<!DOCTYPE html>
<html>
<head>
<title>hospital</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
	background-color: #f1f1c1;
	margin-left:25%;
	position:relative;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tr:hover {background-color: red;}
table th {
    background-color: black;
    color: white;
}
body{
	
	margin:100px;
}
.center{
	
	margin-left: 50px;
    width: 80%;
	height:70%;
    border: 3px solid #73AD21;
    padding: 10px;
	background-color:#8FBC8F;
	position:absolute;
	float:center;
	outline-style:dotted;
}
</style>

</head>
<body style="text-align:center">
<div></div>
<div class="center">
<?php
$conn = new mysqli("localhost","root","","blood_management_system");
$sql = "select* from hospitaldetails";
$result = $conn->query($sql);

echo "<p><h2>Hospital Information</h2></p>";
if ($result->num_rows > 0) {
    echo "<table><tr><th>Hospital_id</th><th>Contact_No</th><th>Address</th><th>Hospital_name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Hospital_id"]. "</td><td>". $row["Contact_No"]. "</td><td>". $row["Address"]."</td><td>".$row["Hospital_name"]."</td></tr>";
    }
    echo "</table>";
} 
?>
</div>
</body>
</html>