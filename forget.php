<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="registration.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="forget.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Enter Registered Phone Number</span>
            <input type="text" placeholder="Enter your number" name="pno" id="pno" required>
          </div>
          <div class="input-box">
            <span class="details">Create New Password</span>
            <input type="text" placeholder="Enter your password" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>

        </div>
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Change Your Password">
        </div>
        <div class="button">
          <p>click here to login</p>
          <a class="button" href="login.php">click here to login</a>
        </div>
      </form>
    </div>
    <?php
session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'database.php';
        $pno = $_POST['pno'];
        $pwd = $_POST['pwd'];
    $sql=mysqli_query($conn,"SELECT * FROM registration where pno='$pno' ");
    $row  = mysqli_fetch_array($sql);
    $sql=mysqli_query($conn,"SELECT * FROM registration where pno='$pno' ");
   if (mysqli_num_rows($sql) > 0) {
    $sql1=mysqli_query($conn,"UPDATE registration SET pwd='$pwd' where  pno='$pno'");
    if($sql1)
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Password Changed Successfully")';  
        echo '</script>';  
    }
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Invalid Mobile Number")';  
    echo '</script>';  
}

    }
?>
</body>
</html>













