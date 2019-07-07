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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>
<table style="width:70%">
                <tr>
                    <form method="post">
                        <td> Id Transaksi :<br><br><input type="text" name="id_transaksi"
                                 ></td>
                                 <td> Id Customer :<br><br><input name="id_mobil" style="width:100%;height:50px;font-size:20px;"></td>
                      
    </tr>   
    <tr>
        <td> Id mobil :<br><br><input name="id_mobil" style="width:100%;height:50px;font-size:20px;"></td>
    </tr>
                <tr>
                    
                    <td>Id Sopir :<br><br><input name="id_supir" style="width:75%;height:50px;font-size:20px;">

                    </td>
                    <td>Tanggal sewa :<br><br><input type="text" name="tanggal_sewa"
                            >
                    </td>
                </tr>
                <tr>
                    <td>Lama Sewa:<br><br><input style="width:600px" type="text" name="lama"
                            ></td>

                    <td>Tanggal Kembali:<br><br><input type="text" name=" tanggal_kembali"
                             >
                </tr>
                <tr>
                    </td>
                    <td>Bayar:<br><br><input type="text" name="bayar" ></td>

                    <td>Uang Muka:<br><br><input type="text" name="uangMuka" ></td>

                </tr>
                <tr>
                </tr>
                <tr>
                <td>Sisa Bayar<br><br><input type="text" name="sisaBayar" ></td>
                    <td>Kembalian<br><br><input type="text" name="kembalian" ></td>
                </tr>
                <tr>
                    <td>


                        <button name="submit">submit</button>
                    </td>
                </tr>
                </form>
            </table>
</body>
</html>