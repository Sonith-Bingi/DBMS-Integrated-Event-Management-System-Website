<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
     <title>HOME</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="index2.php" style="background-color:DodgerBlue; "> ENTER DETAILS</a>
</body>
<style>
body {
  background-image: url('https://image.freepik.com/free-vector/concert-stage-with-screen-spotlights_107791-2092.jpg');
}
</style> 
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>