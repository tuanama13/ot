<?php
    class Akun
    {
        private $conn;

        // Tabel Pegawai
        public $id_pegawai;
        public $nama_pegawai;
        public $alamat_pegawai;
        public $kontak_pegawai;
        public $jabatan_pegawai;

        // Tabel User
        public $id_user;
        // public $id_pegawai
        public $username_user;
        public $password_user;

        function __construct($db)
		{
			$this->conn = $db;
		}

    }