<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Sederhana</title>
    <style>
        /* Style bisa ditambahkan di sini */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang di Homepage Sederhana</h1>
    </header>

    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="container">
        <div class="main-content">
            <h2>Selamat datang!</h2>
            <p>Ini adalah halaman utama yang sederhana untuk contoh.</p>
        </div>
    </div>

    <footer>
        <p>Hak Cipta © 2023 - Homepage Sederhana</p>
    </footer>
</body>

</html>
