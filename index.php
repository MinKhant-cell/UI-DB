<?php
$data = file_get_contents("https://fakestoreapi.com/products?limit=15");
$dataArr= json_decode($data);


$conn = mysqli_connect('localhost','root','','trs');

$sql="";
foreach ($dataArr as $d){
    $title=htmlentities($d->title,ENT_QUOTES);
    $sql .="INSERT INTO products (title,price) VALUES ('$title','$d->price');";
}


//mysqli_multi_query($conn,$sql);
