<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Basics/basics.php');
  	html_generate_top("Welcome");

?>
    <p>This is a small Web interface for a RetroPi station.<p>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/home_warning.php');
?>
    <h2>What do you want to do?</h2>
    <p>
      <ul>
        <li><a href='/AddGame/addGame.php'>Add a game to RetroPie</a></li>
				<li><a href='/ManageGames/manageGames.php'>Manage Games</a></li>
				<!--These ones(below) stay at the end-->
				<li><a href='/Configure/configure.php'>Configuration Menu</a></li>
        <li>Coming Soon ...</li>
      </ul>
    </p>

<?php
  html_generate_bottom();
?>
