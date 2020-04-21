<!-- !!! TEMPLATE !!! : DON'T INCLUDE THIS FILE THIS IS A TEMPLATE TO COPY -->
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	check_post_zero("manageGames.php");
 	html_generate_top("Delete Game");
?>
  <?php
		$rpie_folder = get_RPIE_FOLDER_PATH();
		$pathToGame = $rpie_folder."/roms/".$_POST['pathToGame'];
		if(unlink($pathToGame) === TRUE){
			// On success return to game management page
			header("Location: manageGames.php");
			exit();
		}else{
			// On failure error 
			echo $pathToGame."<br>";
			echo "
			<p>
				Error can't delete this game. <a href=\"manageGames.php\">Go back !</a>
			</p>
			";
		}
	?>

<?php
  html_generate_bottom();
?>
