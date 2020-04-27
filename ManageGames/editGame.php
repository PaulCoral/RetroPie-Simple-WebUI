<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	check_post_zero("manageGames.php");
 	html_generate_top("Edit Game");
?>

<?php

// Display Game and Console names
$names = explode("/", $_POST['pathToGame']);
$console_name = $names[0];
$game_name = $names[1];
echo "<strong>Game : </strong>".$game_name."<br/> ";
echo "<strong>Console : </strong>".$console_name."<br/>";

//---------------------------------------

// Print game size
$game_size = get_RPIE_FOLDER_PATH()."/roms/".$_POST['pathToGame'];
echo "<strong>Size : </strong>".adapt_size(filesize($game_size));

//----------------------------------------

//To game deletion
?>
<form action="confirm_delete.php" method="post">
	<input type="hidden" name="pathToGame" value=<?php echo "\"".$_POST['pathToGame']."\""; ?> />
	<input type="submit" value="DELETE" />
</form>

<form action="rename_game.php" method="post">
	<input type="submit" value="RENAME"/>
	<div style="display: inline;" title="Won't check the extension">Force &#x26A0; :
		<input type="checkbox" name="force" value="Yes" />
	</div>
	<input type="hidden" name="pathToGame" value=<?php echo "\"".$_POST['pathToGame']."\""; ?> />
	<input type="text" name="newName" placeholder=<?php echo "\"".$game_name."\"" ?> />
</form>

<?php
  html_generate_bottom();
?>
