<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Tokos.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

    $database = new Database();
    $db = $database->connect();

    $toko = new Toko($db);
    $result = $toko->readToko();
    $no = 1;

    

?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style='margin-top:25px;'>
            <div class="row">
                <div class='col-md-6'><h3 style='margin-top:5px;margin-bottom:5px;'>Daftar Toko</h3></div>
                <div class='col-md-6'><a href="" class='btn btn-success pull-right' style='margin-top:5px;margin-bottom:5px;'><i class='fa fa-plus'></i> Tambah</a></div>
            </div>
            <br>
            <br>
            <table id="example" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No.</th>
                    <th>Nama Toko</th>
                    <th>Alamat Toko</th>
                    <th>Kontak Toko</th>
                    <th>Email Toko</th> 
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                        foreach ($result as $value) {
                            echo "
                                <tr>
                                    <td>".$no."</td>
                                    <td>".$value['nama_toko']."</td>
                                    <td>".$value['alamat_toko']."</td>
                                    <td>".$value['kontak_toko']."</td>
                                    <td>".$value['email_toko']."</td>
                                    <td><a href='' class='btn btn-info'><i class='fa fa-pen'></i></a></td>
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
        $('#example').DataTable();
    });
</script>