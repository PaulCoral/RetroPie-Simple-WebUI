<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	html_generate_top("Adding a Game");

	$rpie_folder_path = get_RPIE_FOLDER_PATH();
	if($rpie_folder_path === FALSE){
		echo "<strong>Error</strong> : Can't read RetroPie folder location." . $rpie_folder_path;
		html_generate_bottom();
		exit();
	}
	$path_to_roms_folder = $rpie_folder_path . '/roms';
	if(file_exists($path_to_roms_folder) === FALSE){
		echo "<strong>Error</strong> : Can't read RetroPie/roms folder location : ".$path_to_roms_folder;
		html_generate_bottom();
		exit();
	}
	$roms_dir_content = scandir($path_to_roms_folder);
?>

	<form action="addGame_upload.php" method="post" enctype="multipart/form-data">
		Select the ROM file to import :
		 <select id="gamePlatform" name="gamePlatform">
		 	<?php
				for($i = 2; $i < count($roms_dir_content); $i++){
					$rom_dir = $roms_dir_content[$i];
					echo "<option value=\"".$path_to_roms_folder."/".$rom_dir."\">".$rom_dir."</option>";
				}
			?>
		</select>
		<input type="file" name="gameToUpload" id="gameFile" \>
		<input type="submit" value="Upload Game" name="submit" \>
	</form>

<?php
  html_generate_bottom();
?>
