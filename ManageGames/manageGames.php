<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/print_error.php');

 	html_generate_top("Manage Games");
?>

<h2>System : </h2>
<p>
	<?php
		//Display system some system info, only free disk space now
		$roms_folder = get_RPIE_FOLDER_PATH()."/roms";
		$byte_to_mega_byte = 1000000;
		$disk_size = disk_free_space($roms_folder);
		if($disk_size !== FALSE){
			$disk_size /= $byte_to_mega_byte;
			echo "Available Space : ".round($disk_size)." MB";
		} else {
			echo "Error : Can't get disk space";
		}
	?>
</p>

<h2>Installed Games : </h2>

<?php
$rpie_rom_folder_path = get_RPIE_FOLDER_PATH().'/roms';
$roms_folders = scandir($rpie_rom_folder_path);

// Iterate over ROMS folder
foreach($roms_folders as $console_folder){
	//Do not display "." ".."
	if (strcmp($console_folder, '.') !== 0 && strcmp($console_folder, '..') !== 0) {
		$console_path = $rpie_rom_folder_path.'/'.$console_folder;
		if(is_dir($console_path) === TRUE){
			// Display Console name
			echo "<h3>".basename($console_path)."</h3>";
			$games_in_folder = scandir($console_path);

			// Begin Game list for console
			echo "<ul>";
			foreach($games_in_folder as $game){
				//Display only files, not directory
				if (is_dir($console_path."/".$game) === FALSE) {
					$pathToGame=basename($console_path)."/".$game;
					$game_form = "
						<form action=\"confirm_delete.php\" method=\"post\"><input type=\"submit\" value=\"&#x2716;\">
						<input type=\"hidden\" name=\"pathToGame\" value=\"".$pathToGame."\"></form>
					";
					// Display
					echo "<li>".$game." ".$game_form."</li>";
				}
			}
			echo "</ul>";
		}
	}
}
?>

<?php
  html_generate_bottom();
?>
