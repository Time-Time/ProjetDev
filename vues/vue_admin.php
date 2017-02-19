<?php require_once("vue_head.php"); ?>
	<body onload="">
		<?php
			require_once("vue_topbar.php");
			require_once("../controleurs/ctrl_admin.php");
		?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Administrer le site</h1>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="form-group">
					<input class="form-control" type="text" name="disc_nom" id="disc_nom" placeholder="Nom de la discipline" required="required" autofocus="autofocus" maxlength="45" onblur="adminVerifDisciplineNom()">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="disc_description" id="disc_description" placeholder="Description de la discipline" required="required" autofocus="autofocus" maxlength="4294967296">
				</div>
				<select name="disc_categorie" id="disc_categorie">
					<option value="" disabled selected>Sélectionner une catégorie</option>
					<?php getListeCategorie() ?>
				</select>


				<select name="disc_urlImage" id="disc_urlImage">
					<option value="" disabled selected>Sélectionner une image</option>
					<?php getListeImage() ?>
				</select>

				<input id="btn_creerDiscipline" class="btn btn_block" type="button" name="commit" value="Créer la discipline" onclick="creerDiscipline()">
				</input>
				<div class="form-group">
					<form action="../controleurs/ctrl_admin.php" method="post" enctype="multipart/form-data">
						<!--<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/><br/>     <!-- taille maximale du fichier en octets, à mettre avant l'objet input de type file --> 
						<input class="" type="file" name="fichierCopie"/><br/>
						<input class="btn btn_block" type="submit" value="2 - Envoyer l'image"/><br/>
					</form>
				</div>
			</div>
		</div>
	</body>
<?php require_once("vue_footer.php"); ?>