<?php

/*
 * Basic function used in most web pages
 */

function html_generate_top(string $string_title) {
	$emoji="&#x1f9ea;";
    echo '
    <!DOCTYPE html>
    <html>
      <head>
        <title>'.$string_title.'</title>
      </head>
      <body>
	<h1 id="main_title"><a href=\'/\'>'.$emoji.'</a> '.$string_title.'</h1>
    ';

}

function html_generate_bottom() {
  echo '
  <!DOCTYPE html>
  <html>
    <head>
      <title>$string_title</title>
    </head>
    <body>
  ';

}

//--------------------------------------------------------------
function get_RPIE_FOLDER_PATH(): string{
	return  file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Variables/RPIE_FOLDER_PATH.php');
}

?>
