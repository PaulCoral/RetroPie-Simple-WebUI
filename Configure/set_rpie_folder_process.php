<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/print_error.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	check_post_zero("set_rpie_folder.php");
 	html_generate_top("Setting Path");
?>

<?php


/*
 * Check path validity
 * If it is not, prints a non-fatal warning
 */
if(file_exists($_POST['path']) === FALSE){
	echo "<p><strong>WARNING</strong> This path doesn't exist !!!<br> 
	The path will be saved, but this may result unexpected behaviours ! </p>";
}

$store_location = $_SERVER['DOCUMENT_ROOT'].'/Variables/RPIE_FOLDER_PATH.php';

if(file_put_contents($store_location, $_POST['path']) === FALSE){	
	echo "<p><strong>Error</strong> setting the path<p>";
}else{
	echo "<p>RetroPie folder's path is set as : " . $_POST['path'] . "</p>";
}

?>

<?php
  html_generate_bottom();
?>
