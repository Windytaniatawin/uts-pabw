<?php

$host='localhost';
$username='root';
$positif='';
$database_name='covid19';

try{
    $koneksi = new PDO("mysql:host=$host;dbname=$database_name", $username, $positif);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

}catch(PDOException $e){
    echo "Koneksi Gagal: " . $e->getMessage();
}