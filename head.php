<?php 
// define('HOME', 'http://www.vincent-marchal.fr/');
define('HOME', 'http://localhost/marchal-web-site/');
?>
<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
		<title>Vincent Marchal - Site web</title>
		<link rel="icon" type="image/png" href="icon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Site web de Vincent Marchal" />
		<meta name="author" content="Vincent MARCHAL" />
		<meta name="keywords" lang="fr" content="d&eacute;veloppeur, informatique, web, php, java, site, cv, alternance, stage, vincent, marchal" />
		<meta name="robots" content="index, follow" />
		
		<link href="<?php echo HOME; ?>css/css.min.css" rel="stylesheet">
		<link href="<?php echo HOME; ?>css/perso.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php echo HOME; ?>"><strong>Vincent Marchal</strong></a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="<?php echo HOME; ?>">&nbsp;Accueil</a></li>
							<li><a href="<?php echo HOME; ?>CV-Vincent-MARCHAL.pdf">CV</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- menu -->
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span3 hero-unit" id="menuLien">
						<ul>
							<li onclick="location.href='<?php echo HOME; ?>'"><span class='bar'>&nbsp;</span>A propos de moi</li>
							<li onclick="location.href='<?php echo HOME; ?>formation'"><span class='bar'>&nbsp;</span>Formation</li>
							<li onclick="location.href='<?php echo HOME; ?>competences'"><span class='bar'>&nbsp;</span>Comp&eacute;tences</li>
							<li onclick="location.href='<?php echo HOME; ?>projets'"><span class='bar'>&nbsp;</span>Projets</li>
							<li onclick="location.href='<?php echo HOME; ?>experience'"><span class='bar'>&nbsp;</span>Experience</li>
							<li onclick="location.href='<?php echo HOME; ?>hobbies'"><span class='bar'>&nbsp;</span>Hobbies</li>
						</ul>
					</div>