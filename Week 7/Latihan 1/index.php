<?php
require 'function.php';

$book = query("SELECT * FROM snowdiarys");

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
    <nav class="navbar" style="background-color: #997950">
      <a class="navbar-brand" href="#" style="font-color: #ffff">Snow Diary's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </nav>
    
    <div class="container text-center pt-3">
        <h2>DATA BUKU SNOW DIARY'S</h2>
    </div>
    <div class="container pt-4">
        <table class="table table-dark table-hover ">
            <tr class="">
                <th>No</th>
                <th>ID Book</th>
                <th>Title</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Photo</th>
                <th></th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($book as $row) : ?>
            </tr>
            <tr>
                <td class=""><?= $i; ?></td>
                <td><?= $row ["no"];?></td>
                <td><?= $row ["idBook"];?></td>
                <td><?= $row ["tittle"];?></td>
                <td><?= $row ["stock"];?></td>
                <td><?= $row ["price"];?></td>
                <td><?= $row ["img"];?></td>
                <td><a class="btn btn-secondary" href="../Latihan 6/ubah.php?no_polisi=<?=$row ["idBook"];?> " role="button">UBAH</a> <a class="btn btn-secondary" href="../Latihan 4/hapus.php?no_polisi=<?= $row ["idBook"];?> " role="button" onclick="return confirm('APAKAH ANDA YAKIN?')">HAPUS</a></td>
               

            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </div>
    <div class="container text-center">
        <a class="btn btn-secondary btn-lg" href="../Latihan 3/tambah.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>