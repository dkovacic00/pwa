<?php

$title = $_POST['title'];
$about = $_POST['about'];
$content = $_POST['content'];
$category = $_POST['category'];
//$archive = $_POST['archive'];

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
            <a class="link" href="kategorija.php?id=Politika">Politik</a>
            <a class="link" href="administracija.php">Administracija</a>
            <a class="link" href="unos.php">Unos</a>
        </nav>
    </header>

    <main>
        <section>
            <p>Article successfully added</p>
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

<?php
    include 'connect.php';

    $picture = $_FILES['photo']['name'];
    $title = $_POST['title'];
    $about = $_POST['about'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $date = date('d.m.Y.');

    if(isset($_POST['archive'])){
        $archive=1;
    } else {
        $archive=0;
    }

    $target_dir = 'images/'.$picture;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);

    $query = "INSERT INTO clanak (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) 
    VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$archive')";
    $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    mysqli_close($dbc);
?>

