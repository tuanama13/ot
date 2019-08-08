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

        // Tabel Satuan
        public $id_satuan;
        public $nama_satuan;
        public $kode_satuan;

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

        public function readOneProduk($id)
        {
            $query = "SELECT * FROM tb_barang WHERE id_barang = '$id'";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }


        public function readSatuan()
        {
            $query = "SELECT * FROM tbl_satuan";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;   
        }

        public function insertProduk()
        {
            $query = 'INSERT INTO tb_barang 
                SET 
                id_barang = :id_barang,
                nama_barang = :nama_barang,
                kategori_barang = :kategori_barang,
                stok_barang = :stok_barang,
                satuan_barang1 = :satuan_barang1,
                isi_satuan1= :isi_satuan1,
                satuan_barang2 = :satuan_barang2,
                isi_satuan2= :isi_satuan2,
                satuan_barang3 = :satuan_barang3,
                isi_satuan3= :isi_satuan3,
                harga_barang= :harga_barang';

            $stmt = $this->conn->prepare($query);

            // Clean Data
            $this->id_barang = htmlspecialchars(strip_tags($this->id_barang));
            $this->nama_barang = htmlspecialchars(strip_tags($this->nama_barang));
            $this->kategori_barang = htmlspecialchars(strip_tags($this->kategori_barang));
            $this->stok_barang = htmlspecialchars(strip_tags($this->stok_barang));
            $this->satuan_barang1 = htmlspecialchars(strip_tags($this->satuan_barang1));
            $this->isi_satuan1 = htmlspecialchars(strip_tags($this->isi_satuan1));
            $this->satuan_barang2 = htmlspecialchars(strip_tags($this->satuan_barang2));
            $this->isi_satuan2 = htmlspecialchars(strip_tags($this->isi_satuan2));
            $this->satuan_barang3 = htmlspecialchars(strip_tags($this->satuan_barang3));
            $this->isi_satuan3 = htmlspecialchars(strip_tags($this->isi_satuan3));
            $this->harga_barang = htmlspecialchars(strip_tags($this->harga_barang));


            // Bind Parameter            
            $stmt->bindParam(':id_barang', $this->id_barang);
            $stmt->bindParam(':nama_barang', $this->nama_barang);
            $stmt->bindParam(':kategori_barang', $this->kategori_barang);
            $stmt->bindParam(':stok_barang', $this->stok_barang);
            $stmt->bindParam(':satuan_barang1', $this->satuan_barang1);
            $stmt->bindParam(':isi_satuan1', $this->isi_satuan1);
            $stmt->bindParam(':satuan_barang2', $this->satuan_barang2);
            $stmt->bindParam(':isi_satuan2', $this->isi_satuan2);
            $stmt->bindParam(':satuan_barang3', $this->satuan_barang3);
            $stmt->bindParam(':isi_satuan3', $this->isi_satuan3);
            $stmt->bindParam(':harga_barang', $this->harga_barang);

            if ($stmt->execute()) {
                return true;
            }

            printf("Error: %s.\n", $stmt->execute());
 
            return false;
        }

        public function updateProduk(){

            $query = 'UPDATE tb_barang
                SET 
                    nama_barang = :nama_barang,
                    kategori_barang = :kategori_barang,
                    stok_barang = :stok_barang,
                    satuan_barang1 = :satuan_barang1,
                    isi_satuan1= :isi_satuan1,
                    satuan_barang2 = :satuan_barang2,
                    isi_satuan2= :isi_satuan2,
                    satuan_barang3 = :satuan_barang3,
                    isi_satuan3= :isi_satuan3,
                    harga_barang= :harga_barang                    
                WHERE 
                    id_barang = :id_barang';

            $stmt = $this->conn->prepare($query);

            // Clean Data
            $this->nama_barang = htmlspecialchars(strip_tags($this->nama_barang));
            $this->kategori_barang = htmlspecialchars(strip_tags($this->kategori_barang));
            $this->stok_barang = htmlspecialchars(strip_tags($this->stok_barang));
            $this->satuan_barang1 = htmlspecialchars(strip_tags($this->satuan_barang1));
            $this->isi_satuan1 = htmlspecialchars(strip_tags($this->isi_satuan1));
            $this->satuan_barang2 = htmlspecialchars(strip_tags($this->satuan_barang2));
            $this->isi_satuan2 = htmlspecialchars(strip_tags($this->isi_satuan2));
            $this->satuan_barang3 = htmlspecialchars(strip_tags($this->satuan_barang3));
            $this->isi_satuan3 = htmlspecialchars(strip_tags($this->isi_satuan3));
            $this->harga_barang = htmlspecialchars(strip_tags($this->harga_barang));
             $this->id_barang = htmlspecialchars(strip_tags($this->id_barang));


            // Bind Parameter            
            $stmt->bindParam(':nama_barang', $this->nama_barang);
            $stmt->bindParam(':kategori_barang', $this->kategori_barang);
            $stmt->bindParam(':stok_barang', $this->stok_barang);
            $stmt->bindParam(':satuan_barang1', $this->satuan_barang1);
            $stmt->bindParam(':isi_satuan1', $this->isi_satuan1);
            $stmt->bindParam(':satuan_barang2', $this->satuan_barang2);
            $stmt->bindParam(':isi_satuan2', $this->isi_satuan2);
            $stmt->bindParam(':satuan_barang3', $this->satuan_barang3);
            $stmt->bindParam(':isi_satuan3', $this->isi_satuan3);
            $stmt->bindParam(':harga_barang', $this->harga_barang);
            $stmt->bindParam(':id_barang', $this->id_barang);

            if ($stmt->execute()) {
                return true;
            }

            printf("Error: %s.\n", $stmt->execute());
 
            return false;
        }
    }
    