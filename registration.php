<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="registration.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name1" id="name1" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="uname" id="uname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="mail" id="mail" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="pno" id="pno" required>
          </div>
          <div class="input-box">
            <span class="details">Create Password</span>
            <input type="text" placeholder="Enter your password" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          <div class="input-box">
            <span class="details">State</span>
            <input type="text" placeholder="Enter Your State" name="state1" id="state1" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" value="male">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" value="female">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" value="not to say">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Register">
        </div>
        <div class="button">
          <p>Already have an account</p>
          <a class="button" href="login.php">click here to login</a>
        </div>
      </form>
    </div>
  </div>
  <?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name1 = $_POST['name1'];
        $uname = $_POST['uname'];
        $mail = $_POST['mail'];
        $pno   = $_POST['pno'];
        $pwd   = $_POST['pwd'];
        $state1= $_POST['state1'];
        $gender= $_POST['gender'];
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
    $sql = "INSERT INTO registration ( name1, uname, mail, pno, pwd, state1, gender) VALUES ( '$name1', '$uname', '$mail', '$pno','$pwd', '$state1', '$gender')";
  
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
</body>
</html>