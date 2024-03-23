<?php
// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        // Jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // Jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            text-align: center;
            background-color: white;
        }

        h1,
        .input {
            font-family: 'Courier New', Courier, monospace;
            color: palevioletred;
        }

        img {
            width: 250px;
        }

        .input input {
            margin: 4px;
            padding: 5px;
        }

        .input button {
            background-color: pink;
            margin-top: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Login Admin</h1>
    <img src="img/logo.png">
    <?php if (isset($error)) : ?>
        <h4 style="color:cadetblue; font-style:italic;">username/password salah!</h4>
    <?php endif; ?>
    <form action="" method="post">

        <div class="input">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="input">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="input">
            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>

</html>