<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Produks.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

    $kategori = $_GET['kat'];

    $database = new Database();
    $db = $database->connect();

    $makanan = new Produk($db);
    $result = $makanan->readProduk($kategori);
    $no = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style='margin-top:25px;'>
            <div class="row">
                <div class='col-md-6'><h3 style='margin-top:5px;margin-bottom:5px;'>Daftar Produk Makanan</h3></div>
                <!-- <div class='col-md-6'><a href="form_produk.php?act=new&id=" class='btn btn-success pull-right' style='margin-top:5px;margin-bottom:5px;'><i class='fa fa-plus'></i> Tambah</a></div> -->
            </div>
            <br>
            <br>
            <table id="makanan" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No</th>
                    <th>SKU</th>
                    <th>Nama Barang</th>
                    <th>Stok Barang</th>
                    <th>S1</th>
                    <th>Isi S1</th>
                    <th>S2</th>
                    <th>Isi S2</th>
                    <th>S3</th>
                    <th>Isi S3</th>
                    <th>Harga Barang</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                        foreach ($result as $value) {
                            echo "
                                <tr>
                                    <td>".$no."</td>
                                    <td>".$value['id_barang']."</td>
                                    <td>".$value['nama_barang']."</td>
                                    <td>".$value['stok_barang']."</td>
                                    <td>".$value['satuan_barang1']."</td>
                                    <td>".$value['isi_satuan1']."</td>
                                    <td>".$value['satuan_barang2']."</td>
                                    <td>".$value['isi_satuan2']."</td>
                                    <td>".$value['satuan_barang3']."</td>
                                    <td>".$value['isi_satuan3']."</td>
                                    <td>".$value['harga_barang']."</td>
                                    <td><a href='form_produk.php?act=edit&id=".$value['id_barang']."' class='btn btn-info'><i class='fa fa-pen'></i></a></td>
                                    <td><a href='' class='btn btn-danger'><i class='fa fa-times'></i></a></td>
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