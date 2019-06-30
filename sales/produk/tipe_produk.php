<?php
    $path = realpath(__DIR__ . '/../..');
    include_once($path . '/init/db.php');
    include_once('../models/Produks.php');

    $database = new Database();
    $db = $database->connect();

    $kategori = new Produk($db);
    $result = $kategori->readKategori();

    foreach ($result as $value) {
       $kategori_ = $value['nama_kategori'];
       print_r($value['nama_kategori']);
    }

    
