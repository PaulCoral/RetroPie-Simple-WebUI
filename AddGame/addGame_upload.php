
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basic_form_check.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/print_error.php');
	check_post_zero("addGame.php");
  	html_generate_top("File Upload");



$target_dir = $_POST['gamePlatform'];
$target_name = $target_dir . "/" . basename($_FILES["gameToUpload"]["name"]);

if(file_exists($target_dir) === FALSE){
	echo "<strong>ERROR</strong> : Invalid destination, aborting ...";
	html_generate_bottom();
	exit();
}

if(move_uploaded_file($_FILES["gameToUpload"]["tmp_name"], $target_name)){
	if(chmod($target_name, 0777) === FALSE){
		echo "<strong>Warning</strong> Can't edit game file privilege, may result in some issue.";
	}
	echo "Game sucessfully uploaded : return to <a href=\"/\">HOME PAGE</a>.";
} else {
	echo "Error while uploading game : <a href=\"addGame.php\">Try Again</a>.";
}

	html_generate_bottom();

?>
