<?php
    class Produk
    {
        private $conn;

        

        // Tabel Order
        public $id_order;
        public $tgl_order;
        public $id_user;
        public $id_toko;
        public $grandtotal;

        // Tabel detailorder
        public $id;
        // public $id_order;
        public $id_barang;
        public $jumlah_barang;
        public $harga_barang;
        public $satuan_barang;

        function __construct($db)
		{
			$this->conn = $db;
        }
    }