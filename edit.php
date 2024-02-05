<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            margin: 0;
        }

        .header {
            background-color: black;
            color: white;
            padding: 1%;
            text-align: center;
        }

        .main {
            width: 80%;
            border: 1px solid black;
            margin-top: 1% auto;
            padding: 3%;
        }

        footer {
            background-color: black;
            color: white;
            padding: 1%;
            text-align: center;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 0.5%;
        }
    </style>
    <title>INSERT AND UPDATE IN PHP AND SQL</title>
</head>

<body>
    <header class="header">
        <h1>INSERT UPDATE AND DELETE</h1>
    </header>

    <div class="main">
        <h2>Updating First and Last names</h2>

        <form method="post" action="edit_action.php">
            <table>
                <tr>
                    <?php
                    //creating value fromm url 
                    $id = $_GET['id'];

                    // Connect to the database
                    $conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');

                    // Select database
                    $select_db = mysqli_select_db($conn, 'php-prac') or die('Unable to select database');
                    #query to select DATA
                    $sql = "SELECT * from users where id=" .$id;

                    // execute the query
                    $result = mysqli_query($conn, $sql);

                    if ($result == true) {
                        $row = mysqli_fetch_assoc($result);
                        $first_name = $row['first_name'];
                        $Second_name = $row['Second_name'];
                    }

                    ?>
                    <td>First Name:</td>
                    <td><input type="text" name="first_name" value="<?php echo $first_name; ?>" /></td>
                </tr>
                <tr>
                    <td>Second Name:</td>
                    <td><input type="text" name="Second_name" value="<?php echo $Second_name; ?>" /></td>
                </tr>
                <tr>
                    <td>&NonBreakingSpace; <input type="hidden" name ="id" value = <?php echo $id; ?> ></td>
                    <td><input type="submit" name="Submit" value="Update Member" /></td>
                </tr>
            </table>
        </form>
        <br />
        <hr />
        <br />
    </div>

    <footer class="Footer">
        &copy; 2024 All right reserved cyiza
    </footer>
</body>

</html>
