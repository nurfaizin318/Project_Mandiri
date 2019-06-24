<?php  
$status="";
$sewa=600000;
$tglKembali="";
$lama=null;
$bayar=null;
$total=null;
$uangMuka=null;
$sisaBayar=null;
$kembalian=null;
$id_transaksi=null;
$con = mysqli_connect("localhost", "root", "", "rentalmobil");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);
$sql = "SELECT * FROM kendaraan";
$result = mysqli_query($con,$sql)or die(mysqli_error());
$querySupir="select * from supir";
$resultSupir=mysqli_query($con,$querySupir)or die(mysqli_error());
if(isset($_POST['chekId'])){
    $ktp=$_POST['id1'];

    $sql="select * from customer where no_ktp='$ktp'";
    $hasil=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($hasil);
    $id=$row['ID_customer'];
    if($row>0){
        $status=$id;
    }
    else{
        $status="kosong";
    }
}
 if(isset($_POST['submit'])){
    $lama=$_POST['lama'];
    $id_transaksi=$_POST['id_transaksi'];
    $tglKembali= date('d-m-Y', strtotime("+$lama days"));
    $bayar = $sewa*$lama;
    $uangMuka=$_POST['uangMuka'];
    $total =$bayar-$uangMuka;
    if($uangMuka < $bayar){
        $total=0;
        $kembalian=abs($uangMuka-$bayar);
    }
  
}
if(isset($_POST['simpan'])){
    $id_transaksi=$_POST['id2'];
    $id_customer=$_POST['id2'];
    $id_mobil=$_POST['id_mobil'];
    $tanggal_sewa=$POST['tanggal_sewa'];
    $lama_sewa=$_POST['lama'];
    $tanggal_kembali=$_POST['tanggal_kembali'];
    $bayar=$_POST['bayar'];
    $uang_muka=$_POST['uang_muka'];
    $sisa_bayar=$_POST['sisabBayar'];
    $kembalian=$_POST['kembalian'];

    $query = "INSERT INTO `transaksi`(`ID_transaksi`, `ID_customer`, `ID_mobil`,`tanggal_sewa`,`lama_sewa`,`tangal_kembali`,`bayar`,`uang_muka`,`sisa_bayar`,`kembalian`) VALUES ('$id_transaksi','$id_customer','$id_mobil','$tanggal_sewa','$lama_sewa','$tangal_kembali','$bayar','$uang_muka','$bayar','$kembalian')";
    $result = mysqli_query($link,$query);
    if(!$result)
    {
    echo "data not inserted";
    }

    mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
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

        .content table {
            width: 80%;
            margin-left: 10%;
            font-size: 20px;
            position: absolute;

        }

        td input[type='text'] {
            width: 700px;
            height: 50px;
            border-radius: 5px solid;
            font-size: 20px;
        }

        td {
            height: 50px;
            padding: 20px;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 17px;
        }
    </style>
</head>
<body>
<div class="head">
        <header class="header">
            <div class="menu-malasngoding">
                <ul>
                     <li class="dropdown"><a href="/mandiri/index.php">Home</a>
                        <ul class="isi-dropdown">
                            <li><a href="/mandiri/mobil/tabelMobil.php">tabel</a></li>
                           
                        </ul>
                    </li>

                    <li class="dropdown"><a href="/mandiri/mobil/mo-bil.php">mobil</a>
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
    <div class="content">
        <table >
        <tr>
<form  method="post">       
<td> Id Transaksi :<br><br><input type="text" name="id_transaksi" value<?php echo $id_transaksi;?> ></td>
<td> Id Customer :<br><br>
<input type="text" name="id1" style="width:320px;height:50px;">
<button style="height:50px;" name="chekId" >check</button>

<input type="text" name="id2" style="width:250px;height:50px;" value=<?php echo $status; ?>>
</td>
</tr>
            <tr>

                <td> Id mobil :<br><br><select name="id_mobil" style="width:100%;height:50px;font-size:20px;">
  <?php while($row = mysqli_fetch_assoc($result) ) { 
      $id=$row['ID_mobil'];   
      echo "<option style='color:'black'; value='mobil' ".$id."'>".$id."</option>";
  }
      ?>  
</select></td>
                <td>Id Sopir :<br><br><select style="width:100%;height:50px;font-size:20px;">
           
           <?php while($row = mysqli_fetch_assoc($resultSupir) ) { 
               $id=$row['ID_supir'];   
               echo "<option style='color:'black'; value='mobil' ".$id."'>".$id."</option>";
           }
               ?>  
         </select></td>
            </tr>   

            </tr>
            <tr>

                <td>Tanggal sewa :<br><br><input type="text" name="tanggal_sewa" value=<?php $tgl=date('d-m-Y'); echo $tgl; ?>>
 </td>
                <td>Lama Sewa:<br><br><input type="text" name="lama" value=<?php echo $lama ;?>></td>
            </tr>
            <tr>

                <td>Tanggal Kembali:<br><br><input type="text" name=" tanggal_kembali"value=<?php echo $tglKembali; ?>></td>
                <td>Sisa Bayar<br><br><input type="text" name="sisaBayar" value=<?php echo $total ;?>></td>
                
            </tr>
            <tr>
            <td>Bayar:<br><br><input type="text" value=<?php echo $bayar; ?>></td>
            </tr>
            <tr>
            <td>Uang Muka:<br><br><input type="text" name="uangMuka" value=<?php echo  $uangMuka; ?> ></td>
                <td>Kembalian<br><br><input type="text" name="kembalian" value=<?php echo $kembalian;?> ></td> 
            </tr>
            <tr>
                <td>
           

                    <button  name="submit">submit<button style="margin-left:20px;" name="simpan">simpan
                </td>
            </tr>
            </form>
        </table>
    </div>
    </body>

</html>