<?php require_once("vue_head.php"); ?>
	<body onload="">
		<?php
			require_once("vue_topbar.php");
			require_once("../controleurs/ctrl_admin.php");
		?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Administration</h1>
			</div>
		</div>
		<div id="main">
			<div class="container container-admin">
				<div class="container-form-admin">
					<div style="margin-bottom: 0px" class="form-group">
					<div class="label-admin">Ajouter une image</div>
						<form action="../controleurs/ctrl_admin.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="MAX_FILE_SIZE" value="10000000"/><br/>     <!-- 10 Mo ==>taille maximale du fichier en octets --> 
							<label id="lbl_fichierCopie" class="custom-file-upload form-control" type="text">
								Choisir une image
								<input type="file" name="fichierCopie" id="fichierCopie"/>
							</label>
							<input class="custom-file-upload-name form-control form-control-unselectable" type="text" value="Aucune image sélectionnée" id="img_nom"
								disabled="true" required="required" maxlength="45">
							</input>
							<input class="form-control form-control-selectable" style="width:300px; float: right;" type="text" id="img_desc" placeholder="Description de l'image"
								required="required" autofocus="autofocus" maxlength="45"><br/><br/>
							<input class="btn btn_block form-control-selectable" style="width: 200px;" type="submit" value="Ajouter l'image" onclick="creerImage()"/><br/>
						</form enctype="multipart/form-data">
					</div>
				</div>
				<p style="border-bottom: 0px solid white"></p><br/>
				<p style="border-bottom: 0px solid white"></p><br/>
				<div class="container-form-admin">
					<div class="label-admin">Ajouter une discipline</div><br/>
					<div class="form-group">
						<input class="form-control form-control-selectable" style="width:300px;" type="text" name="disc_nom" id="disc_nom" placeholder="Nom de la discipline" required="required" autofocus="autofocus" maxlength="45" onblur="adminVerifDisciplineNom()">

						<select class="form-control listbox-disc form-control-selectable" name="disc_image" id="disc_image">
							<option value="" disabled selected>Image</option>
							<?php getListeImage() ?>
						</select>

						<select class="form-control listbox-disc form-control-selectable" name="disc_categorie" id="disc_categorie">
							<option value="" disabled selected>Catégorie</option>
							<?php getListeCategorie() ?>
						</select>
					</div>
					<div class="form-group">
						<textarea class="form-control textarea-disc form-control-selectable" type="text" name="disc_description" id="disc_description" placeholder="Description de la discipline" required="required" autofocus="autofocus" maxlength="4294967296"></textarea>
					</div>
					<input id="btn_creerDiscipline" class="btn btn_block btn_creerdisc form-control-selectable" type="button" name="commit" value="Créer la discipline" onclick="creerDiscipline()">
					</input>
				</div>
			</div>
<?php require_once("vue_footer.php"); ?>
		</div>
							<script type="text/javascript">
								document.getElementById('fichierCopie').onchange = function () {
									var nomCompletFichier = this.value.replace("C:\\fakepath\\", "");
									if(nomCompletFichier.length > 0)
									{
										document.getElementById('img_nom').value  = nomCompletFichier;
									}
								};
							</script>
	</body>