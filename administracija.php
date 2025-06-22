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
            <a class="link" href="administracija.php">Administracija</a>
            <a class="link" href="unos.php">Unos</a>
        </nav>
    </header>

    <main class="main-unos">

    
    <?php
  
    $query = "SELECT * FROM clanak";
    $result = mysqli_query($dbc, $query);
    while($row = mysqli_fetch_array($result)) {

    echo '<form enctype="multipart/form-data" action="" method="POST">
    <div class="form-item">
    <label for="title">Naslov vijesti:</label>
        <div class="form-field">
        <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'">
        </div>
    </div>
    <div class="form-item">
    <label for="about">Kratki sadržaj vijesti:</label>
        <div class="form-field">
        <textarea name="about" id="" cols="50" rows="5" class="formfield-textual">'.$row['sazetak'].'</textarea>
        </div>
    </div>
    <div class="form-item">
    <label for="content">Sadržaj vijesti:</label>
        <div class="form-field">
        <textarea name="content" id="" cols="50" rows=20" class="formfield-textual">'.$row['tekst'].'</textarea>
        </div>
    </div>
    <div class="form-item">
    <label for="photo">Slika:</label>
        <div class="form-field">
        <input type="file" class="input-text" id="photo" value="'.$row['slika'].'" name="photo"/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px>
        </div>
    </div>
    <div class="form-item">
    <label for="category">Kategorija vijesti:</label>
        <div class="form-field">
        <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
            <option value="Sport">Sport</option>
            <option value="Politika">Politika</option>
        </select>
        </div>
    </div>
    <div class="form-item">
        <label>Spremiti u arhivu:
        <div class="form-field">';
            if($row['arhiva'] == 0) {
                echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';
            } else {
                echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
            }
        echo '</div>
        </label>
    </div>
    </div>
    <div class="form-item">
    <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
    <button type="reset" value="Poništi">Poništi</button>
    <button type="submit" name="update" value="Prihvati"> Izmjeni</button>
    <button type="submit" name="delete" value="Izbriši"> Izbriši</button>
    </div>
    </form>';
    }

    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $query = "DELETE FROM clanak WHERE id=$id ";
        $result = mysqli_query($dbc, $query);
    }

    if(isset($_POST['update'])){
        $picture = $_FILES['photo']['name'];
        $title=$_POST['title'];
        $about=$_POST['about'];
        $content=$_POST['content'];
        $category=$_POST['category'];
        if(isset($_POST['archive'])){
            $archive=1;
        } else {
            $archive=0;
        }
        $target_dir = 'images/'.$picture;
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);
        $id=$_POST['id'];
        $query = "UPDATE clanak SET naslov='$title', sazetak='$about', tekst='$content',
        slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
        $result = mysqli_query($dbc, $query);
    }
    
    ?>
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