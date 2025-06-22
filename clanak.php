<?php
include 'connect.php';
define('UPLPATH', 'images/');
?>

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

    <main>
        <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM clanak WHERE arhiva=0 AND id='$id'";
                $result = mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
                ?>
        <section>
            <header>
                <?php echo "<span>".$row['kategorija']."</span>";?>
            </header>
            <article class="article">
                <h1>
                    <?php echo $row['naslov'];?>
                </h1>
                <p class="left">Autor:</p>
                <p class="left">Objavljeno: <?php echo "<span>".$row['datum']."</span>";?></p>
                <?php echo '<img src="' . UPLPATH . $row['slika'] . '">';?>
                <p class="sazetak">
                    <?php echo "<i>".$row['sazetak']."</i>";?>
                </p>
                <p>
                    <?php echo $row['tekst'];?>
                </p>
            </article>
        </section>

        
    </main>


    <footer>
        <div>
            <p>Domagoj Kovačić</p>
            <p>dkovacic2@tvz.hr</p>
            <p>2025.</p>
        </div>
    </footer>
</body>
</html>