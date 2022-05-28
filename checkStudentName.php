<?php
// This API would return the name of the student whose student id is given
//You need to be authenticated to see this
$teamMembers = array("Deepesh"=>"2093372", "Simranjeet"=>"2102116", "Navdeep"=>"2024569", "Gurjeet"=>"2103006");
session_start();
if(isset($_SESSION['authenticated']))
{
    if($_SESSION['authenticated'] == "True")
    {
        if(isset($_GET['studentId']))
        {
            $studentId = $_GET['studentId'];

            if(array_search($studentId, $teamMembers))
            {
                echo json_encode("The name of the student whose student id is ".$studentId." is ".array_search($studentId, $teamMembers));
            }
            else {
                echo json_encode("The student id ".$studentId." is not present in the database");
            }
        }
        else {
            echo json_encode("The student id is missing");
        }    
    }
    else {
        echo json_encode("You are not authenticated! Please authenticate to get the team members list.");
    }
}
else {
    echo json_encode("You are not authenticated! Please authenticate to get the team members list.");
}
?>