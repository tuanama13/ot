<?php
    $path = realpath(__DIR__ . '/../..');
    include_once($path . '/init/db.php');
    include_once('../models/Produks.php');
    include_once '../header.php';   
    include_once '../navbar.php';

    $database = new Database();
    $db = $database->connect();

    $gudang = new Produk($db);
    $result = $gudang->readBarang();
    $no = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Toko</h3>
            <br>
            <table id="gudang" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok Barang</th>
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
        $('#gudang').DataTable();
    });
</script>