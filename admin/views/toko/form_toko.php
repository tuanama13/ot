<?php
    ob_start();
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Tokos.php');
    include_once($path.'/admin/header.php');   
    include_once($path.'/admin/navbar.php');

    $database = new Database();
    $db = $database->connect();

    $toko = new Toko($db);
    // $result = $toko->insertToko();

    // if (empty($_GET['act']) && empty($_GET['id'])) {
        
    // }else{
        (isset($_GET['act']) ? $act = $_GET['act'] : $act = '');
        (isset($_GET['id']) ? $id = $_GET['id'] : $id = '');
        // $act = $_GET['act'];
        // $id = $_GET['id'];
    // }

    

    if (isset($_POST['submit'])) {
        $toko->nama_toko = $_POST['nama_toko'];
        $toko->alamat_toko = $_POST['alamat_toko'];
        $toko->kontak_toko = $_POST['kontak_toko'];
        $toko->email_toko = $_POST['email_toko'];

        if ($toko->insertToko()){
            echo "success";
            header("location:list_toko.php");
        }else{
            echo "cancel";
        }
    }

     

?>


<div class="container">
    <div class="row">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="nama_toko">Nama Toko</label>
                <input type="text" class="form-control" name="nama_toko" id="nama_toko" required>
            </div>

            <div class="form-group">
                <label for="alamat_toko">Alamat</label>
                <textarea class="form-control" name="alamat_toko" rows="5" id="alamat_toko" required></textarea>
            </div>

            <div class="form-group">
                <label for="kontak_toko">Kontak Toko</label>
                <input type="text" class="form-control" name="kontak_toko" id="kontak_toko" required>
            </div>

            <div class="form-group">
                <label for="email_toko">Email Toko</label>
                <input type="email" class="form-control" name="email_toko" id="email_toko" >
            </div>

            
            
            <button type="submit" id="tombol" value="simpan" name="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <!-- end row -->
</div>
<!-- end container -->

<script>
    var act = '<?php echo $act ?>';
    var id = '<?php echo $id ?>';


    $(document).ready(function() {
         
        if (id!=null && id!="") {
            // tampil();
           
            // $('#tombol').val();
        }
     
        console.log($("#tombol").val());

    });

    function simpan() {
        console.log($("#tombol").val());
        
    }

    function tampil() {
        // $.ajax({
		// 		type  	: "POST",
	    //   		data  	: "id="+id,
		// 		url		: "edit_barang.php",
		// 		success: function (result) {
		// 			var obj = JSON.parse(result)
        //             // console.log(obj.id_barang);

        //             $('#nama_barang').val(obj.nama_barang);
        //             $('#kategori_barang').val(obj.kategori_barang);
        //             $('#stok_barang').val(obj.stok_barang);
        //             $('#satuan1').val(obj.satuan_barang1).trigger('change');
        //             $('#isi1').val(obj.isi_satuan1);
        //             $('#satuan2').val(obj.satuan_barang2).trigger('change');
        //             $('#isi2').val(obj.isi_satuan2);
        //             $('#satuan3').val(obj.satuan_barang3).trigger('change');
        //             $('#isi3').val(obj.isi_satuan3);
        //             $('#harga_barang').val(obj.harga_barang);
        //             $("#tombol").val('edit');
		// 		}
		// 	});
    }
</script>