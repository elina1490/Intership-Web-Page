<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Image Processing and Computer Vision Team </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="dropdown/mynew.css" />
		<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />	
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/coin-slider.min.js"></script>
		<script type="text/javascript" src="js/content.js"></script>
		<script src="js/stuHover.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-georgia.js"></script>

		
		
	</head>
	<body>
	<?php include("template/header.php"); ?>
	<span class="preload1"></span>
	<span class="preload2"></span>

<ul id="nav">
	<li class="top"><a href="index.php"  class="top_link"><span>Home</span></a></li>
	<li class="top"><a href="" id="teaching" class="top_link"><span class="down">Teaching</span></a>
		<ul class="sub">
			<li><a href="" class="fly">Undergraduate</a>
					<ul>
						<li><a href="C++.php">C++</a></li>
						<li><a href="pattern_recognition.php">Pat. Recognition & Apps in Robotics</a></li>
						<li><a href="computer_vision.php">Computer  Vision</a></li>
						
					</ul>
			</li>
			<li class="mid"><a href="" class="fly">Postgraduate</a>
					<ul>
						<li><a href="impcv.php">Img Processing & Computer Vision</a></li>
						<li><a href="research_development.php">Research & Development Project</a></li>						
				  </ul>
			</li>			
		</ul>
	</li>
	
	<li class="top"><a href="" id="students" class="top_link"><span class="down">People</span></a>
		<ul class="sub">
		
		    <li><a href="ekavallieratou.php" >Ergina Kavallieratou</a></li>
		    <li><a href="researchers.php">Researchers</a></li>
			<li><a href="phd.php">Ph.D Candidates</a></li>
			<li><a href="students.php">Students</a></li>				
		</ul>
	</li>
	
	<li class="top"><a href="" id="interestsandsearch" class="top_link"><span class="down">Research </span></a>
		<ul class="sub">
			<li><a href="publications.php">Publications</a></li>
            <li><a href="greekdb.php">Greek Character DataBase</a></li>			
			<li><a href="binarizasiondb.php">Binarization DataBase</a></li>			
		</ul>
		</li>	
		
	
	<li class="top"><a href="diploma_thesis.php"    class="top_link"><span>Thesis</span></a></li>	
    <li class="top"><a href=""   id ="events" class="top_link" ><span class="down">Events</span></a>
		<ul class="sub">
			<li><a href="idips.php">IDIPS Summer School</a></li>
			<li><a href="e-learning.php">e-Learning</a></li>
			<li><a href="aegeanrobotics.php">Aegean Robotic School</a></li>
			</ul>
			</li>
	
          
    	 	 
	<div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> 
		<a href="#"><img src="images/slide1.png" /> </a> 
		<a href="#"><img src="images/slide2.jpg" /> </a>
		<a href="#"><img src="images/slide3.png" /> </a>
		<a href="#"><img src="images/slide4.png" /> </a>
		
		
		</div>
        <div class="clr"></div>
      </div>
     
	    </div>
	<div id="container">
		<div id="left">
			<?php include("template/left.php"); ?>
		</div>     
		<div id="content">
			<?php include("docs/thesi.html"); ?>
		</div>
		<div class="clear"></div>
	<?php include("template/footer.php"); ?>
	</div>
	</body>
	</html>