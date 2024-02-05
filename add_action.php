<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Uncomment the line below if you want to check if the script is running
// echo "Wabula kitufu";

// Get values from the UI
$first_name = $_POST['first_name'];
$Second_name = $_POST['Second_name'];

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');

// Select database
$select_db = mysqli_select_db($conn, 'php-prac') or die('Unable to select database');

// Query to insert data into our table
$sql = "INSERT INTO users (first_name, Second_name) VALUES ('$first_name', '$Second_name')";

// Execute the query
$result = mysqli_query($conn, $sql) or die('Query execution failed');

// Check if the query was successful
if ($result == true) {

// echo "Success!";
// redirect to homepage

   header('location:index.php');


} else {
    echo "Failed to add member";
}

// Close the database connection (optional but good practice)
mysqli_close($conn);
?>
