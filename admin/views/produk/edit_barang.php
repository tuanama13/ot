<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Produks.php');
    // include_once '../../header.php';   
    // include_once '../../navbar.php';

    $id = $_POST['id'];

    $database = new Database();
    $db = $database->connect();

    $barang = new Produk($db);
    $result = $barang->readOneProduk($id);

    echo json_encode($result->fetch(PDO::FETCH_ASSOC));
    // $no = 1;