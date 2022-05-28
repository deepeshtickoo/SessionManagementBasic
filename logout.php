<?php
session_start();
echo json_encode("You have been logged out ".$_SESSION['userName']."! See you soon.");
session_destroy();
?>