<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System wikipedia</title>
<style>
.body{
 margin:0;
 padding:0;
 font-family:arial;
}
.nav{
  background:gray;
  width:100%;
  height:49px;
}
.nav a{
  float:left;
  text-decoration:none;
  padding:14px 26px;
  color:white;
  font-size:17px;
  transition:0.6s all;
}
.nav a:hover{
 background:dodgerblue;
}
.nav .search{
 float:right;
}
.nav input[type=text]{
  padding:6px;
  margin-top:10px;
  border:none;
  border-radius:10px;
  font-size:17px;
 
}
.nav button{
 border-radius:10px;
 background:#ddd;
 color:black;
  padding:6px;
  margin-top:8px;
   font-size:17px;
   cursor:pointer;
   margin-right:15px;
   border:none;
   transition:0.6s all;
}
.nav button:hover{
 background:dodgerblue;
 color:#fff;
}
.two{
background:tomato;
margin-left:0px;
text-align:left;
}
img{
	width:100px;
	height:90px;
}
table{
	width:100%;
	
}
table button{
	float:center;
	margin:10px;
	padding:7px;
	border:none;
	transition:0.6s;
}
table button:hover{
	background:dodgerblue;
	
}

table button
{
	
    border-radius:12px;
	
}

body{
	background:#B22222;
	text-align:center;
}
table td{
text-align:center;

}
table td img{
	border-radius:20px;
	outline-style:dotted;
	outline-color:pink;
	border-style:groove;
	outline-offset: 10px;
	
}
.designer{
	margin:40px;
}
</style>

</head>

<body

<div class="two">
<img src="images.png" height="100" alt="not found"/>
</div>
<div class="nav">

<a href="#">Home</a>
<a href="imageslideshow.html" target="_blank">Photo Gallery</a>
<a href="about.html" target="_blank">About</a>
<a href="contact.html" target="_blank">Contact</a>
<a href="register.php" target="_blank">Social Media</a>
<div>
<form class="search" action="">
  
 <a href="register.php" target="_blank"><?php
 session_start();
 if(isset($_SESSION['username'])){
	 echo $_SESSION['username'];
 }
 else
	 echo "login";
 ?></a>

  <input type="text" placeholder="" value="search....." id="searchBar" autocomplete="off" onMouseDown="active();" onBlur="inactive();"/>
  
  <button>search</button>
</form>
</div>
</div>
<br>
<div class="one">
</div>
<table align="center">
  <tr>
  <td><img src="blood.jpg" alt="blood" height="50%" width="10%" hspace="20"/></td>
  <td><img src="doctor.jfif" alt="doctor" height="100%" width="10%" hspace="20"/></td>
   <td> <img src="download.jfif" alt="donwload" height="50%" width="10%" hspace="20"/></td>
  <td><img src="hospitals.jfif" alt="hospitals" height="100%" width="10%" hspace="20"/></td>
  </tr>
  <tr>
  <td><a href="blood.php" target="_blank"><button>Blood</button></a></td>
  <td><a href="doctor.php" target="_blank"><button>Doctor</button></td>
  <td><a href="blood_bag.php" target="_blank"><button>Blood Bag</button></td>
  <td><a href="hospital.php" target="_blank"><button>Hospital</button></td>
  </tr>
</br>
</br>
   <tr>
  <td><img src="man.jfif" alt="man" height="50%" width="10%" hspace="20"/></td>
  <td><img src="money.jfif" alt="money" height="100%" width="10%" hspace="20"/></td>
    <td><img src="transport.jfif" alt="transport" height="50%" width="10%" hspace="20"/></td>
  <td><img src="nurse.jfif" alt="nurse" height="100%" width="10%" hspace="20"/></td>
  </tr>
   <tr>
  <td><a href="man.php" target="_blank"><button>Manager</button></td>
  <td><a href="bill.php" target="_blank"><button>Money</button></td>
  <td><a href="transport.php" target="_blank"><button>Transport</button></td>
  <td><a href="nurse.php" target="_blank"><button>Nurse</button></td>
  </tr>
  </br>
</br>
   <tr>
  <td><img src="organization.jfif" alt="blood" height="50%" width="10%" hspace="20"/></td>
  <td><img src="patient.jfif" alt="patient" height="100%" width="10%" hspace="20"/></td>
    <td><img src="person.jfif" alt="person" height="50%" width="10%" hspace="20"/></td>
  <td><img src="reception.jfif" alt="reception" height="100%" width="10%" hspace="20"/></td>
  </tr>
   <tr>
  <td><a href="organization.php" target="_blank"><button>Organization</button></td>
  <td><a href="patient.php" target="_blank"><button>Patient</button></td>
  <td><a href="intermediate_person.php" target="_blank"><button>Intermediate Person</button></td>
  <td><a href="reception.php" target="_blank"><button>Reception</button></td>
  </tr>
  </br>
</br>
   <tr>
  <td><img src="report.png" alt="report" height="50%" width="10%" hspace="20"/></td>
  <td><img src="blood_bank.png" alt="blood_bank" height="50%" width="10%" hspace="20"/></td>
  <td><img src="donor.jpg" alt="donor" height="50%" width="10%" hspace="20"/></td>
  </tr>
    <td><a href="report.php" target="_blank"><button>Lab Report</button></td>
	<td><a href="blood_bank.php" target="_blank"><button>Blood Bank</button></td>
	 <td><a href="donor_details.php" target="_blank"><button>Donor</button></td>
</table>


</div>
<div class ="designer">
<h3>Designed by</h3>
<ul>
  <li><a href="rony.html" target="_blank">Md Rashedul Islam Rony</a></li>
  <li><a href="helal.html"target="_blank">Helal Hossen</a></li>
  <li><a href="sp.html"target="_blank">SP Rahul</a></li>
</ul>
</div>
</body>
</html>