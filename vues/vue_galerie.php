<?php include("vue_head.php"); ?>
<body>
	<?php 
		include('../controleurs/ctrl_galerie.php'); 
	    include("vue_topbar.php"); 

	    $url = $url_img[2];
	 ?>
	<div class="container title-container">
		<div class="container">
			<h1 class="title">Galerie photo</h1>
		</div>
	</div>
	<div id="main" style="width:1500px; text-align: center">

		<div class="container-caroussel">
			<?php 
				echo '<img src="' . $url_img[2] . '">'
			?>
			<div class="container-miniatures">
				<img src="../assets/img/bolas.jpg" class="miniature">
				<img src="../assets/img/bolas-fire.jpg" class="miniature">
				<img src="../assets/img/orbit.jpg" class="miniature">
				<img src="../assets/img/pandadub.jpg" class="miniature">

			</div>
		</div>	
	</div>
</body>
<?php require_once("vue_footer.php"); ?>