<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EVAN HOTEL - Home</title>
    <style>
        .nav {
            background-image: url(header.png);
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: Cambria;
            text-shadow: 5px 5px 5px #888888;
            color: #FAFAD2;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            text-shadow: 5px 5px 5px #888888;
            text-decoration: underline;
        }
        .content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .banner {
            width: 500px;
            height: 300px;
            margin-bottom: 20px;
        }
        .footer {
            background-image: url(header.png);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="nav">
        <h1>EVAN HOTEL</h1>
        <div>
            <a href="home.php">Home</a>
            <a href="cekHarga.php">Cek Harga</a>
            <a href="index.php">Logout</a>
        </div>
    </div>
    
   
    <div class="content">
    <div class="banner">
            <img src ="Hotel.png" width="1200" height="300">
    </div>
        <div class="hotel-profile">
            <h2>Hotel Profile</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.</p>
        </div>
    </div>
    
    <div class="footer">
        Website Footer
    </div>
</body>
</html>
