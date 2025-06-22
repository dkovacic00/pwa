

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

    <main class="main-unos">
        <form enctype="multipart/form-data" name="unos_vijesti" method="POST" action="https://localhost/Projekt/skripta.php">
            <div class="form-item">
                <label for="title">Naslov vijesti</label>
                <div class="form-field">
                    <input type="text" name="title" class="form-field-textual">
                </div>
            </div>
            <div class="form-item">
                <label for="about">Kratki sadržaj vijesti</label>
                <div class="form-field">
                    <textarea name="about" id="" cols="50" rows="5" class="formfield-textual"></textarea>
                </div>
            </div>
            <div class="form-item">
                <label for="content">Sadržaj vijesti</label>
                <div class="form-field">
                    <textarea name="content" id="" cols="50" rows="20" class="form-field-textual"></textarea>
                </div>
            </div>
            <div class="form-item">
                <label for="photo">Slika: </label>
                <div class="form-field">
                    <input type="file" accept="image/jpg,image/gif" class="input-text" name="photo"/>
                </div>
            </div>
            <div class="form-item">
                <label for="category">Kategorija vijesti</label>
                <div class="form-field">
                    <select name="category" id="" class="form-field-textual">
                        <option value="Sport">Sport</option>
                        <option value="Politika">Politika</option>
                    </select>
                </div>
            </div>
            <div class="form-item">
                <label>Spremiti u arhivu:
                <div class="form-field">
                    <input type="checkbox" name="archive">
                </div>
                </label>
            </div>
            <div class="form-item">
                <button type="reset" value="Poništi">Poništi</button>
                <button type="submit" value="Prihvati">Prihvati</button>
            </div>
            <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
        </form>
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