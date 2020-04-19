<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/print_error.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	check_post_zero("set_rpie_folder.php");
 	html_generate_top("Setting Path");
?>

<?php

//Remove "/ at the end of the path"
while(substr($_POST['path'], -1) == "/"){
	$_POST['path'] = substr($_POST['path'],0, -1);
	echo $_POST['path'];
}

/*
 * Check path validity
 * If it is not, print a FATAL ERROR
 */
if(file_exists($_POST['path']) === FALSE){
	echo "<p><strong>ERROR</strong> This path doesn't exist !!!<br> 
	This may result unexpected behaviours ! PATH WON'T BE SAVED</p>";
	html_generate_bottom();
	exit();
}


$store_location = $_SERVER['DOCUMENT_ROOT'].'/Variables/RPIE_FOLDER_PATH.php';

if(file_put_contents($store_location, $_POST['path']) === FALSE){	
	echo "<p><strong>Error</strong> setting the path<p>";
}else{
	echo "<p>RetroPie folder's path is set as : " . $_POST['path'] . "<br>
	Don't forget to update RetroPie/roms privileges if needed. You can also run \"setup.sh\" again.</p>";
}

?>

<?php
  html_generate_bottom();
?>
