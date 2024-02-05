<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// echo 'delete page';

// Get the 'id' parameter from the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Check if 'id' is not empty
if (empty($id)) {
    die('Invalid or missing ID parameter');
}

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');

// Select database
$select_db = mysqli_select_db($conn, 'php-prac') or die('Unable to select database');

// SQL query to delete the record with the specified 'id'
$sql = "DELETE FROM users WHERE id = $id";

// Execute the query
$result = mysqli_query($conn, $sql) or die("Failed to delete the person");

// Check if the query was successful
if ($result == true) {
    // Redirect to the homepage
    header('location:index.php');
} else {
    echo "Failed to delete member";
}

// Close the database connection
mysqli_close($conn);
?>





<!-- <?php
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
 
//echo'delete page';

  $id =$_GET["$id"];

     // Connect to the database
     $conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');
     // Select database
     $select_db = mysqli_select_db($conn, 'php-prac') or die('Unable to select database');
                        

 // SQL query to delete first and secodn name 
 $sql = "DELETE from users where id = ".$id;

 $result = mysqli_query($conn, $sql) or die("Failed to delete the person");

 if ($result == true) {
    // Redirect to the homepage
    header('location:index.php');
} else {
    echo "Failed to delete member";
}
mysqli_close($conn);

?> -->