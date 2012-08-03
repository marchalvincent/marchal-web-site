<h3>Mes hobbies</h3>
<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#sport">Sport</a></li>
		<li><a data-toggle="tab" href="#developpement">Programmation</a></li>
		<li><a data-toggle="tab" href="#musique">Musique</a></li>
	</ul>
	<div class="tab-content">
		<div id="sport" class="tab-pane fade active in">
			Le sport est tr&egrave;s important pour moi. Depuis l'&acirc;ge de 6 ans j'ai d&eacute;couvert diverses 
			disciplines sportives, individuelles mais aussi collectives :
			<dl>
				<dt>2010 et plus</dt>
				<dd>Pratique du badminton en club et activit&eacute;s cardio-vasculaires en salle de sport.</dd>
				<dt>2007 - 2009</dt>
				<dd>Volley ball avec l'association sportive du lyc&eacute;e Auguste Renoir. 
				Comp&eacute;tition niveau d&eacute;partemental.</dd>
				<dt>1998 - 2009</dt>
				<dd>Pratique du judo, comp&eacute;tition de haut niveau (r&eacute;gional et international). 
				Diplom&eacute; de ceinture noire judo-jujitsu.</dd>
			</dl>
		</div>
		<?php
			$anneeDecouverte = mktime(0, 0, 0, 09, 0, 2009);
			$secondes = time();
			
			$diff = $secondes - $anneeDecouverte;
			$diff = $diff / 31536000;
			$diff = floor($diff);
		?>
		<div id="developpement" class="tab-pane fade">
			Durant ma deuxi&egrave;me ann&eacute;e d'&eacute;tude sup&eacute;rieure, j'ai d&eacute;couvert les joies 
			de la programmation. C'est pour moi une r&eacute;elle passion qui apporte beaucoup &agrave; mon 
			&eacute;panouissement personnel.<br><br>
			Il m'arrive souvent de programmer en plus de mes &eacute;tudes et de mon activit&eacute; professionnelle.
			Par exemple, en ce moment, je me remet dans l'apprentissage du langage de programmation C que j'ai d&eacute;couvert 
			il y a <?php echo $diff; ?> ans.<br><br>
			J'ai &eacute;galement trouv&eacute; int&eacute;ressant de me faire un site web que vous visitez actuellement.
			
		</div>
		<div id ="musique" class="tab-pane fade">
			J'aime &eacute;galement &eacute;couter de la musique. Dans les transports en commun, chez moi ou avec des amis, elle me permet de 
			penser &agrave; autre chose, de changer de monde. Au travail, je m'en sert parfois pour me concentrer.<br><br>
			J'&eacute;coute divers styles de musiques : du classique au rap, en passant par le rock, la pop, la dance, etc.
		</div>
	</div>
</div>