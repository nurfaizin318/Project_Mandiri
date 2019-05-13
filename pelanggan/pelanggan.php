<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body{
    background: white;
}
.heading{
    width: 100%;
    height:50px;
    background-color: white;
    box-shadow: 0 5px 10px rgba(207,216,220 ,0.3);
    line-height: 20px;

    
}
.heading ul li {
    list-style: none;
    display: inline-block;
    float: right;
    font-size: 20px;
    padding:10px;
}

.heading a{
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
<div class="heading">
<ul>
      <li><a href="/mandiri/index.php">sewa</a></li>
      <li><a href="/mandiri/pelanggan/pelanggan.php">Penyewa</a></li>
      <li><a href="/mandiri/mobil/mo-bil.php">mobil</a></li>
      <li><a href="">Sopir</a></li>
      <li><a href="/mandiri/pengembalian/pengembalian.php">pengembalian</a></li>
      <li style="float: left;font-size: 35px;color: gray;">Rental-Mobil</li>     
     </ul>
  </div>
    <h1 style="margin-left:50%;color: #78909C">Penyewa</h1>
    <div class="content">
       <table >
        <form action="#" method="GET"></form>
        <tr>
            
            <td> Id Penyewa :<br><br><input type="text" ></td>
        </tr>
        <tr>
            
            <td> Nama :<br><br><input type="text" ></td>
        </tr>
        <tr>
          
            <td>No Ktp :<br><br><input type="text" ></td>
        </tr>
    </tr>
</tr><tr>
    
    <td>No Telepon :<br><br><input type="text" ></td>
</tr>
    <tr>
      
        <td>Alamat :<br><br><input type="text"></td>
    </tr>
    <tr>
      
      <td>Kota :<br><br><input type="text"></td>
  </tr>
  <tr>
      <td> Jenis Kelamin :<br><br><input type="radio">Laki-Laki<input type="radio">Perempuan</td>
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