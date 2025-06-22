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

session_start();

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($dbc) {

    $prijavaImeKorisnika = $_POST['username'];
    $prijavaLozinkaKorisnika = $_POST['password'];
    $sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
    $stmt = mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $levelKorisnika);
    mysqli_stmt_fetch($stmt);

    if (password_verify($_POST['password'], $lozinkaKorisnika) &&
        mysqli_stmt_num_rows($stmt) > 0) {
        $uspjesnaPrijava = true;
        if($levelKorisnika == 1) {
            $admin = true;
        } else {
            $admin = false;
        }
        $_SESSION['$username'] = $imeKorisnika;
        $_SESSION['$level'] = $levelKorisnika;
    } else {
        $uspjesnaPrijava = false;
    }

}




    //$query = "SELECT * FROM korisnik WHERE korisnicko_ime='$username' AND lozinka='$password'";
    //$result = mysqli_query($dbc, $query) or die('Error querying databese.');

    //$query_password = "SELECT korisnik.lozinka FROM korisnik WHERE korisnicko_ime='$username'";
    //$hash_result = mysqli_query($dbc, $query_password);

    //while($row = mysqli_fetch_array($hash_result)) {
        if ($uspjesnaPrijava == true || ((isset($_SESSION['$username'])) && $_SESSION['$level'] == 1)) {
        echo ('Uspjesan login');
        //$query_authorization = "SELECT korisnik.razina FROM korisnik WHERE korisnicko_ime='$username'";
        //$result_authorization = mysqli_query($dbc, $query_authorization);
        //while($row = mysqli_fetch_array($result_authorization)) {
            if ($admin == true) {
                echo "<p>Dobro došli. Vaša razina je administrator.</p>";
                echo "<p><a href='administracija.php'>NEXT</a></p>";
            } else {
                echo "<p>Nemate dovoljna prava za pristup ovoj stranici.</p>";
            }
        //}
        
        } else {
            echo "<p>Korisnik ne postoji</p>";
            echo "<p><a href='registracija.html'>NEXT</a></p>";

        }
    //}


mysqli_close($dbc);

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