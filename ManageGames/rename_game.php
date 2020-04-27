<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	check_post_zero("manageGames.php");
 	html_generate_top("Rename Game");

  function get_extension($name):string{
    $ext = explode(".", $name);
    $ext = $ext[count($ext) - 1];
    return $ext;
  }

?>

<?php

// Display Game and Console names
$names = explode("/", $_POST['pathToGame']);
$console_name = $names[0];
$game_name = $names[1];

//-----------------------------------------------

//Create old and new path
$console_path = get_RPIE_FOLDER_PATH()."/roms/".$console_name."/";
$old_path = $console_path.$game_name;
$new_path = $console_path.$_POST['newName'];

//-----------------------------------------------

//Compare extension
$old_ext = get_extension($game_name);
$new_ext = get_extension($_POST['newName']);
if(strcmp($old_ext, $new_ext) !== 0 && isset($_POST['force']) === FALSE){
  $new_path = $new_path.".".$old_ext;
}


//-----------------------------------------------

//rename and redirect
rename($old_path, $new_path);
header("Location: manageGames.php");
?>


<?php
  html_generate_bottom();
?>
