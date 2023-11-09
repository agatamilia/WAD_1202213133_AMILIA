<?php

require 'function.php';

$id = $_GET ["idBook"];


if ( hapus($id) > 0) {
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = '../Latihan 1/index.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DIHAPUS');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    
}




?>