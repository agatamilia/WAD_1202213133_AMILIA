<?php 
require 'function.php';

$id = $_GET ["idBook"];

$book = read("SELECT * FROM snowdiarys WHERE idBook = '$id'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        
        echo "
        <script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
        
    }


    
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snow Diary's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar" style="background-color: #F0E4D8">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        Snow Diary's
        </a>
    </div>
    </nav>
    <div class="container text-center pt-3">
        <h2>UBAH DATA BUKU SNOW DIARY'S</h2>
    </div>
    <div class="container">
        <form action="" method="post">

            <div class="mb-3">
                <label for="title" class="form-label">ID Book :</label>
                <input type="text" class="form-control" id="idBook" name ="idBook" value=" <?= $book['idBook'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" id="title" name ="title" value=" <?= $book['title'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock :</label>
                <input type="text" class="form-control" id="stock" name ="stock" value=" <?= $book['stock'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price :</label>
                <input type="text" class="form-control" id="price" name ="price" value=" <?= $book['price'] ?>" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>