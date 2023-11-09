<?php
$conn = mysqli_connect("localhost","root","","carwash");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $plat = $data ["no_polisi"];
    $tipe = $data["tipe_mobil"];
    $merek = $data ["merek_mobil"];
    $warna = $data ["warna"];
    $pemilik = $data ["pemilik"];

    $query = "INSERT INTO data_mobil VALUES ('$plat','$tipe','$merek','$warna','$pemilik')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $plat = $data ["no_polisi"];
    $tipe = $data ["tipe_mobil"];
    $merek = $data ["merek_mobil"];
    $warna = $data ["warna"];
    $pemilik = $data ["pemilik"];

    

    $query = "UPDATE data_mobil SET
                -- no_polisi = '$plat',
                tipe_mobil = '$tipe',
                merek_mobil = '$merek',
                warna = '$warna',
                pemilik = '$pemilik'
            WHERE no_polisi = '$plat'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    // return mysqli_affected_rows($conn);
    return var_dump($data);
    
}

?>