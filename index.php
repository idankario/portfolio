<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Idan Kario Portfolio Webpage computer software engineering</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/software.png">
</head>
<?php
	include 'php/connection.php';
?>
<body>
  	<!-- nav -->
	<nav id="navbar1" class="p-4 navbar navbar-expand-md fixed-top">
		<span class="navbar-brand">IDAN KARIO</span>
		<ul class="nav navbar-nav ">
			<li class="nav-item"><a class="nav-link" id="active1" href="#Home">HOME</a></li>
			<li class="nav-item"><a class="nav-link" id="active2" href="#Portfolio">MY WORKS</a></li>
			<li class="nav-item"><a class="nav-link" id="active3" href="#Contact">CONTACT</a></li>
		</ul>
	</nav>
	<!-- Home Page -->
	<section id="Home" class="background-common flex-row flex-wrap" >
		<aside class="mb-5">
			<img src="images/me.jpg" title="idan kario computer software engineering" alt="idan kario computer software engineering">
		</aside>
		<article class="text-center flex-column align-items-center"> 
			<h1>Idan Kario a developer</h1>
			<p >
				I'm a  based in Tel Aviv, Israel.<br>
				A serious person, seeking to improve the teams' effectiveness at work.
				Spend extra time and effort to make the work to be more effectively and fast.
				A team player who want to improve the team motivation for our succeed.
			</p> <br>		
			<em class="p-5">Languages and Frameworks:
				Javascript(ES6), HTML5, Ajax, mysql, java, c, c++
			</em>
			<button type="button" class="btn btn-primary w-25" onclick="window.open('files/MyResume.pdf')">My Resume</button>
		</article>
	</section>
	<!-- Portfolio Page -->
	<div id="Portfolio" class="background-common">	
		<h2 class="text-center">My recent work</h2>
		<hr>
		<div class="row">
			<?php
			foreach ($Software_engineering_works as $key => $row) {
				echo'<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<a href="'.$row['href_link'].'" target="_blank">
							<figure class="imagebox">
								
								<div class="image-container-imagebox">
									<img class="image" src="images/mywork/'.$row['image'].'" alt="'.$row['name_work'].'" title="'.$row['name_work'].'">
								</div>
								
								<figcaption class="figure-caption text-center">			
									<h6><b>'.$row['name_work'].'</b></h6>
									<p>'.$row['lang_Program'].'</p>
								</figcaption>
							</figure>
						</a>
					</div>';
			}
			?>
		</div>
	</div>
	<!-- Contact Page -->
	<div id="Contact" class="background-common" >
		<h2 class="text-center">Get in touch</h2>
		<hr>
		<section>
			<form action="mailto:idankario@gmail.com" enctype="text/plain" method="post" class="form">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="firstname" placeholder="Name">
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control" name="email" placeholder="Email Address">
				</div>
				<div class="form-group">
					<label>Phone Number</label>	  
					<input type="number" class="form-control" name="phone number" placeholder="Phone Number">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control" name="message" rows="2" placeholder="Enter your message"></textarea>
				</div>
				<button type="submit" class="btn btn-primary "><i class="fa fa-paper-plane fa-lg"></i></button>
			</form>
			<aside id="hide" >
				<p>Want to get in touch with me? Got a project you would like me to work on? Be it to request more info about myself or my experience, just feel free to drop me a line anytime.</p>
			</aside>
		</section>
	</div>
	<footer>
		<section class="flex-row flex-wrap">
			<article>
				<h5 class="rtl">תואר ראשון <br>בהנדסת תוכנה בשנקר</h5>
				<a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" class="shenkar"></a>
			</article>
			<h5>FOLLOW ME :</h5>
			<p>
				<a href="https://www.linkedin.com/in/idan-kario-47074a11a/" target="_blank"><i class="fab fa-linkedin"></i></a>
				<a href="https://github.com/idankario" target="_blank"><i class="fab fa-github ml-2"></i></a>
				<a href="https://www.facebook.com/idan.kario" target="_blank"><i class="fab fa-facebook"></i></a>
			</p>
			<h6>E-mail: idankario@gmail.com</h6>			
		</section>
		<section></section>
		<p class="p-3 text-center">Handmade by Idan Kario Copyright &copy; 2021</p>
	</footer>	
	<a href="#" id="back-to-top"><i class="fas fa-angle-up"></i></a>
	<!-- partial -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script  src="js/EfectAndOpenFiles.js"></script>
</body>
</html>
