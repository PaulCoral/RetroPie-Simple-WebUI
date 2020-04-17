<?php
  include($_SERVER['DOCUMENT_ROOT'].'Basics/basics.php');
  html_generate_top("En cours");
?>
    <h1>Welcome</h1>
    <p>This is a small Web interface for a RetroPi station.<p>
    <h2>What do you want to do?</h2>
    <p>
      <ul>
        <li><a href='/addGame/addGame.php'>Add a game to RetroPi</a></li>
        <li>Coming Soon ...</li>
      </ul>
    </p>

<?php
  html_generate_bottom();
?>
