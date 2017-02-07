<div class="topbar">
	<a class="topbar-logo"></a>
	<nav class="topbar-menu">
		<a href="index.php">Accueil</a>
		<ul>
			<li>
				<a href="vue_discipline.php">Jonglage</a>
				<ul class="sous-menu">
					<li>test</li>
					<li>test</li>
					<li>test</li>
				</ul>
			</li>
			<li><a href="vue_discipline.php">FlipyFlux</a></li>
			<li><a href="vue_discipline.php">FlowToys</a></li>
			<li><a href="vue_contact.php">Contact</a></li>
		</ul>
	</nav>
	<!-- if $session is set alors on affiche le pseudo a la place -->
	<div class="topbar-right">
		<?php if (isset($_SESSION['pseudo'])) {
				  echo $_SESSION['pseudo'] ?> <a style="margin-left: 15px" id ="btn_deco" class="btn" onclick="deconnexion()" href="../controleurs/ctrl_deconnexion.php">Deconnexion</a>
			<?php } else { ?>
					<a class="btn" href="vue_inscription.php">S'inscrire</a>
					<a class="btn" href="vue_connexion.php">Se connecter</a>
			<?php } ?>
	</div>
</div>