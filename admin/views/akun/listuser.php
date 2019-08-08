<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Akuns.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

    $database = new Database();
    $db = $database->connect();

    $user = new Akun($db);
    $result = $user->readUser();
    $no = 1;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style='margin-top:25px;'>
            <div class="row">
                <div class='col-md-6'><h3 style='margin-top:5px;margin-bottom:5px;'>Daftar User</h3></div>
                <div class='col-md-6'><a href="form_user.php" class='btn btn-success pull-right' style='margin-top:5px;margin-bottom:5px;'><i class='fa fa-plus'></i> Tambah</a></div>
            </div>
            <br>
            <br>
            <table id="user" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                         width="100%">
                <thead>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Username</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                        foreach ($result as $value) {
                            echo "
                                <tr>
                                    <td>".$no."</td>
                                    <td>".$value['nama_pegawai']."</td>
                                    <td>".$value['username_user']."</td>
                                    <td><a href='' class='btn btn-info'><i class='fa fa-pencil'></i></a></td>
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
        $('#user').DataTable();
    });
</script>