<?php include("vue_head.php"); ?>
<body>
	<?php 
		include('../controleurs/ctrl_galerie.php'); 
	    include("vue_topbar.php"); 
	 ?>
	<div class="container title-container">
		<div class="container">
			<h1 class="title">Galerie photo</h1>
		</div>
	</div>
	<div id="main" style="width:1500px; text-align: center">

		<div class="container-caroussel">
		<img src="../assets/img/bolas.jpg" >
			<?php 
			
				//var_dump($url_img);
				/*echo '<img src="' . $url_img[2] . '">'*/
			?>
			<div id="miniatures" class="container-miniatures">
				<?php
					foreach ($url_img as $value) {
						echo '<img src="' . $value->img_url . '" class="miniature">';
					};
				?>
			</div>
		</div>	
	</div>
</body>
<?php require_once("vue_footer.php"); ?>