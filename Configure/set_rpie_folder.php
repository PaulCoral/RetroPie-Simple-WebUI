<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
 	html_generate_top("Set RetroPie Folder");
?>

<p>Give the RetroPie folder's path <strong>WITHOUT "/"</strong> at the end</p>
<form action="set_rpie_folder_process.php" method="post">
	Path : <input type="text" name="path" placeholder="/home/UserName/RetroPie"> <input type="submit" value="Set Path">
</form>

<?php
  html_generate_bottom();
?>
