	<?php include("vue_head.php"); ?>
	<body>
		<?php 
			include('controleurs/ctrl_index.php'); 
		    include("vue_topbar.php"); 
		 ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Bienvenue sur Notre site, <?php echo $user ?> !</h1>
			</div>
		</div>
		<div id="main">

				<!-- CONTENU DU SITE -->

		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>
