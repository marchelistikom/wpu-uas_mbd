<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #fdfdfd;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(145deg, #ffffff, #f4f4f4);
        }

        .container {
            background: #fff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            border: 3px solid #CD0000;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            color: #CD0000;
            margin-bottom: 30px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            background-color: #CD0000;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #a50000;
        }

        .note {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat Datang!</h1>
        <a class="btn" href="login.php">Login</a>
        <div class="note">Website Sistem Login | Merah Estetik 🇮🇩</div>
    </div>

</body>
</html>
