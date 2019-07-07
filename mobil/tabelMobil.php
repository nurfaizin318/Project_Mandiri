<?php
$con = mysqli_connect("localhost", "root", "", "rentalmobil");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM kendaraan";


$result = mysqli_query($con,$sql)or die(mysqli_error());



if (isset($_POST['edit'])) {
    $ID = $_POST['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM kendaraan ");

  
        $n = mysqli_fetch_array($record);
        $IDmobil = $n['ID_mobil'];
        $merek = $n['merk'];
        $warna = $n['warna'];
        $tahun = $n['tahun'];
        $harga = $n['harga'];
        $platNomor = $n['no_pol'];
        $status=$n['status'];
}
if(isset($_POST['hapus'])){
    @$idMob=$_GET['id'];
        $query="DELETE FROM kendaraan WHERE ID_mobil='$idMob'";
        $result=mysqli_query($con,$query);
       
        if(!$result){
            echo "eror";
        }
        if($query){
            header("Location:/mandiri/mobil/tabelMobil.php");
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
                     <li class="dropdown"><a href="/mandiri/cari.php">Insert</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/tabelTransaksi.php">tabel</a></li>
                           
                        </ul>
                    </li>                    <li class="dropdown"><a href="/mandiri/mobil/mo-bil.php">mobil</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/mobil/tabelMobil.php">tabel</a></li>
                           
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/mandiri/pelanggan/pelanggan.php">penyewa</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/sopir/tabel-sopir.php">tabel</a></li>
                           
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/mandiri/pengembalian/pengembalian.php">pengembalian</a>
                                <ul class="isi-dropdown">
                                    <li><a href="/mandiri/sopir/tabel-sopir.php">tabel</a></li>
                                   
                                </ul>
                            </li>
                    </li>
                    <li class="dropdown"><a href="/mandiri/sopir/sopir.php">sopir</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/sopir/tabel-sopir.php">tabel</a></li>
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
  <td><?php echo "<a href='/mandiri/mobil/editMobil.php?id=".$id."'><button name='edit' id='btnEdit'>edit</button></a><a href=''><form action='/mandiri/mobil/tabelMobil.php?id=".$id."' method='post'> <button name='hapus' id='btnHapus' >hapus</button></form></a>" 
  ?></td>
  </tr>
  <?php 
} 
 ?>
  </div>
 
</body>
<!-- <script>
var x = document.getElementById('btnHapus');
x.onclick=()=>{
    location.reload(true)
}
</script> -->
</html>