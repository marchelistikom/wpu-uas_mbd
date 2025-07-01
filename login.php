<?php
session_start();

$users = [
    'admin' => 'password123', // username => password
];

$error = '';
$successLogin = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['user'] = $username;
        $successLogin = true; // Tampilkan animasi sukses
    } else {
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-color: #f4f4f4;
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
            position: relative;
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

        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
            text-align: center;
        }

        .success {
            color: #2e7d32;
            background-color: #e0f7e9;
            border-left: 5px solid #2e7d32;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
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
    <?php if ($successLogin): ?>
    <script>
        // Redirect setelah 2 detik
        setTimeout(function () {
            window.location.href = "halamanUtama.php";
        }, 2000);
    </script>
    <?php endif; ?>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if ($successLogin): ?>
            <div class="success">Login berhasil! Mengarahkan ke halaman utama...</div>
        <?php else: ?>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Masuk</button>
            </form>
            <div class="link">
                Belum punya akun? <a href="register.php">Daftar</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
