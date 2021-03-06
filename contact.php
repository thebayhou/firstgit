<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="description" content="hotel targante biougra chtouka ait baha" />
	<meta name="keywords" content="hotel, biougra, targante" />
	<meta name="author" content="Targante" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">          
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="load">
	</div>
	<div id="fullpage">
	<!-- navbar -->
	<div class="navbar-fixed wow fadeInDownBig">
	<div class="navbar-fixed">
		<nav>
			<div class="container nav-wrapper">
			  <a href="#!" class="brand-logo">
			  	<img src="imgs/logo.png" alt="hotel targante logo">
			  </a>
			  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			  <ul class="right hide-on-med-and-down">
			    <li><a href="index.html">accueil</a></li>
			    <li><a href="cafe.html">café</a></li>
			    <li><a href="restaurant.html">restaurant</a></li>
			    <li><a href="hotel.html">hotel</a></li>
			    <li><a href="salle.html">salle</a></li>
			    <li class="active"><a class="active" href="contact.php">Contact</a></li>
			  </ul>
			  <ul class="side-nav" id="mobile-demo">
			    <li><a href="index.html">accueil</a></li>
			    <li><a href="cafe.html">café</a></li>
			    <li><a href="restaurant.html">restaurant</a></li>
			    <li><a href="hotel.html">hotel</a></li>
			    <li><a href="salle.html">salle</a></li>
			    <li class="active"><a class="active" href="contact.php">Contact</a></li>
			  </ul>
			</div>
		</nav>
	</div><!-- /end navbar -->
	<!-- First Title -->
	<div class="p_contact f_title">
		<div class="bg_title">
			<div class="container">
				<h1>Contactez <span>Nous</span></h1>
			</div>
		</div>
	</div><!-- /end First Title -->
	<!-- Content -->
	<div class="container">
		<h1 class="wow bounceInDown">Contactez <span>Nous</span></h1>
		<img class="stars wow bounceInDown" src="imgs/stars.png" alt="stars">
		<p class="h_text center wow flipInX">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</p>
		<div class="row">
			<?php
				$va_email="";
				if(isset($_POST['submit']) && isset($nom) && isset($email) && isset($message)){
					$nom=$_POST['nom'];
					$email=$_POST['email'];
					$message=$_POST['message'];
					$to = "nabaoui.abderrahim@gmail.com"; 
					$subject = "$nom";
					$body = "$message"; 
					$headers = "From: $email\n"; 
					$headers .= "Reply-To: $to";
					mail($to,$subject,$body,$headers);
					$va_email= "<span class='valid'>Votre email est bien envoyé</span>";
				}
			 ?>
		    <form action="" method="post" class="col s12">
				<?php echo $va_email; ?>
		      <div class="row">
		        <div class="input-field col m6 s12 wow bounceInLeft">
		          <i class="material-icons prefix">account_circle</i>
		          <input name="nom" id="nom" type="text" class="validate" required>
		          <label for="nom">Nom Complet</label>
		        </div>
		        <div class="input-field col m6 s12 wow bounceInRight">
		          <i class="material-icons prefix">email</i>
		          <input name="email" id="email" type="email" class="validate" required>
		          <label for="email">Email</label>
		        </div>
		        <div class="input-field col s12 wow bounceInUp">
		          <i class="material-icons prefix">mode_edit</i>
		          <textarea name="message" id="icon_prefix2" class="materialize-textarea" required></textarea>
		          <label for="icon_prefix2">Message</label>
		        </div>
		      </div>
		      <button class="btn-large waves-effect waves-light yellow  wow flipInX" type="submit" name="submit">Envoyer
			    <i class="material-icons right">send</i>
			  </button>
		    </form>
		</div>
		<iframe src="http://mapbuildr.com/frame/zwxd77" frameborder="0" height="400" width="600"></iframe>
	</div>
	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col l4 m6 s12 wow flipInX">
					<img class="targante_logo" src="imgs/logo.png" alt="logo hotel targante biougra">
					<p>
						L'Hôtel targante est un hôtel trois  étoiles qui ce trouve a km 1 route ait baha biougra ,  qui offre des équipements modernes pour assurer le maximum de confort aux clients.
					</p>
					<div class="s_network">
						  <a href="https://www.facebook.com/H%C3%B4tel-Targante-officiel-828304383886784" target="_blank" class="btn-floating btn waves-effect waves-light white">
						  	<img src="imgs/fb.png" alt="facebook icon">
						  </a>
						  <a class="btn-floating btn waves-effect waves-light white">
						  	<img src="imgs/twitter.png" alt="twitter icon">
						  </a>
						  <a class="btn-floating btn waves-effect waves-light white">
						  	<img src="imgs/google.png" alt="google icon">
						  </a>
						  <a class="btn-floating btn waves-effect waves-light white">
						  	<img src="imgs/youtube.png" alt="youtube icon">
						  </a>
					</div>
				</div>
				<div class="col l4 m6 s12 wow flipInX">
					<h2>Les Photo De Website</h2>
					<div class="row">
						<div class="col s4">
							<img class="materialboxed responsive-img" src="imgs/img1.jpg" alt="image de l'hotel targante biougra">
						</div>
						<div class="col s4">
							<img class="materialboxed responsive-img" class="materialboxed" src="imgs/img2.jpg" alt="image de l'hotel targante biougra">
						</div>
						<div class="col s4">
							<img class="materialboxed responsive-img" src="imgs/img3.jpg" alt="image de l'hotel targante biougra">
						</div>
						<div class="col s4">
							<img class="materialboxed responsive-img" src="imgs/img4.jpg" alt="image de l'hotel targante biougra">
						</div>
						<div class="col s4">
							<img class="materialboxed responsive-img" src="imgs/img5.jpg" alt="image de l'hotel targante biougra">
						</div>
						<div class="col s4">
							<img class="materialboxed responsive-img" src="imgs/img6.jpg" alt="image de l'hotel targante biougra">
						</div>
						<a href="hotel.html" class="waves-effect waves-light btn-large yellow f_btn">Autre Photo</a>
					</div>
				</div>
				<div class="col l4 m12 s12 wow flipInX">
					<h2>Hotel Targante Biougra</h2>
					<div class="info">
						<img src="imgs/adresse.png">
						<span>Adresse</span>
						<span>:</span>
						<span>Route Ait Baha, Biougra</span>
					</div>
					<div class="info">
						<img src="imgs/phone.png">
						<span>Telephone</span>
						<span>:</span>
						<span>+212 6610-65005</span>
					</div>
					<div class="info">
						<img src="imgs/fix.png">
						<span>Fix</span>
						<span>:</span>
						<span>+212 5288-10127</span>
					</div>
					<div class="info">
						<img src="imgs/email.png">
						<span>Email</span>
						<span>:</span>
						<span>hotel.targante9@gmail.com</span>
					</div>
					<a href="contact.php" class="waves-effect waves-light btn-large yellow f_btn">Contactez Nous</a>
				</div>
			</div>
		</div>
		<div class="copy_right">
			<div class="container">
				<div class="row">
					<div class="col m7 s12">
						<span>Tous droits réservés © 2016 Hotel TARGANTE</span>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- /end Footer -->
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>