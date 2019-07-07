<?php  
session_start(); 

$con = mysqli_connect("localhost", "root", "", "rentalmobil");
@$id=$_GET['id'];
$status="";
$sewa=600000;
$tglKembali=0;
$lamaSewa="";
$lama='';
$bayar=null;
$sub_total=null;
$uangMuka=null;
$sisaBayar=null;
$kembalian=null;
$id_tran="";
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['lama_sewa'])){
    $_SESSION['pos']=$_POST;
    $id_tran=$_POST['id_transaksi'];
    $tglKembali=$_POST['tanggal_kembali'];
    $lama=$_POST['lama'];   
    $bayar = $sewa*$lama;
    $tglKembali= date('d-m-Y', strtotime("+$lama days"));
}

echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);
$sql = "SELECT * FROM kendaraan";
$result = mysqli_query($con,$sql)or die(mysqli_error());
$querySupir="select * from supir";
$resultSupir=mysqli_query($con,$querySupir)or die(mysqli_error());

 if(isset($_POST['submit'])){
    $_SESSION['pos']=$_POST;
     $bayar=$_POST['bayar'];
    $id_transaksi=$_POST['id_transaksi'];
    $uangMuka=$_POST['uangMuka'];
    $lama=$_POST['lama'];
    $tglKembali=$_POST['tanggal_kembali'];

    if($uangMuka < $bayar){
        $sub_total =abs($bayar-$uangMuka);
        $kembalian=0;
    }
    else{
        $kembalian=abs($uangMuka-$bayar);

    }
}

if(isset($_SESSION['pos'])):
    $id_tran  =$_SESSION['pos']['id_transaksi'];
    $lamaSwa=$_SESSION['pos']['lama'];
    $kemb	=$_SESSION['pos']['kembalian']; 
    $bayar_ses=$_SESSION['pos']['bayar'];
else:
$id_tran=0;
$lamaSwa=0;
$kemb=0;
$kemb=0;
$tgl_kemb=null;
$bayar_ses=0;
endif; 
if(isset($_POST['simpan'])){
    $id_transaksi=$_POST['id_transaksi'];
    $id_mobil=$_POST['id_mobil'];
    $id_supir=$_POST['id_supir'];
    $tanggal_sewa=$_POST['tanggal_sewa'];
    $lama_sewa=$_POST['lama'];
    $tanggal_kembali=$_POST['tanggal_kembali'];
    $bayar_sewa=$_POST['bayar'];
    $uang_muka=$_POST['uangMuka'];
    $sisa_bayar=$_POST['sisaBayar'];
    $kembalian=$_POST['kembalian'];
    $uangMuka=$_POST['uangMuka'];

    if($uang_muka < $bayar_sewa){
        $sub_total =abs($bayar_sewa-$uang_muka);
        $kembalian=0;

    }
    else{
        $kembalian=abs($uang_muka-$bayar_sewa);

    }


    $query = "INSERT INTO transaksi (ID_transaksi,ID_customer,ID_mobil,ID_supir,tanggal_sewa,lama_sewa,tanggal_kembali,bayar,uang_muka,sisa_bayar,kembalian) 
VALUES ('$id_transaksi',$id,'$id_mobil','$id_supir','$tanggal_sewa','$lama_sewa','$tanggal_kembali','$bayar_sewa','$uang_muka','$sisa_bayar','$kembalian')
";
    $result = mysqli_query($con,$query);
    mysqli_close($con);

    if(!$result){
        echo "data not Inserted";
    }
    else{
        
    }
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
            background-color: #E91E63;
            color: white;
            border-radius: 5px;
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
                    <li class="dropdown"><a href="/mandiri/cari.php">Insert</a>
                        <ul class="isi-dropdown">
                        <li><a href="/mandiri/cari.php">cari</a></li>
                        <li><a href="/mandiri/tabelTransaksi.php">tabel</a></li>

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
                        <li><a href="/mandiri/kembalian.php">kembalian</a></li>
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
            <table style="width:70%">
                <tr>
                    <form method="post">
                        <td> Id Transaksi :<br><br><input type="text" name="id_transaksi"
                                value=<?php echo $id;?> ></td>

                        <td> Id mobil :<br><br><select name="id_mobil" style="width:100%;height:50px;font-size:20px;">
                                <?php while($row = mysqli_fetch_assoc($result) ) { 
      $idMobil=$row['ID_mobil'];   
      echo "<option style='color:'black'; value='$idMobil'>".$idMobil."</option>";
  }
      ?> 
                <tr>
                    </select></td>
                    <td>Id Sopir :<br><br><select  name="id_supir" style="width:75%;height:50px;font-size:20px;">

                            <?php while($row = mysqli_fetch_assoc($resultSupir) ) { 
               $id=$row['ID_supir'];   
               echo "<option style='color:'black'; value='$id'>".$id."</option>";
           }
               ?>
                        </select>
                    </td>
                    <td>Tanggal sewa :<br><br><input type="text" name="tanggal_sewa"
                            value=<?php $tgl=date('d-m-Y'); echo $tgl; ?>>
                    </td>
                </tr>
                <tr>
                    <td>Lama Sewa:<br><br><input style="width:600px" type="text" name="lama"
                            value=<?php echo $lamaSwa  ; ?>><button name="lama_sewa">chek</button></td>

                    <td>Tanggal Kembali:<br><br><input type="text" name=" tanggal_kembali"
                             value=<?php echo $tglKembali; ?>>
                </tr>
                <tr>
                    </td>
                    <td>Bayar:<br><br><input type="text" name="bayar"value=<?php echo $bayar; ?>></td>

                    <td>Uang Muka:<br><br><input type="text" name="uangMuka" value=<?php echo  $uangMuka; ?>></td>

                </tr>
                <tr>
                </tr>
                <tr>
                <td>Sisa Bayar<br><br><input type="text" name="sisaBayar" value=<?php echo $sub_total; ?>></td>
                    <td>Kembalian<br><br><input type="text" name="kembalian" value=<?php echo $kembalian ;?>></td>
                </tr>
                <tr>
                    <td>


                        <button name="submit">submit<button style="margin-left:20px;" name="simpan">simpan
                    </td>
                </tr>
                </form>
            </table>
        </div>
</body>

</html>