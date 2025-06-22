<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Domagoj Kovačić">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <title>RP Online</title>
</head>
<body>
    <header class="main-header">
        <nav class="navigation">
            <a href="index.php">
                <img src="images/logo.png" alt="RP logo">
            </a>
            <a class="link" href="index.php">Home</a>
            <a class="link" href="kategorija.php?id=Sport">Sport</a>
            <a class="link" href="kategorija.php?id=Politika">Politika</a>
            <a class="link" href="login.html">Administracija</a>
            <a class="link" href="unos.php">Unos</a>
        </nav>
    </header>

<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$razina = 0;
$registriranKorisnik = '';

if($dbc) {

    $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
    $stmt = mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    if(mysqli_stmt_num_rows($stmt) > 0){
        echo 'Korisničko ime već postoji!';
    } else {
        if($password==$password2) {
            $hashed_password = password_hash($password, CRYPT_BLOWFISH);
        }

        $query = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) 
              VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'ssssd', $ime,$prezime, $username, $hashed_password, $razina);
            mysqli_stmt_execute($stmt);
            $registriranKorisnik = true;
        }
    }
}


mysqli_close($dbc);

if($registriranKorisnik == true) {
    echo '<p>Korisnik je uspješno registriran!</p>';
}


?>

<footer>
        <div>
            <p>Domagoj Kovačić</p>
            <p>dkovacic2@tvz.hr</p>
            <p>2025.</p>
        </div>
    </footer>
</body>
</html>