
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
    background-color: white;
}
.head{
    width: 100%;
    height:50px;
    background-color: white;
    box-shadow: 0 5px 10px rgba(207,216,220 ,0.2);
    line-height: 20px;

    
}
.head ul li {
    list-style: none;
    font-size: 20px;
    padding:10px;   
    float:right;
}
.head ul li:hover .drop a{
    display:block;
}
.drop{
    margin-top: 25px;
    background-color: white;
    box-shadow: 0 5px 10px rgba(207,216,220 ,0.2);
}
.drop a{
    display:none;
    width:70px;
    text-align: center;
    margin-top: 10px;
}
.head a{
    margin-right: 50px;
    text-decoration: none;
    color:#78909C;   
}
.content table{
    width:80%;
    margin: auto;
    font-size: 20px;
    
}
td input[type='text']{
    width: 700px;
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
</head>

<body>
  <div class="head">
    <ul>
      <li><a href="/mandiri/index.php">sewa</a></li>
      <li><a href="/mandiri/pelanggan/pelanggan.php">Penyewa</a>
         <div class="drop">
            <a href="">Table</a>
            <a href="">Edit</a>
         </div>
      <li><a href="/mandiri/mobil/mo-bil.php">mobil</a></li>
      <li><a href="">Sopir</a></li>
      <li><a href="/mandiri/pengembalian/pengembalian.php">pengembalian</a></li>
      <li style="float: left;font-size: 35px;color: gray;">Rental-Mobil</li>

    </ul>
  </div>
  <div class="content">
       <table>
        <form action="#" method="GET"></form>
        <tr>
            
            <td> Id Transaksi :<br><br><input type="text" ></td>
            <td> Id Customer  :<br><br><input type="text" ></td>
</tr>
        <tr>
            
            <td> Id mobil :<br><br><input type="text" ></td>
            <td>Id Sopir :<br><br><input type="text" ></td>
        </tr>
   
</tr>
<tr>
    
    <td>Tanggal sewa :<br><br><input type="text" ></td>
    <td>Lama Sewa:<br><br><input type="text"></td>
</tr>
    <tr>
      
    <td>Tanggal Kembali:<br><br><input type="text"></td>
    <td>Uang Muka:<br><br><input type="text"></td>
  </tr>
  <tr>
      
      <td>Sisa Bayar<br><br><input type="text"></td>
      <td>Kembalian<br><br><input type="text"></td>
    </tr>
        <tr>
            <td>
    <button type="submit" name="sub">submit
            </td>
        </tr>
       </table>
    </div>
</body>

</html>