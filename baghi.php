
<head>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
    
	    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

$search = $_POST['search'];
$department = $_POST['department'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "myproject";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from faculty where name like '%$search%' and department like '%$department%'";

$result = $conn->query($sql);

  $conn->close();
  ?>


<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>FIND YOUR STAFF</h1>
                <p>A responsive student profile page design.</p>
            </div>
        </div>
    </div>
</header>
<?php
				// LOOP TILL END OF DATA
				while($row=$result->fetch_assoc())
				{
			?>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
			
			
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="/staff/<?php echo $row["photo"] ?>" alt="student dp">
           <h3> <?php echo $row["name"]; ?> </h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Designation:</strong><?php echo $row["designation"]; ?></p>
            <p class="mb-0"><strong class="pr-1">Department:</strong><?php echo $row["department"]; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Room No</th>
                <td width="2%">:</td>
                <td><?php echo $row["room_no"] ?></td>
              </tr>
              <tr>
                <th width="30%">Qualification	</th>
                <td width="2%">:</td>
                <td><?php echo $row["qualification"] ?></td>
              </tr>
              <tr>
                <th width="30%">Mail</th>
                <td width="2%">:</td>
                <td><?php echo $row["email"] ?></td>
              </tr>
              <tr>
                <th width="30%">Students Rating</th>
                <td width="2%">:</td>
                <td>5/5</td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p><?php echo $row["description"] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
<?php
				}
			?>
     

