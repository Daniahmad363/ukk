<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Example</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        
        .logout-message {
            background-color: #45a049;
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            width: 80%;
            max-width: 400px;
        }

       
        .card {
            background-color: rgb(255, 0, 0);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

      
        .card a {
            text-decoration: none;
            font-size: 16px;
            color: #0066CC;
            font-weight: bold;
        }

        .card a:hover {
            color: #004B8C;
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>
    <div id="logoutMessage" class="logout-message">
        <h2>Anda Telah Keluar</h2>
        <p>Terima kasih telah menggunakan layanan kami!</p>
        <h3> <a href="http://localhost/UKK2025/LOGIN">Kembali ke Halaman Login</a> </h3>
    </div>
</body>
</html>
