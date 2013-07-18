<?php include '../head.php'; ?>
		<div id="projets" class="span9 hero-unit menuLien">
			<h1>Quelques projets</h1>
			<div class="alert alert-info">
				<button class="close" data-dismiss="alert" type="button">×</button>
				Cliquez sur le titre d'un projet pour d&eacute;rouler son contenu
			</div>
			<div class="modal-body">
				<div id="accordion2" class="accordion">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#processGenerator" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">Process Generator</a>
						</div>
						<div class="accordion-body collapse in" id="processGenerator">
							<div class="accordion-inner">
								<dl class="dl-horizontal">
									<dt>Titre</dt>
									<dd>Process Generator.</dd>
									<dt>Language</dt>
									<dd>100% Java.</dd>
									<dt>Taille</dt>
									<dd>En cours...</dd>
									<dt>R&eacute;alis&eacute; en</dt>
									<dd>solo.</dd>
									<dt>Particularit&eacute;</dt>
									<dd>Utilise un algorithme bas&eacute; sur la g&eacute;n&eacute;tique.</dd>
									<dt>Description</dt>
									<dd>
										De nombreux projets et outils manipulant les diagrammes d'activit&eacute;s commencent &agrave; voir le jour (un exemple avec le projet ci-dessous : Process Analyzer). 
										Le probl&egrave;me est que le d&eacute;veloppeur est amen&eacute; &agrave; n&eacute;gliger la phase de test car la cr&eacute;ation de diagrammes d'activit&eacute;s est plut&ocirc;t 
										longue et p&eacute;nible.<br><br>
										Le but de ce projet &eacute;tait de permettre la g&eacute;n&eacute;ration automatique de tels documents. Ainsi, g&eacute;n&eacute;rer un diagramme avec une centaine d'activit&eacute;s
										ne prend d&eacute;sormais que quelques secondes. Ce g&eacute;n&eacute;rateur se base sur la mutation g&eacute;n&eacute;tique pour faire &eacute;voluer un diagramme qui au d&eacute;part est le 
										plus basique qu'il soit afin de respecter les contraintes sp&eacute;cifi&eacute;es par l'utilisateur (taille, structure, etc.). Cela garanti que le diagramme g&eacute;n&eacute;r&eacute; est 
										unique et cr&eacute;&eacute; de mani&egrave;re objective.<br><br>
										Les librairies Java utilis&eacute;es sont <a href="http://watchmaker.uncommons.org">Watchmaker Framework</a> offrant une base solide pour l'algorithme g&eacute;n&eacute;tique et 
										<a href="http://jung.sourceforge.net">Jung</a> simplifiant le parcours de graphes. Les contraintes structurelles d&eacute;finies par l'utilisateur sont repr&eacute;sent&eacute;es par des 
										<a href="http://www.workflowpatterns.com">workflows patterns</a>. Les diagrammes peuvent être g&eacute;n&eacute;r&eacute;s sous les standards BPMN2.0 ou UML2.0.
									</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#processAnalyzer" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">Process Analyzer</a>
						</div>
						<div class="accordion-body collapse" id="processAnalyzer">
							<div class="accordion-inner">
								<dl class="dl-horizontal">
									<dt>Titre</dt>
									<dd>Process Analyzer.</dd>
									<dt>Language</dt>
									<dd>100% Java.</dd>
									<dt>Taille</dt>
									<dd>~5700 lignes de codes, 95 classes.</dd>
									<dt>R&eacute;alis&eacute; en</dt>
									<dd>bin&ocirc;me.</dd>
									<dt>Particularit&eacute;</dt>
									<dd>Utilise un <i>model checker</i>.</dd>
									<dt>Description</dt>
									<dd>
										Ce projet a &eacute;t&eacute; r&eacute;alis&eacute; durant ma premi&egrave;re ann&eacute;e de master. Son objectif &eacute;tait de fournir un outil 
										permettant de v&eacute;rifier des contraintes structurelles et comportementales sur un ou plusieurs diagrammes d'activit&eacute;s repr&eacute;sent&eacute;s 
										par le standard UML2.0.<br><br>
										Nous avons utilis&eacute; l'outil Alloy du MIT (Massachusetts Institue of Technology). Il nous offre &agrave; la fois un langage qui nous permet de 
										d&eacute;crire les contraintes et les diagrammes &agrave; v&eacute;rifier, mais aussi un <i>model checker</i> nous permettant de valider ou non le diagramme selon ces contrainte.<br><br>
										Notre travail &agrave; &eacute;t&eacute; d'automatiser les traitements ant&eacute;rieurs et post&eacute;rieurs &agrave; la validation du <i>model checker</i> d'Alloy, &agrave; savoir :
										<ul>
											<li>Traduction des diagrammes et contraintes structurelles/comportementales en langage Alloy ;</li>
											<li>Ex&eacute;cution du model checker d'Alloy ;</li>
											<li>R&eacute;cup&eacute;ration des donn&eacute;es ;</li>
											<li>Affichage graphique des donn&eacute;es pertinentes pour l'utilisateur.</li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#BatailleNavaleRoyale" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">Bataille Navale Royale</a>
						</div>
						<div class="accordion-body collapse" id="BatailleNavaleRoyale">
							<div class="accordion-inner">
								<dl class="dl-horizontal">
									<dt>Titre</dt>
									<dd>Bataille Navale Royale</dd>
									<dt>Language</dt>
									<dd>50% Java, 50% C.</dd>
									<dt>Taille</dt>
									<dd>~3200 lignes Java. ~2300 lignes C.</dd>
									<dt>R&eacute;alis&eacute; en</dt>
									<dd>bin&ocirc;me.</dd>
									<dt>Particularit&eacute;</dt>
									<dd>Architecture client/serveur. Le client est cod&eacute; en Java, le serveur en C. Les deux parties communiquent via le r&eacute;seau internet.</dd>
									<dt>Description</dt>
									<dd>
										Ce projet a &eacute;t&eacute; r&eacute;alis&eacute; durant ma premi&egrave;re ann&eacute;e de master. Son objectif &eacute;tait de fournir un jeu respectant 
										une architecture client / serveur. Les deux parties devaient &ecirc;tre cod&eacute;es dans deux langages diff&eacute;rents (objet et proc&eacute;dural).<br><br>
										Ma mission &eacute;tait de r&eacute;aliser le serveur en C pouvant communiquer avec le client java cod&eacute; par mon bin&ocirc;me. Il nous a fallu mettre 
										en place un protocole de communication car celle-ci n'est pas native entre le C et le Java.<br><br>
										Voici une liste des diff&eacute;rentes fonctionnalit&eacute;s de notre projet : 
										<ul>
											<li>Partie de 2 &agrave; 4 joueurs ;</li>
											<li>Gestion de plusieurs parties &agrave; la fois ;</li>
											<li>Connexion avec identifiant / Enregistrement de statistiques cot&eacute; serveur ;</li>
											<li>Mode spectateur ;</li>
											<li>Chat int&eacute;gr&eacute;.</li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../footer.php'; ?>