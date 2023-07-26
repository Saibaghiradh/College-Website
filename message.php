<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name1 = $_POST['name1'];
        $mail = $_POST['mail'];
        $msg   = $_POST['msg'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myproject";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contact ( name1, mail, msg) VALUES ( '$name1', '$mail', '$msg')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Registered Successfully")';  
        echo '</script>';  
       
    }

    // close connection
    mysqli_close($con);

?>