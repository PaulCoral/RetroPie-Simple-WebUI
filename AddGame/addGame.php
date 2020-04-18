<?php
  include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
  html_generate_top("Adding a Game");
?>

	<form action="addGame_upload.php" method="post" enctype="multipart/form-data">
		Select the ROM file to import : 
		 <select id="gamePlatform" name="gamePlatform">
			  <option value="nes">NES</option>
			  <option value="snes">SNES</option>
			  <option value="n64">N64</option>
			  <option value="Wii">Wii</option>
		</select> 
		<input type="file" name="gameToUpload" id="gameFile" \>
		<input type="submit" value="Upload Game" name="submit" \>
	</form>

<?php
  html_generate_bottom();
?>
