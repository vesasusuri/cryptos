<!-- <?php
// session_unset();
// session_destroy();
// header("Location: ./index.php");
?> -->
<?php
session_start();

header("location:  ./index.php");

session_destroy();


?>