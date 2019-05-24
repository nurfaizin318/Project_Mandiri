<?php
$con = mysqli_connect("localhost", "root", "", "rentalmobil");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);

$sql = "SELECT * FROM kendaraan";

$result = mysqli_query($con,$sql)or die(mysqli_error());


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM kendaraan WHERE ID_mobil =12");

    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $address = $n['address'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
    background-color: white;
}
.menu-malasngoding {
            background-color: white;
            box-shadow: 0 5px 10px rgba(207, 216, 220, 0.3);
            height: 60px;
        }

        .menu-malasngoding ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .menu-malasngoding>ul>li {
            float: right;
        }


        .menu-malasngoding li a {
            display: inline-block;
            color: gray;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 23px;
            margin-right: 20px;
        }

        .menu-malasngoding li a:hover {
            background-color:#E91E63;
            color:white;
            border-radius:5px;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown:hover .isi-dropdown {
            display: block;
            
        }

        .isi-dropdown a:hover {
            color: #fff !important;
        }

        .isi-dropdown {
            position: absolute;
            display: none;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            background-color: #f9f9f9;
        }

        .isi-dropdown a {
            color: #3c3c3c !important;
        }

        .isi-dropdown a:hover {
            color: #232323 !important;
            background: #f3f3f3 !important;
        }
        table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 
}

td, th {  
    border: 1px solid transparent; /* No more visible border */
    height: 70px; 
    transition: all 0.3s;
    text-align:center;

}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
    font-size:30;
}

td {  
    background: #FAFAFA;
    text-align: center;

}
table{
    width:90%;
}
.content{
    margin:auto;
    margin-top:15px;
}
.content table{
    margin:auto;
}
tr td{
    height:60px;
}
#btnEdit{
    background:#2196F3;
    color:white;
    width:100px;
    height:40px;
    border:none;
    margin:auto;
    border-radius: 7px;
    font-size: 18px;
    
}
#btnHapus{
    background:#FF5722;
    color:white;
    width:100px;
    height:40px;
    border:none;
    margin-left:20px;
    border-radius: 7px;
    font-size: 18px;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel</title>
</head>
<body>
<div class="head">
        <header class="header">
            <div class="menu-malasngoding">
                <ul>
                    <li><a href="/mandiri/index.php">Home</a></li>
                    <li class="dropdown"><a href="/mandiri/mobil/mo-bil.php">mobil</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/mobil/tabelMobil.php">tabel</a></li>
                            <li><a href="/mandiri/mobil/editMobil.php">edit</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/mandiri/pelanggan/pelanggan.php">penyewa</a>
                        <ul class="isi-dropdown">
                            <li><a href="#">tabel</a></li>
                            <li><a href="#">edit</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/mandiri/pengembalian/pengembalian.php">pengembalian</a>
                                <ul class="isi-dropdown">
                                    <li><a href="#">tabel</a></li>
                                    <li><a href="#">edit</a></li>
                                </ul>
                            </li>
                    </li>
                    <li class="dropdown"><a href="/mandiri/sopir/sopir.php">sopir</a>
                        <ul class="isi-dropdown">
                            <li><a href="#">Sub Menu 1</a></li>
                            <li><a href="#">Sub Menu 2</a></li>
                        </ul>
                    </li>
                <h1 style="line-height:10px;">Rental Mobil</h1>
    
                </ul>
            </div>
        </header>
  <div class="content">
  <table>
  <th>ID mobil </th>
  <th>type </th>
  <th>merek </th>
  <th>warna </th>
  <th>tahun </th>
  <th>harga </th>
  <th>plat nomor </th>
  <th>Status </th>
  <th>Option</th>
  <?php while($row = mysqli_fetch_assoc($result) ) { 
      $id=$row['ID_mobil'];
      $type=$row['type'];
      $merk=$row['merk'];
      $warna=$row['warna'];
      $tahun=$row['tahun'];
      $harga=$row['harga'];
      $plat=$row['no_pol'];
      $status=$row['status'];
      
      ?>
   
    <tr>  
  <td><?php echo $id; ?></td>
  <td><?php echo $type; ?></td>
  <td><?php echo $merk; ?></td>
  <td><?php echo $warna; ?></td>
  <td><?php echo $tahun ?></td>
  <td><?php echo $harga; ?></td>
  <td><?php echo $plat; ?></td>
  <td><?php echo $status; ?></td>
  <td><?php echo "<a href=/mandiri/mobil/editMobil.php?id=".$row['ID_mobil']."><button id='btnEdit' name='edit'>edit</button><button id='btnHapus' name='hapus'>hapus</button> </a>" ?></td>
  </tr>
  <?php } ?>
  </div>
 
</body>
</html>