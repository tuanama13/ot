<?php
    $path = realpath(__DIR__ . '/../..');
    include_once($path . '/init/db.php');
    include_once('../models/Produks.php');
    include_once '../header.php';   
    include_once '../navbar.php';

    $database = new Database();
    $db = $database->connect();

    $makanan = new Produk($db);
    $result = $makanan->readProduk(3);
    $no = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Produk Non-Makanan</h3>
            <br>
            <table id="makanan" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok Barang</th>
                    <th>S1</th>
                    <th>Isi S1</th>
                    <th>S2</th>
                    <th>Isi S2</th>
                    <th>S3</th>
                    <th>Isi S3</th>
                    <th>Harga Barang</th>
                </thead>
                <tbody>
                    <?php
                        foreach ($result as $value) {
                            echo "
                                <tr>
                                    <td>".$no."</td>
                                    <td>".$value['nama_barang']."</td>
                                    <td>".$value['stok_barang']."</td>
                                    <td>".$value['satuan_barang1']."</td>
                                    <td>".$value['isi_satuan1']."</td>
                                    <td>".$value['satuan_barang2']."</td>
                                    <td>".$value['isi_satuan2']."</td>
                                    <td>".$value['satuan_barang3']."</td>
                                    <td>".$value['isi_satuan3']."</td>
                                    <td>".$value['harga_barang']."</td>
                                </tr>
                            ";
                            $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#makanan').DataTable();
    });
</script>