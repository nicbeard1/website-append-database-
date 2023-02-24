<!DOCTYPE html>
<html lang="en">

<head>
    <title>TLOJ(test site) - Start Bootstrap Template</title>
</head>
 
<body>
    <center>
        <?php
 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "appendtabletest";
        $conn = mysqli_connect("localhost", "root", "", "appendtabletest");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $alias = $_REQUEST['alias'];
        $powers =  $_REQUEST['powers'];
        $role = $_REQUEST['role'];
        
         
        
        $sql = "INSERT INTO tloj  VALUES ('$name',
            '$alias','$powers','$role')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $alias\n "
                . "$powers\n $role");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>

        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=appendtabletest&table=tloj">view database</a></li>
    </center>
</body>
 
</html>