<?php
$rpie_folder_path_location = $_SERVER['DOCUMENT_ROOT'].'/Variables/RPIE_FOLDER_PATH.php';
if(file_exists($rpie_folder_path_location) === FALSE){
	echo "<p><strong>Getting Started</strong> : <a href=\"Configure/set_rpie_folder.php\">Set your RetroPie folder location !!!</a></p>";
}
?>
