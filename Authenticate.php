<?php
// This API would be used for Authentication
if(isset($_POST['userName']) && isset($_POST['password']))
{
    if(     ($_POST['userName'] == "Deepesh" && $_POST['password'] == "2093372") 
        ||  ($_POST['userName'] == "Simranjeet" && $_POST['password'] == "2102116")
        ||  ($_POST['userName'] == "Navdeep" && $_POST['password'] == "2024569")
        ||  ($_POST['userName'] == "Gurjeet" && $_POST['password'] == "2103006"))
                {
                    // If the username and password entered match the set credentials, then
                    // the session is started
                    
                    session_start();
                    $_SESSION['authenticated'] = "True";
                    $_SESSION['userName'] = $_POST['userName'];
                    echo json_encode("You have been authenticated and a session has been established. Welcome to the API ". $_POST['userName']);
                }
    else{
        //Give error message that the value of auth key is incorrect
        echo json_encode("Credentials are incorrect");
        }           
}
else
{
    //Give error message that the auth key is missing
    echo json_encode("UserName or Password or both are missing");
}
?>