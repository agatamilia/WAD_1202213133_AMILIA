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
    $title = $data ["title"];
    $stock = $data ["stock"];
    $price = $data ["price"];

    $query = "INSERT INTO snowdiarys (idBook, title, stock, price) VALUES ('$idBook','$title','$stock','$price')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $idBook = $data ["idBook"];
    $title = $data ["title"];
    $stock = $data ["stock"];
    $price = $data ["price"];

    

    $query = "UPDATE snowdiarys SET
                
                title = '$title',
                stock = '$stock',
                price = '$price',
            WHERE idBook = '$idBook'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    return var_dump($data);
    
}


?>