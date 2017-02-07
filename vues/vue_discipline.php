	<?php 
		include("vue_head.php"); 
		include("../config/BD.php");
	?>
	<body>
		<?php include("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Bienvenue sur Notre site !</h1>
			</div>
		</div>
		<div id="main" <!-- style="background-color: green -->">

			<?php 
				$disciplines = selectDisc(connexionBD());
				/*var_dump($disciplines);
				echo $disciplines[2];*/
			?>


			<div class="discipline-container">
				<div class= "texte-disc">
					<div class= "titre-disc">FlipyFlux</div><br/>
					<div class= "description-disc"><?php echo $disciplines[2] ?></div>
				</div>
				<img class= "img-discipline" src="../assets/img/contactBall.jpg" width="200px" height="300px" />
			</div>

				<!-- CONTENU DU SITE -->

		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>