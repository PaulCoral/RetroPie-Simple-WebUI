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

//--------------------------------------------------------------


/*
 * @brief convert a size in Byte to MegaByte (rounded)
 * @param $data_size : the size to convert
 * @param $force_unit : force the given unit
 * @param $threshold : the threshold at which it goes to upper unit (default : 10000)
 */
function adapt_size($data_size, $force_unit="", $threshold = 10000){
	$size_unit = 1000; // THRESHOLD for converstion
	$forced = TRUE;
	$index = 0;
	$size_label = array("B", "KB", "MB", "GB");
	for($i = 0; $i < count($size_label); $i++){
		if($force_unit === $size_label[$i]){
			$forced = FALSE;
			$index = $i;
		}
	}

	if($forced === TRUE){
		$i = 0;
		while($data_size > $threshold && $i < count($size_label)){
			$data_size /= $size_unit;
			$i++;
		}
		$index = $i;
	} else {
		$data_size /= pow($size_unit, $index);
	}
	return round($data_size).$size_label[$index];
}

?>
