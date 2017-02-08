<div class="topbar">
	<a class="topbar-logo"></a>
	<nav class="topbar-menu">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li class ="dropdown">
				<a class="dropbtn" href="vue_categorie.php">Jonglage</a>
				<div class= "dropdown-content">
					<a href="vue_discipline.php">Bolas</a>
					<a href="vue_discipline.php">Contact</a>
					<a href="vue_discipline.php">Poi</a>
				</div>
			</li>
			<li><a href="vue_discipline.php">FlipyFlux</a></li>
			<li class ="dropdown">
				<a class="dropbtn" href="vue_categorie.php">Light Toys</a>
				<div class= "dropdown-content">
					<a href="vue_discipline.php">Orbit</a>
					<a href="vue_discipline.php">Gloves</a>
				</div>
			</li>
			<li><a href="vue_galerie.php">Gallerie</a></li>
			<li><a href="vue_contact.php">Contact</a></li>
		</ul>
	</nav>
	<!-- si $session is set alors on affiche le pseudo suivi du btn déconnexion
		 sinon on affiche les btn inscription et connexion -->
	<div class="topbar-right">
		<?php if (isset($_SESSION['pseudo'])) { ?>
				 <span class="pseudo-topbar"> <?php echo $_SESSION['pseudo'] ?> </span><a style="margin-left: 15px" id ="btn_deco" class="btn"
				       href="../controleurs/ctrl_deconnexion.php">Deconnexion</a>
		<?php } else { ?>
					<a class="btn" href="vue_inscription.php">S'inscrire</a>
					<a class="btn" href="vue_connexion.php">Se connecter</a>
		<?php } ?>
	</div>
</div>