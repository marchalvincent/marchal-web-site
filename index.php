<!DOCTYPE html>
<html lang="fr">
	
	<head>
		<meta charset="utf-8">
		<title>Vincent Marchal - Site web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Site web">
		<meta name="author" content="Vincent Marchal">
	
		<!-- Le styles -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/perso.css" rel="stylesheet">
	
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="./ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
		<div class="container">
			<!-- Barre top -->
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
					<a class="brand" href="index.php">Vincent Marchal</a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active"><a href="index.php"><i class="icon-home icon-white"></i>Accueil</a></li>
								<li><a href="CV-Vincent-MARCHAL.pdf">CV</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /Barre top -->
			
			<!-- content -->
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span1"></div>
					<div class="span10 hero-unit">
						<h2>Bonjour !</h2>
						<p>
							<?php
								$secondesNaissance = mktime(15, 15, 0, 12, 11, 1991);
								$secondes = time();
								
								$diff = $secondes - $secondesNaissance;
								$diff = $diff / 31536000;
								$diff = floor($diff);
							?>
							Je suis Vincent Marchal, d&eacute;veloppeur et &eacute;tudiant dans le domaine de l'informatique &agrave; l'universit&eacute; de Pierre et Marie Curie.
							&Agrave; <?php echo $diff; ?> ans, je cherche constamment &agrave; &eacute;largir mes comp&eacute;tences techniques tout en d&eacute;butant sur le monde du travail.
						</p>
					</div>
					<div class="span1"></div>
				</div>
				
				<div class="row-fluid">
				<div class="span6">
					<?php include 'include/formation.html'; ?>
				</div>
				<div class="span6 hero-unit">
					<?php include 'include/competences.html'; ?>
				</div>
				</div>
				
				<div class="row-fluid">
					<div class="span6 hero-unit">
						<h3>Mon exp&eacute;rience</h3>
						prochainement...
					</div>
					<div class="span6 hero-unit">
						<h3>Mes hobbies</h3>
						prochainement...
					</div>
				</div>
			</div>
			
			<footer class="footer">
	        <p class="pull-right"><a href="#">Haut de page</a></p>
	        <p>Pour me contacter : marchal.vin [at] gmail.com</p>
	        <p>Ce site a &eacute;t&eacute; cod&eacute; par moi m&ecirc;me &agrave; l'aide de l'outil <a target="_BLANK" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
	        <p></p>
	      </footer>
			<!-- /content -->
	
			<!-- Le javascript a la fin pour charger plus vite -->
			<script src="./js/jQuery.min.js"></script>
			<script src="./js/bootstrap.min.js"></script>
			<script src="./js/perso.js"></script>
		</div>
	</body>
</html>