<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: lightblue;
            margin: 0;
            padding: 0;
            
            
        }
        .menu-list{
            float: left;
        }
        .menu-list a {
            display: block;
            color: white;
            padding: 14px 16;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
        }
        .menu.list a:hover {
            background-color: white;
        }
        .jumbotron{
            padding: 30px;
        }
        .container{
            padding: 30px;
            margin: 0;
            border-radius: 10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color: #ECC5FB;
        }
        .jumbotron h1{
            text-align: left;
            font-family: 'raleway'Arial, Helvetica, sans-serif ;
            color: white ;
            font-weight: 600;
            font-size: 70px;
            text-transform: uppercase;
        }
        .jumbotron p{
            text-align: left;
            font-family: 'raleway'Arial, Helvetica, sans-serif ;
            color: white ;
            font-weight: 600;
            font-size: 40px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"><a href="./form/pendaftar.php">Daftar</a></li>
        <li class="menu-list"><a href="./logout.php">Logout</a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
        <h1>Selamat datang di Futsal go</h1>
        <p>klik menu daftar</p>
        </div>
    </div>
</body>
</html