<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
 	html_generate_top("Edit Game");
?>

<?php echo $_POST['pathToGame']; ?>

<?php
  html_generate_bottom();
?>
