<?php
$insert = false;
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
      die("connection to this database faild due to " . mysqli_connect_error());
  }
 // echo "success connecting to the db";

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  
  $sql = "INSERT INTO `project`.`project` ( `name`, `phone`, `Email`, `password`) VALUES ('$name', '$phone', '$Email', '$password');";
  //echo $sql;

  if($con->query($sql) == true){
    //echo "successfully inserted";
    $insert = true;

  }
  else{
    echo "ERROR: $sql <br> $con->error";
    
  }
  
  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INT301 PROJECT</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="lpu" >
    <div class="container">
        <h1> Registration Form</h1>
        <p>INT301 PROJECT</p>
        <?php
        if($insert == true){
       echo "<p class='submitmsg'>Registration successful.....</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Name">
            <input type="text" name="phone" id="phone" placeholder="Enter Phone">
            <input type="text" name="Email" id="Email" placeholder="Enter Email">
            <input type="password" name="password" id="passward" placeholder="Enter Password">
            <button class="btn">Submit</button>
            
            
      
            
            

        </form>
    </div>
    <script src="index.js"></script>
    
    
    
</body>
</html>