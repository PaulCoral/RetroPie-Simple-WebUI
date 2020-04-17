<?php

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

?>
