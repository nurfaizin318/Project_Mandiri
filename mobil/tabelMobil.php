<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
    background-color: white;
}
.head{
    width: 100%;
    height:50px;
    background-color: white;
    box-shadow: 0 5px 10px rgba(207,216,220 ,0.6);
    line-height: 20px;

    
}
.head ul li {
    list-style: none;
    font-size: 20px;
    padding:10px;   
    display:inline-block;
    float:right;
}
.head a{
    margin-right: 50px;
    text-decoration: none;
    color:#78909C;   
}
table{
    width:100%;
}
.content{
    margin:auto;
    margin-top: 29px;

}
td {
    width:200px;
    height: 30px;

}
button{
    background-color: #4CAF50;
    border:none;
    color:white;
    text-align:center;
    font-size: 12px;
    width: 90px;
    height:25px;
    margin:5px;
    border-radius: 5px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="head">
    <ul>
      <li><a href="/mandiri/index.php">sewa</a></li>
      <li><a href="/mandiri/pelanggan/pelanggan.php">Penyewa</a></li>
      <li><a href="/mandiri/mobil/mo-bil.php">mobil</a></li>
      <li><a href="">Sopir</a></li>
      <li><a href="/mandiri/pengembalian/pengembalian.php">pengembalian</a></li>
      <li style="float: left;font-size: 35px;color: gray;">Rental-Mobil</li>

    </ul>
  </div>
  <div class="content">
    <table border="1">
        <th>Id Penyewa</th>
        <th>Nama</th>
        <th>No Ktp</th>
        <th>Jenis Kelamin</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>pilihan</th>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td><a href="/mandiri/mobil/editMobil.php"><button >edit</button></a><a href="#"><button style="background-color: red">Hapus</button></a></td>
        </tr>
        

    </table>
  </div>
</body>
</html>