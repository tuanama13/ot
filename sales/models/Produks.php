<?php
    class Produk
    {
        private $conn;

        // Tabel Kategori
        public $id_kategori;
        public $nama_kategori;
        public $tipe_kategori;
        public $sub_kategori_dari;

        // Tabel Barang
        public $id_barang;
        public $nama_barang;
        public $jumlah_barang;
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

        public function readKategori()
        {
            $query = "SELECT * FROM tbl_kategori WHERE tipe_kategori = 0";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }
    }
    