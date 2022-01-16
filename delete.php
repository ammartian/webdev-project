<?php

// Initialize the session
session_start();

// Include config file
require_once "config.php";

$ID = $_GET['comment_ID']; // get id through query string

$sql = "DELETE FROM comment WHERE comment_ID = '$ID'"; 

//$del = mysqli_query($link,"delete from comment where comment_ID = '$comment_ID'"); // delete query

if(mysqli_query($link, $sql))
{
    mysqli_close($link); // Close connection
    header("location:feedback.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>