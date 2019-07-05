<?php 

$con = mysqli_connect("localhost", "root", "", "rentalmobil");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$status="";
if(isset($_POST['submit'])){
    $ktp=$_POST['ktp'];

    $sql=" select * from customer where no_ktp='$ktp'";
    $hasil=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($hasil);
    $id=$row['ID_customer'];

    if( $row > 0 ){
        header("Location:/mandiri/index.php?id='$id'");
       
    }
    else{
        $status="kosong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .content{
        width:90%;
        height:800px;
        background: rgba(0,0,0,0.1);
        margin:auto;
    }
    input {

        width:400px;
        height:40px;
        font-size: 20px;
        margin-left:100px;
        
    }
    
    .form{
        width:700px;
        height:400px;
        margin:auto;
        line-height: 500px;
    }
    button{
      width:100px;
      height:45px;
      font-size: 20px;
    }
    .id{
        width:700px;
        height:300px;
        margin-top:-200px;
        font-size:50px;
        color:white;
    }
    .id h1{
        margin-left:150px;
        color:black;
        line-height:-200px;
    }
  
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cari</title>
</head>
<body>
    <div class="content">
    <a href="mandiri"></a>
    <a href="/mandiri/tabelTransaksi.php">Home</a>
        <div class="form">
            <form  method="post" action="">
                <input type="text" name="ktp" placeholder="masukkan nomer ktp">
                <button name="submit">search</button>
            </form>
            <div class="id">
            <h1><?php echo $status; ?></h1>

            </div>
        </div>
    </div>
</body>
</html>