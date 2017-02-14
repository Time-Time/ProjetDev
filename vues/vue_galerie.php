<?php include("vue_head.php"); ?>
<body>
	<?php 
		include('../controleurs/ctrl_galerie.php'); 
	    include("vue_topbar.php"); 
	 ?>
	<script type="text/javascript" src="../assets/js/galerie_carousel_ajax.js"></script>
	<div class="container title-container">
		<div class="container">
			<h1 class="title">Galerie photo</h1>
		</div>
	</div>
	<div id="main" style="text-align: center">

		<div class="container-caroussel">
			<div id= "carousel">
				<!-- Affichage de l'image courante -->
			</div>
			<div id="miniatures" class="container-miniatures">
				<!-- Affichage des miniatures en Ajax -->
			</div>
		</div>	
	</div>
</body>
<?php require_once("vue_footer.php"); ?>