<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
		<title>Vincent Marchal - Site web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Le WebCV de Vincent Marchal" />
		<meta name="author" content="Vincent MARCHAL" />
		<meta name="keywords" lang="fr" content="d&eacute;veloppeur, informatique, web, php, java, site, cv, alternance, stage, vincent, marchal" />
		<meta name="robots" content="index, follow" />
		
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Barre top -->
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
					<a class="brand" href="">Vincent Marchal</a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active"><a href="index.php"><i class="icon-home icon-white"></i>&nbsp;Accueil</a></li>
								<li><a href="CV-Vincent-MARCHAL.pdf">CV</a></li>
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
						<h2>Bonjour !</h2>
						<p>
							<?php
								$secondesNaissance = mktime(15, 15, 0, 12, 11, 1991);
								$secondes = time();
								
								$diff = $secondes - $secondesNaissance;
								$diff = $diff / 31536000;
								$diff = floor($diff);
							?>
							Je suis Vincent Marchal, d&eacute;veloppeur &eacute;tudiant dans le domaine de l'informatique &agrave; l'universit&eacute; Pierre et Marie Curie.
							&Agrave; <?php echo $diff; ?> ans, je cherche constamment &agrave; &eacute;largir mes comp&eacute;tences techniques tout en d&eacute;butant sur le monde du travail.<br />
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
						<?php include 'include/hobbies.html'; ?>
					</div>
				</div>
			</div>
			<footer class="footer">
				<p class="pull-right"><a href="#">Haut de page</a></p>
				<p>Pour me contacter : marchal.vin [at] gmail.com</p>
				<div class="pull-right">
					<a target="_BLANK" href="https://twitter.com/marchal_vin"><span class="twitter pull-right"></span></a>
					<a target="_BLANK" href=""><span class="linkedin pull-right"></span></a>
					<a target="_BLANK" href="https://plus.google.com/u/0/105717579905275905418/posts"><span class="googleplus"></span></a>
				</div>
				
				<p>Ce site a &eacute;t&eacute; cod&eacute; par moi m&ecirc;me &agrave; l'aide de l'outil <a target="_BLANK" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
				<p></p>
			</footer>
			<script type="text/javascript">
				function includeJS(src){
					var script = document.createElement('script');
					script.setAttribute('type', 'text/javascript');
					script.setAttribute('src', src);
					document.getElementsByTagName('head')[0].appendChild(script);
				}
				(window.addEventListener || window.attachEvent)(window.addEventListener ? 'load' : 'onload',function(){
						includeJS('./js/jQuery.min.js');
						includeJS('./js/bootstrap.min.js');
					},true
				);
			</script>
		</div>
	</body>
</html>