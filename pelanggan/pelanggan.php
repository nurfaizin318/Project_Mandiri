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
                            <li><a href="#">edit</a></li>
                            <li><a href="#">tabel</a></li>
                        </ul>
                    </li>
                <h1 style="line-height:10px;">Rental Mobil</h1>
    
                </ul>
            </div>
        </header>
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