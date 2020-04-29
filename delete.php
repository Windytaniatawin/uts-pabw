<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = $koneksi-> prepare("DELETE FROM `korona` WHERE `korona`.`id` = '$id'");
$sql -> execute();

header("location:read.php");

