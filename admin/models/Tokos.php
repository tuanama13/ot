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

        public function insertToko()
        {
            $query = 'INSERT INTO tbl_toko 
                SET 
                nama_toko = :nama_toko,
                alamat_toko = :alamat_toko,
                kontak_toko = :kontak_toko,
                email_toko = :email_toko';

            $stmt = $this->conn->prepare($query);

            // Clean Data
            $this->nama_toko = htmlspecialchars(strip_tags($this->nama_toko));
            $this->alamat_toko = htmlspecialchars(strip_tags($this->alamat_toko));
            $this->kontak_toko = htmlspecialchars(strip_tags($this->kontak_toko));
            $this->email_toko = htmlspecialchars(strip_tags($this->email_toko));
            

            // Bind Parameter            
            $stmt->bindParam(':nama_toko', $this->nama_toko);
            $stmt->bindParam(':alamat_toko', $this->alamat_toko);
            $stmt->bindParam(':kontak_toko', $this->kontak_toko);
            $stmt->bindParam(':email_toko', $this->email_toko);
            

            if ($stmt->execute()) {
                return true;
            }

            printf("Error: %s.\n", $stmt->execute());
 
            return false;
        }

    }