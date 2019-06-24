<?php 
@$id=$_GET['id'];
$con = mysqli_connect("localhost", "root", "", "rentalmobil");

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM kendaraan WHERE ID_mobil='$id'";
$result = mysqli_query($con,$sql)or die(mysqli_error($sql));

while($row = mysqli_fetch_assoc($result) ) { 
    $IDmobil=$row['ID_mobil'];
    $type=$row['type'];
    $merk=$row['merk'];
    $warna=$row['warna'];
    $tahun=$row['tahun'];
    $harga=$row['harga'];
    $plat=$row['no_pol'];
    $status=$row['status'];

}

if(isset($_POST['update-mobil'])){
     $ID=$_POST['id'];
     $merkMobil=$_POST['merk'];
     $typeMobil=$_POST['type'];
     $warnaMobil=$_POST['warna'];
     $tahunMobil=$_POST['tahun'];
     $hargaMobil=$_POST['harga'];
     $platMobil=$_POST['plat'];
     $statusMobil=$_POST['status'];
    
    $query = "UPDATE Kendaraan SET type='$typeMobil' ,merk='$merkMobil',warna='$warnaMobil',tahun='$tahunMobil',harga='$hargaMobil',no_pol='$platMobil',status='$statusMobil' WHERE ID_mobil='$ID'";
    $result= mysqli_query($con,$query);
    if(!$result){
        echo "eror";
    }
    if($query)
            header('Location: /mandiri/mobil/tabelMobil.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body{
    background: white;
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
.content table{
    width:80%;
    margin: auto;
    font-size: 20px;
    
}
td input[type='text']{
    width: 100%;
    height:70%;
    border-radius: 5px solid;
    font-size: 20px;
}
td{
    height: 50px;
    padding: 20px;
}
button{
    background-color: #4CAF50;
    border:none;
    color:white;
    padding: 15px 32px;
    text-align:center;
    font-size: 17px;
}
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <header class="header">
            <div class="menu-malasngoding">
                <ul>
                     <li class="dropdown"><a href="/mandiri/index.php">Home</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/mobil/tabelMobil.php">tabel</a></li>
                           
                        </ul>
                    </li>                    <li class="dropdown"><a href="/mandiri/mobil/mo-bil.php">mobil</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/mobil/tabelMobil.php">tabel</a></li>
                           
                        </ul>
                    </li>
                                    <li class="dropdown"><a href="/mandiri/pelanggan/pelanggan.php">penyewa</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/pelanggan/tabel-pelanggan.php">tabel</a></li>
                           
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
    <h1 style="margin-left:50%;color: #78909C">Mobil</h1>
    <div class="content">
       <table >
        <form action="#" method="POST">
        <tr>
            
            <td> Id Mobil :<br><br><input name="id" type="text" value="<?php echo $IDmobil; ?>"></td>
        </tr>
        <tr>
            
            <td> Type :<br><br><input name="type" type="text" value="<?php echo $type; ?>"></td>
        </tr>
        <tr>
            
            <td> Merk :<br><br><input name="merk" type="text" value="<?php echo $merk; ?>"></td>
        </tr>
        <tr>
          
            <td>Tahun :<br><br><input name="tahun" type="text" value="<?php echo $tahun; ?>"></td>
        </tr>
        <tr>
          
          <td>harga :<br><br><input name="harga" type="text" value="<?php echo $harga; ?>"></td>
      </tr>
  
    
<tr>
    
    <td>Plat Nomer :<br><br><input name="plat" type="text" value="<?php echo $plat; ?>"></td>
</tr>
    <tr>
      
        <td>Warna :<br><br><input name="warna" type="text" value="<?php echo $warna; ?>"></td>
    </tr>
    <tr>
      
      <td>Status :<br><br><input name="status" type="text" value="<?php echo $status; ?>"></td>
  </tr>
   
        <tr>
            <td>
    <button type="submit" name="update-mobil">Update
            </td>
        </tr>
        </form>
       </table>
    </div>
</body>
</html>