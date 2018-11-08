<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
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
	border-radius:10px;
	outline-style:dotted;
	outline-color:pink;
	border-style:groove;
	outline-offset: 10px;
	
}
</style>
</head>
<body
<div class="two">
<img src="images.png" height="100" alt="not found"/>
</div>
<div class="nav">

<a href="#">Home</a>
<a href="#">Photo Gallery</a>
<a href="#">About</a>
<a href="#">Contact</a>
<div>
<form class="search">
  <button>login</button>
  <input type="text" placeholder="search....."/>
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
  <td><a href="omg.php" target="_blank"><button>Blood</button></a></td>
  <td><button>Doctor</button></td>
  <td><button>Blood Bag</button></td>
  <td><button>Hospital</button></td>
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
  <td><button>Man</button></td>
  <td><button>Money</button></td>
  <td><button>Transport</button></td>
  <td><button>Nurse</button></td>
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
  <td><button>Organization</button></td>
  <td><button>Patient</button></td>
  <td><button>Person</button></td>
  <td><button>Reception</button></td>
  </tr>
  </br>
</br>
   <tr>
  <td><img src="report.png" alt="report" height="50%" width="10%" hspace="20"/></td>

  </tr>
    <td><button>Report</button></td>
	
</table>


</div>
</body>
</html>