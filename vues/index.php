<?php include("vue_head.php"); ?>
<body>
	<?php 
		include('../controleurs/ctrl_index.php'); 
	    include("vue_topbar.php"); 
	 ?>
	<div class="container title-container">
		<div class="container">
			<h1 class="title">Bienvenue sur Notre site, <?php echo $user ?> !</h1>
		</div>
	</div>
	<div id="main" style="width:1500px">

		<div class="container-circles">
			<a href="vue_discipline.php?cat=jonglage" class="lien-categorie">
				<p>Jonglage</p>
				<img class="img-index" src="../assets/img/jonglage-index.jpg">
			</a>
			<a href="vue_discipline.php?cat=flux&disc=flipyflux" class="lien-categorie">
				<p>Flux</p>
				<img class="img-index" src="../assets/img/flipyflux-index.jpg">
			</a>
			<a href="vue_discipline.php?cat=light" class="lien-categorie">
				<p>Light-Toys</p>
				<img class="img-index" src="../assets/img/orbit-index.jpg">
			</a>
		</div>	
	</div>
</body>
<?php require_once("vue_footer.php"); ?>
