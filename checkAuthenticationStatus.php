<?php
//This API gives us a response informing us about our authentication status
session_start();
if(isset($_SESSION['authenticated']))
{
    if($_SESSION['authenticated'] == "True")
    {
        echo json_encode("You are authenticated! Welcome ".$_SESSION['userName']);
    }
    else {
        echo json_encode("You are not authenticated!");
    }
}
else {
    echo json_encode("You are not authenticated!");
}
?>