<!DOCTYPE html>
<html lang="en">
		
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap Imports -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		<!-- Repo.js import -->
		<script src="./js/repo.min.js"></script>

		<!-- CSS Imports -->
		<link rel="stylesheet" href="./css/index.css">


		<title> Emile Antognetti </title>
	<head>

	<body data-spy="scroll" data-target=".navbar" data-offset="80">
		<!-- Using a bootstrap navbar -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    	        <span class="icon-bar"></span>
	    	        <span class="icon-bar"></span>
	    	        <span class="icon-bar"></span>                        
		    	</button>
		      	<a class="navbar-brand" href="#">Emile Antognetti</a>
		    </div>
		     <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#Prof">Profile</a></li>
			      <li><a href="#Qual">My Qualifications</a></li>
			      <li><a href="#Repo">Repositories</a></li>
			      <li><a href="#Tech">Technologies</a></li>
			    </ul>
			</div>
		  </div>
		</nav>

		<!-- Profile Section: Short description  -->
		<div id="Prof" class="container-fluid Profile text-center">
			<img src="https://goo.gl/bMdZko" class="img-circle" alt="me">
			<h3> My name is Emile Amedeo Antognetti.</h3>
			<h3> I'm a software developer and recent graduate of RMIT University </h3>
		</div>

		<!-- Qualificatoins Section: Display of current certifications -->
		<div id="Qual" class="container-fluid MyQual">
			<h1>My Qualifications</h1>
			<div class="container">
				<!-- Bootstrap Carousel -->
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

			      <div class="item active">
			        <img src="./assets/Degree.png" alt="Degree" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="./assets/ATAR.png" alt="Atar" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="./assets/Cert II.png" alt="Cert II" style="width:100%;">
			      </div>
			  
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>
		</div>

		<div id="Repo" class="container-fluid Repo text-center">
			<h1>Repositories</h1>
			<div class="github-card" data-github="Eslarian/About_Me" data-width="325" data-height="299" data-theme="medium" data-target="blank"></div>
			<div class="github-card" data-github="Eslarian/AAA1" data-width="325" data-height="" data-theme="medium" data-target="blank"></div>
			<div class="github-card" data-github="Eslarian/ETS-Assignement" data-width="325" data-height="" data-theme="medium" data-target="blank"></div>
			<div class="github-card" data-github="Eslarian/File_Renamer" data-width="325" data-height="" data-theme="medium" data-target="blank"></div>
			<div class="github-card" data-github="Eslarian/Cpp_Ass1" data-width="325" data-height="299" data-theme="medium" data-target="blank"></div>
			
			<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>

		</div>

		<div id="Tech" class="container-fluid Technologies">
			<h1>Technologies I Enjoy Using</h1>
		</div>


	</body>


</html>