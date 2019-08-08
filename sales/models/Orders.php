<?php
    class Order
    {
        private $conn;

        

        // Tabel Transaksi
        public $id_transaksi;
        public $tgl_transaksi;
        public $id_user;
        public $id_toko;
        public $grandtotal;
        
        // Table Detai Transaksi
        public $id;
        public $id_barang;
        public $harga_barang;
        public $jumlah_barang;

        function __construct($db)
		{
			$this->conn = $db;
        }

        public function readOneOrder($id_order)
        {
            $query = "SELECT * FROM tb_order WHERE id_order ='$id_order'";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }
        
        public function readOrder()
        {
            $query = "SELECT tb_order.*, tbl_toko.nama_toko FROM tb_order JOIN tbl_toko USING(id_toko)";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }

        public function readDetOrder($id_order)
        {
            $query = "SELECT tb_detailorder.*, tb_barang.nama_barang FROM tb_detailorder JOIN tb_barang USING(id_barang) WHERE id_order = '$id_order'";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }