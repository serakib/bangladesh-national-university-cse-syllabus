<?php
//Total semester in CSE
$semes = array( 
    "First" => array ('First','Second'),
    "Second" => array ('First','Second'),
    "Third" => array ('First','Second'),
    "Fourth" => array ('First','Second')
);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - CSE syllabus</title>
	<link href="../assets/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/menu.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/responsive.css">
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div id='cssmenu'>
	<ul>
	   <li><a href='index.php'><span>Home</span></a></li>
	   <li class='has-sub'><a href='#'><span>Ebook</span></a>
			<ul>
				<?php
					$i=1;
					foreach($semes as $k=>$val){
	         			echo '<li class="has-sub"><a href="#"><span>'.$k.' Year</span></a><ul>';
	               		foreach($val as $j){echo '<li><a href="#" class="book" data="'.$i.'"><span>'.$j.' Semester</span></a></li>'; $i++;}
	            	echo '</ul></li>';	
					} 
				?>
	        </ul>
	   </li>
	   	<li class='has-sub'><a href='#'><span>Resource</span></a>
			<ul>
				<?php
					$i=1;
					foreach($semes as $k=>$val){
	         			echo '<li class="has-sub"><a href="#"><span>'.$k.' Year</span></a><ul>';
	               		foreach($val as $j){echo '<li><a href="#" class="res" data="'.$i.'"><span>'.$j.' Semester</span></a></li>'; $i++;}
	            	echo '</ul></li>';	
					} 
				?>
	        </ul>
	   </li>
	   <li><a href='insert.php'><span>Course Details</span></a></li>
	   <li><a href='logout.php'><span>Logout</span></a></li>
	</ul>
	</div>
	<div class="container" id="main-container">
		<div class="row">
			<section id="main">	

	