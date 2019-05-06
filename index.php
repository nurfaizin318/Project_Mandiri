<?php 
$servername = "localhost";
$database = "lat_php";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql="SELECT *  FROM latihan";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    
    }
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
</head>
<body>
  <div class="heading">
     <ul>
        <li><a href="/index.php">sewa</a></li>
        <li><a href="../mandiri//pelanggan.php">pelanggan</a></li>
        <li><a href="../mandiri//mo-bil.php">mobil</a></li>
        <li><a href="/pengembalian.php">pengembalian</a></li>
      
     </ul>
  </div>
    
</body>
</html>