<!DOCTYPE html>
<html>
<style>
    *{
        margin: 0;

    }
.header{
    background-color: black;
    color: white;
    padding: 1%;
    text-align:center;
} 
.main{

    width:80%;
    border:1px solid black;
    margin-top:1% auto;
    padding:3%;


}
footer{
    background-color: black;
    color: white;
    padding: 1%;
    text-align:center;
}
table,tr,th, td{

    border: 1px solid black;
    border-collapse: collapse;
    padding: 0.5%;




}



</style>
<title> PHP and SQL</title>

</head>

<body>
    <header class="header">
        <h1 style="font-family: 'Gill Sans Extrabold';">INSERT UPDATE & DELETE</h1>

    </header>

    <div class="main">
        <h2>Adding First name</h2>
        <form method = "post" action="add_action.php">
            <table>
                <tr>

                 <td>First Name:</td>
                 <td><input type="text" name="first_name" placeholder="first_name"/></td>

            </tr>

            <tr>

                 <td>Second Name:</td>
                 <td><input type="text" name="Second_name" placeholder="second_name"/></td>

            </tr>
            <tr>
                <td>&NonBreakingSpace;</td>
                <td><input type = "submit" name ="Submit" value ="Add Member"/></td>


            </tr>
            </table>
        </form>
        <br/>
        <hr/>
        <br/>

        <h2>Listing all the Names</h2>

        <table>
            <tr>
                <td>S.N</td>
                <td>First Name</td>
                <td>Second Name</td>
                <td>Actions</td>
            </tr>
            <?php


                    // Connect to the database
                    $conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');

                    // Select database
                    $select_db = mysqli_select_db($conn, 'php-prac') or die('Unable to select database');

                    $sql = "SELECT * FROM users ";

                    $result = mysqli_query($conn,$sql) or die("Query execution failed");
            
                    $sn =1;
            
                    if ($result == true) {

                        while ($row=mysqli_fetch_assoc($result)) {

                            $id=$row['id'];
                            $first_name = $row['first_name'];
                            $Second_name= $row['Second_name'];
                            ?>
                                
                              <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo($first_name) ?></td>
                                <td><?php echo($Second_name) ?></td>
                                <td>
            
                                    <a href="edit.php?id=<?php echo $id; ?>"><button type="button">UPDATE</button></a>
                                    <a href="delete.php?id=<?php echo $id; ?>"><button type = "button">DELETE</button></a>
                                </td>
                            </tr>
                            
                            <?php
                        }
                        
                    } 
            
            ?>





            <!-- <tr>
                <th>1.</th>
                <th>Cyiza</th>
                <th>Ndoli</th> 
                <td>
                    <a href="#"><button type = "button">UPDATE</button></a>
                    <a href="#"><button type = "button">DELETE</button></a>
                </td>
            </tr> -->




        </table>
    </div>

    <footer class="Footer">
        &copy; 2024 All right reserved cyiza

    </footer>
</body>

</html>