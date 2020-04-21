<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	check_post_zero("manageGames.php");
 	html_generate_top("Confirm Game Deletion");
?>

	<p>
		Do you really want to delete this game
		<?php echo "<strong>".$_POST['pathToGame']."</strong>" ; ?>
	</p>

	<form action="delete.php" method="post">
		<input type="hidden" name="pathToGame" value=<?php echo "\"".$_POST['pathToGame']."\""; ?> >
		<input type="submit" value="Yes">
	</form>

	<form action="manageGames.php" method="post">
		<input type="submit" value="No">
	</form>

<?php
  html_generate_bottom();
?>
