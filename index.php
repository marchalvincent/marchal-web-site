<?php include 'head.php'; ?>
		<div id="propos" class="span9 hero-unit menuLien" itemscope itemtype="http://data-vocabulary.org/Person">
			<h1><span itemprop="name">Vincent Marchal</span></h1>
			<img itemprop="photo" class="photo-perso img-rounded" width="180" height="180" alt="C'est moi, Vincent Marchal !" src="<?php echo HOME; ?>img/Vincent-Marchal.jpg"/>
			<p>
				<?php
				$secondesNaissance = mktime(15, 15, 0, 12, 11, 1991);
				$secondes = time();
				
				$diff = $secondes - $secondesNaissance;
				$diff = $diff / 31536000;
				$diff = floor($diff);
				?>
				Bienvenue sur ma page personnelle, je suis <span itemprop="title">d&eacute;veloppeur</span> &eacute;tudiant dans le domaine de <span class='valeur'>l'informatique</span> &agrave; 
				l'<span itemprop="affiliation">Universit&eacute; Pierre et Marie Curie (UPMC)</span>. &Agrave; <?php echo $diff; ?> ans, je cherche constamment &agrave; &eacute;largir mes 
				comp&eacute;tences techniques tout en d&eacute;butant sur le monde du travail.
			</p>
			<p>
				Apr&egrave;s mes &eacute;tudes en <span class='valeur'>Master informatique</span>, je compte d&eacute;buter ma carri&egrave;re en tant que d&eacute;veloppeur logiciel/web. 
				Le langage informatique dans lequel je suis le plus &agrave; l'aise est le <span class='valeur'>Java</span> mais je reste ouvert &agrave; toute proposition.
			</p>
			<p>
				Gr&acirc;ce &agrave; ce site, vous pourrez en apprendre d'avantage sur ma <a href="<?php echo HOME; ?>formation">formation</a> et mes 
				<a href="<?php echo HOME; ?>competences">comp&eacute;tences</a> informatiques. Je vous invite &eacute;galement &agrave; visiter les pages des <a href="<?php echo HOME; ?>projets">projets</a> 
				que j'ai pu r&eacute;aliser durant mes &eacute;tudes ainsi que de mon <a href="<?php echo HOME; ?>experience">exp&eacute;rience</a> professionnelle.
				Vous pouvez enfin d&eacute;couvrir mes <a href="<?php echo HOME; ?>hobbies">hobbies</a> en dehors de mon monde professionnel.
			</p>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>