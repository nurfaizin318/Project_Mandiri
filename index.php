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
    <link rel="stylesheet" href="./css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div  class="head">
    
     <ul>
        <li><a href="/mandiri/index.php">sewa</a></li>
        <li><a href="/mandiri/page/pelanggan.php">pelanggan</a></li>
        <li><a href="/mandiri/page/mo-bil.php">mobil</a></li>
        <li><a href="/mandiri/page/pengembalian.php">pengembalian</a></li>
        <li>rental mobil</li>
      
     </ul>
     <div class="transaksi">
        <h1></h1>
     </div>
  </div>
  <div class="content">
    <table>

    </table>
  </div>
    
</body>
</html>