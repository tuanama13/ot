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
        <div class="col-md-12">
            <h3>Daftar Toko</h3>
            <br>
            <table id="example" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No.</th>
                    <th>Nama Toko</th>
                    <th>Alamat Toko</th>
                    <th>Kontak Toko</th>
                    <th>Email Toko</th> 
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