<!DOCTYPE html>

<html>
<head>
    <title>Login Page</title>
        <link rel="stylesheet" href="login.css">
</head>

    <body class="bg">
        <center><h1 class="a1">R.V.R & J.C college of engineering Student Login</h1></center>
         <div class="loginbox">
            <h1 style="padding-top:-10px">Login Here</h1>
            <br>
         <form action="#" method="POST">
                <p>Username</p>
                <input type="text" name= "uname" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="password" name="pwd" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="submit" name="submit" value="Login"><br>
                <a href="forget.html">Forget your Password?</a><br>
                <a href="registration.html" target="_blank">Don't have account?</a>
          </form>
        </div>
        <?php
session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM registration where uname='$uname' and pwd='$pwd'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["uname"] = $row['uname'];
        $_SESSION["pwd"]=$row['pwd'];
        header("Location: index.php"); 
    }
    else
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Invalid username/ password")';  
        echo '</script>';  
    }
}
?>
</body>
</html>