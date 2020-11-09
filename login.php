<?php
session_start();

if(isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}

include 'config.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    // cek username

    if( mysqli_num_rows($result) === 1 ) {

        // cek password

        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;


            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="col-md-6 col-md-offset-5 form-login">

<h1 class="text-center  title-login">Halaman Login</h1>

<?php if( isset($error) ) : ?>
    <p style= "color: red; font-style; italic;">username / password salah</p>
<?php endif; ?>

<form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" class="form-control" name="username" id="username">
            </li>
            <li>
            <label for="password">Password :</label>
        <input type="password" class="form-control" name="password" id="password">
            </li>
            <li>
                <button type="submit" class="btn btn-block btn-custom-green" name="login">login</button>
            </li>
        </ul>
    </form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    

    </body>
    </html>