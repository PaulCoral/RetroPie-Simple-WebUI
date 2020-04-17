
<?php
echo "starting<br>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$target_dir = "/var/www/html/uploads/";
print_r(array_keys($_FILES));
$target_name = $target_dir . basename($_FILES["gameToUpload"]["name"]);

move_uploaded_file($_FILES["gameToUpload"]["tmp_name"], $target_name);
?>
