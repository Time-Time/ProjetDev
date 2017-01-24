<div class="topbar">
	<a class="topbar-logo"></a>
	<nav class="topbar-menu">
		<a href="index.php">Accueil</a>
		<a href="#">Jonglage</a>
		<a href="#">FlipyFlux</a>
		<a href="#">FlowToys</a>
		<a href="vue_contact.php">Contact</a>
	</nav>
	<!-- if $session is set alors on affiche le pseudo a la place -->
	<div class="topbar-right">
		<?php if (isset($_SESSION['pseudo'])) {
				  echo $_SESSION['pseudo'] ?> <a id ="btn_deco" class="btn" href="index.php"> Deconnexion</a>
			<?php } else { ?>
					<a class="btn" href="vue_inscription.php">S inscrire</a>
					<a class="btn" href="vue_connexion.php">Se connecter</a>
			<?php } ?>
	</div>
</div>