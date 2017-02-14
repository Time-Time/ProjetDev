	<?php 
		include("vue_head.php"); 
		include("../controleurs/ctrl_discipline.php");
	?>
	<body>
		<?php include("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Catégorie : <?php echo $cat_nom ?></h1>
			</div>
		</div>
		<div id="main" <!-- style="background-color: green -->">
			<?php 
				foreach ($tab_disciplines as $value) {
					echo '<div id="'.$value->disc_nom.'" class="discipline-container">
						      <div class= "texte-disc">
						      <div class= "titre-disc">'.$value->disc_nom.'</div><br/>
						      <div class= "description-disc">'.$value->disc_desc.'</div>
						      </div>
							  <img class= "img-discipline" src="'.$value->img_url.'" width="200px" height="300px" />
						  </div>';
				}
			?>
		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>