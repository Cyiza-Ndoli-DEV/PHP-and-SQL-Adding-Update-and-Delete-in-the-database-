  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');



// Get values from the UI
// $id = $_POST['id'];
// $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
// $Second_name = isset($_POST['Second_name']) ? $_POST['Second_name'] : '';

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$Second_name = $_POST['Second_name'];

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');

// Select database
$select_db = mysqli_select_db($conn, 'php-prac') or die('Unable to select database');

// Query to update data in the table
$sql = "UPDATE users SET first_name = '$first_name', Second_name = '$Second_name' WHERE id = $id ";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result == true) {
    // Redirect to the homepage
    header('location:index.php');
} else {
    echo "Failed to update member";
}

// Close the database connection
mysqli_close($conn);

?>