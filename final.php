<!DOCTYPE HTML>

<?php

	$user = 'root';
	$pass = "";
	$database = "task";
	$host = 'localhost';
	
	$con = mysqli_connect($host , $user , $pass , $database);
	
	$query="SELECT * FROM internships";
	
	$records=mysqli_query($con , $query);
	
	$query2 = "SELECT * FROM test";
	
	$records2 = mysqli_query($con , $query2);
	
	$query3 = "SELECT * FROM blog";
	
	$records3 = mysqli_query($con , $query3);
	
?>
	
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

* {
    box-sizing: border-box;
}

.col-1 {

width:40%;
float:left;
padding-left:100px;
}

.col-3 {

width:60%;
float: right;
padding-left:50px;
padding-bottom:6px;
}

.dropdown {
    float: left;
    overflow: hidden;
	padding-top: 30px;
}

.dropdown .dropbtn {
    font-size: 12px;    
    border: none;
    outline: none;
    color: #696969;
    padding: 14px 16px;
    background-color: inherit;
    font-family: arial;
    margin: 0;
}

.dropbtn:hover {
background-color:#7e7e7e;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #dbdbdb;
	color: black;
	}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #dbdbdb;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #d3d3d3;
}

.dropdown:hover .dropdown-content {
    display: block;
}

input[type=button] {
    font-size:10;
    background-color: #6495ed;
    color: white;
    height:30px;
	width:100px;
    border: none;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #104e8b;
}

.button1 {
    font-size:10;
    background-color: #6495ed;
    color: white;
    height:30px;
	width:100px;
    border: none;
    cursor: pointer;
}

.button1:hover {
    background-color: #104e8b;
	cursor: pointer;
}

td {
color:#696969;
}

</style>
</head>
<body bgcolor="#f6f6f6">
	<div class="row">
	   <div class="col-1">
	   <a href=""><img src="Internshala-logo.png" alter="logo"></a>
	   </div>
	   <div class="col-3">
		<div class="dropdown">
			<button class="dropbtn">INTERNSHIPS 
			 <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<table cellpadding="3" cellspacing="10">
				<tr>
				<td><b>Location</b></td>
				<td><b>Profile</b></td>
				<td><b>Category</b></td>
				</tr>
				
				<?php 
				
				while($row = mysqli_fetch_assoc($records))
				{
				echo "<tr>";
				
				echo "<td>".$row['LOCATION']."</td>";
				echo "<td>".$row['PROFILE']."</td>";
				echo "<td>".$row['CATEGORY']."</td>";
				
				echo "</tr>";
				}
				
				?>
				
				</table>
			</div>
		</div> 
  
		<div class="dropdown">
			<button class="dropbtn">ONLINE WINTER TRAININGS 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <table cellpadding="3" cellspacing="10">
				<tr>
				<td><b>Programming</b></td>
				<td><b>Core Engineering</b></td>
				<td><b>Management</b></td>
				</tr>
				
				<?php 
				
				while($row2 = mysqli_fetch_assoc($records2))
				{
				echo "<tr>";
				
				echo "<td>".$row2['Programming']."</td>";
				echo "<td>".$row2['CoreEngineering']."</td>";
				echo "<td>".$row2['Management']."</td>";
				
				echo "</tr>";
				}
				
				?>
				
				</table>
			</div>
		</div> 
  
		<div class="dropdown">
			<button class="dropbtn">BLOG
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <table cellpadding="3" cellspacing="10">
				
				<?php 
				
				while($row3 = mysqli_fetch_assoc($records3))
				{
				echo "<tr>";
				
				echo "<td>".$row3['BLOG']."</td>";
				
				echo "</tr>";
				}
				
				?>
				
				</table>
			</div>
		</div> 
		
		<div class="dropdown" style="padding-top:35px;padding-left:20px">
		<input type="button" name="login" value="LOG IN">
		</div>
		
		<div class="dropdown" style="padding-top:35px;padding-left:20px">
			<button class="button1">REGISTER
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<ul>
			  <li>New Student - <a href="">REGISTER</a></li>
			  <li>New Company - <a href="">Hire Interns</a></li>
			</ul>
			</div>
		
		</div>
		</div>
		
	
	   </div>
    </div>


</body>
</html>