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

				<div>
					<p>Jonglage</p>
					<img class="img-index" src="../assets/img/jonglage-index.jpg">
				</div>
				<div>
					<p>Flux</p>
					<img class="img-index" src="../assets/img/flipyflux-index.jpg">
				</div>
				<div>
					<p>Light-Toys</p>
					<img class="img-index" src="../assets/img/orbit-index.jpg">
				</div>
			</div>	

		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>
