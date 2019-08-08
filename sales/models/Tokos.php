<?php
    class Toko
    {
        private $conn;

        // Tabel Toko
        public $id_toko;
        public $nama_toko;
        public $alamat_toko;
        public $kontak_toko;
        public $email_toko;

        function __construct($db)
		{
			$this->conn = $db;
        }
        
        public function readToko()
        {
            $query = "SELECT * FROM tbl_toko";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }

        public function readOneToko($id_toko)
        {
            $query = "SELECT * FROM tbl_toko WHERE id_toko = '$id_toko'";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }
    }