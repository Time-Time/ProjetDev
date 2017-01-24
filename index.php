	<?php include("vue_head.php"); ?>
	<body>
		<?php include("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Bienvenue sur Notre site !</h1>
			</div>
		</div>
		<div id="main">
			<?php include('controleur/ctrl_accueil.php'); ?>
				<!-- CONTENU DU SITE -->

		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>
