<?php 
require 'function.php';



 if (isset( $_POST ["submit"])) {

    $idBook = $_POST ["idBook"];
    $title = $_POST ["title"];
    $stock = $_POST ["stock"];
    $price = $_POST ["price"];
    $query = "INSERT INTO snowdiarys VALUES ('$idBook','$title','$stock','$price')";
    mysqli_query($conn,$query);
    
    
    
    
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
        <a class="navbar-brand" href="#">
        Snow Diary's
        </a>
    </div>
    </nav>
    <div class="container text-center pt-3">
        <h2>DATA BUKU SNOW DIARY'S</h2>
    </div>
    <div class="container">
        <form action="" method="post">
        <div class="mb-3">
                <label for="title" class="form-label">idBook :</label>
                <input type="text" class="form-control" id="idBook" name ="idBook" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" id="title" name ="title" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock :</label>
                <input type="text" class="form-control" id="stock" name ="stock" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price :</label>
                <input type="text" class="form-control" id="price" name ="price" required>
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
