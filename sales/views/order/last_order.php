<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Orders.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

    // $kategori = $_GET['kat'];

    $database = new Database();
    $db = $database->connect();

    $order = new Order($db);
    $result = $order->readOrder();
    // $no = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style='margin-top:25px;'>
            <div class="row">
                <div class='col-md-6'><h3 style='margin-top:5px;margin-bottom:5px;'>Daftar Order</h3></div>
                <!-- <div class='col-md-6'><a href="form_produk.php?act=new&id=" class='btn btn-success pull-right' style='margin-top:5px;margin-bottom:5px;'><i class='fa fa-plus'></i> Tambah</a></div> -->
            </div>
            <br>
            <br>
            <table id="order" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No Order</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Toko</th>
                    <th>Total</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                        foreach ($result as $value) {
                            echo "
                                <tr>
                                    <td>#".$value['id_order']."</td>
                                    <td>".$value['tgl_order']."</td>
                                    <td>".$value['id_user']."</td>
                                    <td>".$value['nama_toko']."</td>
                                    <td>".$value['grandtotal']."</td>
                                    <td><a href='detail_order.php?id=".$value['id_order']."' class='btn btn-info'><i class='fa fa-list-ul'></i></a></td>
                                    <td><a href='' class='btn btn-danger'><i class='fa fa-times'></i></a></td>
                                </tr>
                            ";
                            
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#order').DataTable();
    });
</script>