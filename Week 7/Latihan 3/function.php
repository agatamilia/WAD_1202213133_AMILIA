<?php
$conn = mysqli_connect("localhost","root","","snow");

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
    $idBook = $data ["idBook"];
    $title = $data["title"];
    $stock = $data ["stock"];
    $price = $data ["price"];
    $pemilik = $data ["pemilik"];

    $query = "INSERT INTO snowdiarys VALUES ('$idBook','$title','$stock','$price')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

?>