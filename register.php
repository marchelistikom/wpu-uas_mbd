<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $message = "Akun untuk <b>" . htmlspecialchars($username) . "</b> berhasil didaftarkan (simulasi saja).";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            background-color: #fdfdfd;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            border: 2px solid #CD0000;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #CD0000;
        }

        input[type="text"], input[type="password"] {
            width: 92%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            background-color: #CD0000;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #a50000;
        }

        .success {
            background-color: #e0f7e9;
            border-left: 5px solid #2e7d32;
            padding: 10px;
            margin-bottom: 10px;
            color: #2e7d32;
            animation: fadeSlide 1s ease-out;
        }

        @keyframes fadeSlide {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #CD0000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar</h2>
        <?php if ($message): ?>
            <div class="success"><?= $message ?></div>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username Baru" required />
            <input type="password" name="password" placeholder="Password Baru" required />
            <button type="submit">Daftar</button>
        </form>
        <div class="link">
            Sudah punya akun? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
