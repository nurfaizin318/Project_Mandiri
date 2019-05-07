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
  <style>
    .content{
    width:100%;
    height:750px;
    background:white;
    box-shadow: 0 10px 10px 20px rgba(223, 224, 224, 0.24);
    margin-top: -10px;
}
  .table{
    margin-left: 20%;
    font-size: 30px;
    
  }
  .table input {
    width:200px;
    height:30px;
    font-size: 20px;
    border-radius: 5px;
    border : 1px solid #455A64;
  }
  .table td{
    padding :10px;
    color: #455A64;
  }

</style>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div class="head">
    <ul>
      <li><a href="/mandiri/index.php">sewa</a></li>
      <li><a href="/mandiri/page/pelanggan.php">pelanggan</a></li>
      <li><a href="/mandiri/page/mo-bil.php">mobil</a></li>
      <li><a href="/mandiri/page/pengembalian.php">pengembalian</a></li>
      <li style="float: left">Rental-Mobil</li>

    </ul>
  </div>
  <div class="content">
      <h1 style="margin-left: 50%;color: #78909C;padding-top: 20px">
          Transaksi
        </h1>
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text"></td>
              </tr> 
               <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td>:</td>
                    <td><input type="text"></td>
                  </tr> <tr>
                      <td>No Telepon</td>
                      <td>:</td>
                      <td><input type="text"></td>
                    </tr>
        </table>
  </div>
</body>

</html>