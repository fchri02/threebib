<?php


require 'function.php';

if(isset($_POST["register"]) ) {

    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <title>Halaman Registrasi</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />


</head>

<body>


    <main>
        <article class="regis" id="regis">
            <div class="container">
                <div class="title">
                    <h1>Welcome To ThreeBib</h1>
                </div>

                <div class="form">
                    <h1>Register</h1>

                    <?php if(isset($error)) : ?>
                    <p style="color: red; font-style:italic;">Username/Password Salah</p>
                    <?php endif ; ?>

                    <form action="" method="post">
                        <ul>
                            <li>
                                <label for="username">Username :</label>
                                <input type="text" name="username" id="username">
                            </li>
                            <li>
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password">
                            </li>
                            <li>
                                <label for="password2">Konfirmasi Password :</label>
                                <input type="password" name="password2" id="password2">
                            </li>
                            <li>
                                <button type="submit" name="register">Daftar</button>
                            </li>
                        </ul>

                    </form>
                    <a href="login.php">sudah punya akun?</a>
                </div>
            </div>
        </article>
    </main>
</body>

</html>