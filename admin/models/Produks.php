<?php
    class Produk
    {
        private $conn;       

        // Tabel Barang
        public $id_barang;
        public $nama_barang;
        public $kategori_barang;
        public $stok_barang;
        public $satuan_barang1;
        public $isi_satuan1;
        public $satuan_barang2;
        public $isi_satuan2;
        public $satuan_barang3;
        public $isi_satuan3;        
        public $harga_barang;

        function __construct($db)
		{
			$this->conn = $db;
		}

     
        public function readBarang()
        {
            $query = "SELECT * FROM tb_barang";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }

        public function readProduk($kategori)
        {
            $query = "SELECT * FROM tb_barang WHERE kategori_barang = '$kategori'";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
    