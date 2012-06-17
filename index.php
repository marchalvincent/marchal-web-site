<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
		<title>Vincent Marchal - Site web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Bienvenu sur le WebCV de Vincent Marchal" />
		<meta name="author" content="Vincent MARCHAL" />
		<meta name="keywords" lang="fr" content="d&eacute;veloppeur, informatique, web, php, java, site, cv, alternance, stage, vincent, marchal" />
		<meta name="robots" content="index, follow" />
		
		<link href="./css/css.min.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Barre top -->
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
					<a class="brand" href="http://www.vincent-marchal.fr">Vincent Marchal</a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active"><a href="http://www.vincent-marchal.fr">&nbsp;Accueil</a></li>
								<li><a href="http://www.vincent-marchal.fr/CV-Vincent-MARCHAL.pdf">CV</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- content -->
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span1"></div>
					<div class="span10 hero-unit">
						<h2>Bienvenue sur ma page personnelle !</h2>
						<p></p>
						<p class="photo-perso"></p>
						<p class="intro">
							<?php
							$secondesNaissance = mktime(15, 15, 0, 12, 11, 1991);
							$secondes = time();
							
							$diff = $secondes - $secondesNaissance;
							$diff = $diff / 31536000;
							$diff = floor($diff);
							?>
							Je suis Vincent Marchal, d&eacute;veloppeur &eacute;tudiant dans le domaine de l'informatique &agrave; l'universit&eacute; Pierre et Marie Curie (UPMC).
							&Agrave; <?php echo $diff; ?> ans, je cherche constamment &agrave; &eacute;largir mes comp&eacute;tences techniques tout en d&eacute;butant sur le monde du travail.<br><br>
							Apr&egrave;s mes &eacute;tudes en Master informatique, je compte d&eacute;buter ma carri&egrave;re en tant que d&eacute;veloppeur logiciel ou d&eacute;veloppeur web.
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
						<?php include 'include/experience.html'; ?>
					</div>
					<div class="span6 hero-unit">
						<?php include 'include/hobbies.php'; ?>
					</div>
				</div>
			</div>
			<footer class="footer">
				<p class="pull-right"><a href="#">Haut de page</a></p>
				<p>Pour me contacter : marchal.vin [at] gmail.com</p>
				<div class="pull-right">
					<a target="_BLANK" href="https://twitter.com/marchal_vin"><span class="twitter pull-right"></span></a>
					<a target="_BLANK" href="http://fr.linkedin.com/pub/vincent-marchal/39/616/4a0"><span class="linkedin pull-right"></span></a>
					<a target="_BLANK" href="https://plus.google.com/105717579905275905418?prsrc=3&rel=author"><span class="googleplus pull-right"></span></a>
				</div>
				
				<p>Ce site a &eacute;t&eacute; cod&eacute; par moi m&ecirc;me &agrave; l'aide de l'outil <a target="_BLANK" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
				<p></p>
			</footer>
			<script type="text/javascript">
				(window.addEventListener || window.attachEvent)(window.addEventListener ? 'load' : 'onload',function(){
					var script = document.createElement('script');
					script.setAttribute('type', 'text/javascript');
					script.setAttribute('src', './js/js.min.js');
					document.getElementsByTagName('head')[0].appendChild(script);
					},true
				);
			</script>
		</div>
	</body>
</html>