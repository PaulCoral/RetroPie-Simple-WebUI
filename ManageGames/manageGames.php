<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/print_error.php');

 	html_generate_top("Manage Games");
?>

<?php
$rpie_rom_folder_path = get_RPIE_FOLDER_PATH().'/roms';
$roms_folders = scandir($rpie_rom_folder_path);
foreach($roms_folders as $console_folder){
	if (strcmp($console_folder, '.') !== 0 && strcmp($console_folder, '..') !== 0) {
		$console_path = $rpie_rom_folder_path.'/'.$console_folder;
		if(is_dir($console_path) === TRUE){
			echo "<h2>".basename($console_path)."</h2>";
			$games_in_folder = scandir($console_path);
			echo "<ul>";
			foreach($games_in_folder as $game){
				if (strcmp($game, '.') !== 0 && strcmp($game, '..') !== 0) {
					echo "<li>".$game."</li>";
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
