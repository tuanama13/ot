<?php
    ob_start();
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Produks.php');
    include_once($path.'/admin/header.php');   
    include_once($path.'/admin/navbar.php');

    $database = new Database();
    $db = $database->connect();

    $satuan = new Produk($db);
    $result = $satuan->readSatuan();

    // if (empty($_GET['act']) && empty($_GET['id'])) {
        
    // }else{
        (isset($_GET['act']) ? $act = $_GET['act'] : $act = '');
        (isset($_GET['id']) ? $id = $_GET['id'] : $id = '');
        // $act = $_GET['act'];
        // $id = $_GET['id'];
    // }

    

    if (isset($_POST['submit'])) {
        $satuan->id_barang = $_POST['id_barang'];
        $satuan->nama_barang = $_POST['nama_barang'];
        $satuan->kategori_barang = $_POST['kategori_barang'];
        $satuan->stok_barang = $_POST['stok_barang'];
        $satuan->satuan_barang1 = $_POST['satuan1'];
        $satuan->isi_satuan1 = $_POST['isi1'];
        $satuan->satuan_barang2 = $_POST['satuan2'];
        $satuan->isi_satuan2 = $_POST['isi2'];
        $satuan->satuan_barang3 = $_POST['satuan3'];
        $satuan->isi_satuan3 = $_POST['isi3'];
        $satuan->harga_barang = $_POST['harga_barang'];

        if ($satuan->insertProduk()){
            echo "success";
            header("location:list_produk.php");
        }else{
            echo "cancel";
        }
    }

     

?>


<div class="container">
    <div class="row">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="id_barang">ID Barang</label>
                <input type="text" class="form-control" name="id_barang" id="id_barang">
            </div>
            <div class="form-group">
                <label for="nama-barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
            </div>
            <!-- <div class="form-group">
                <label for="kategori">Kategori Barang</label>
                <input type="text" class="form-control" id="kategori">
            </div> -->

            <div class="form-group">
                <label for="kategori">Kategori Barang</label>
                <select class="form-control" name="kategori_barang" id="kategori_barang">
                    <option value=""> - Pilih Kategori -</option>
                    <option value="1">Makanan</option>
                    <option value="2">Minuman</option>
                    <option value="3">Non-Makanan</option>
                </select>
            </div>

           
            <!-- <div class="form-group">
                <label for="satuan1">Satuan Barang 1</label>
                <input type="text" class="form-control" id="satuan1">
            </div> -->

             <div class="form-group">
                <label for="isi1">Isi Satuan 1</label>
                <input type="text" name="isi1" class="form-control" id="isi1">
            </div>

            <div class="form-group">
                <label for="satuan1">Satuan Barang 1</label>
                <select class="form-control" data-live-search="true" data-size="5" name="satuan1" id="satuan1">
                    <option value=""> - Pilih Satuan -</option>
                    <?php
                        $result = $satuan->readSatuan();
                        foreach ($result as $value):
                    ?>
                        <option value="<?php echo $value['kode_satuan']; ?>" data-subtext="<?php echo $value['kode_satuan'];?>"><?php echo $value['nama_satuan']; ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>


           
            <!-- <div class="form-group">
                <label for="satuan2">Satuan Barang 2</label>
                <input type="text" class="form-control" id="satuan2">
            </div> -->
             <div class="form-group">
                <label for="isi2">Isi Satuan 2</label>
                <input type="text" name="isi2" class="form-control" id="isi2">
            </div>
           
            <div class="form-group">
                <label for="satuan2">Satuan Barang 2</label>
                <select class="form-control" data-live-search="true" data-size="5" name="satuan2" id="satuan2">
                    <option value=""> - Pilih Satuan -</option>
                    <?php
                        $result = $satuan->readSatuan();
                        foreach ($result as $value):
                    ?>
                        <option value="<?php echo $value['kode_satuan']; ?>" data-subtext="<?php echo $value['kode_satuan'];?>"><?php echo $value['nama_satuan']; ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>

           
            <!-- <div class="form-group">
                <label for="satuan3">Satuan Barang 3</label>
                <input type="text" class="form-control" id="satuan3">
            </div> --> 
            <div class="form-group">
                <label for="isi3">Isi Satuan 3</label>
                <input type="text" name="isi3" class="form-control" id="isi3">
            </div>
           
            <div class="form-group">
                <label for="satuan3">Satuan Barang 3</label>
                <select class="form-control" data-live-search="true" data-size="5" name="satuan3" id="satuan3">
                    <option value=""> - Pilih Satuan -</option>
                    <?php
                        $result = $satuan->readSatuan();
                        foreach ($result as $value):
                    ?>
                        <option value="<?php echo $value['kode_satuan']; ?>" data-subtext="<?php echo $value['kode_satuan'];?>"><?php echo $value['nama_satuan']; ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>

            
            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="text" class="form-control" name="stok_barang" id="stok_barang">
            </div>
            <div class="form-group">
                <label for="harga-barang">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" id="harga_barang">
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
            tampil();
           
            // $('#tombol').val();
        }

        $('#satuan1').select2({
            placeholder: '- Pilih Satuan -',
            allowClear: true
        });

         $('#satuan2').select2({
            placeholder: '- Pilih Satuan -',
            allowClear: true
        });

         $('#satuan3').select2({
            placeholder: '- Pilih Satuan -',
            allowClear: true
        });

        console.log($("#tombol").val());

    });

    function simpan() {
        console.log($("#tombol").val());
        
    }

    function tampil() {
        $.ajax({
				type  	: "POST",
	      		data  	: "id="+id,
				url		: "edit_barang.php",
				success: function (result) {
					var obj = JSON.parse(result)
                    // console.log(obj.id_barang);

                    $('#nama_barang').val(obj.nama_barang);
                    $('#kategori_barang').val(obj.kategori_barang);
                    $('#stok_barang').val(obj.stok_barang);
                    $('#satuan1').val(obj.satuan_barang1).trigger('change');
                    $('#isi1').val(obj.isi_satuan1);
                    $('#satuan2').val(obj.satuan_barang2).trigger('change');
                    $('#isi2').val(obj.isi_satuan2);
                    $('#satuan3').val(obj.satuan_barang3).trigger('change');
                    $('#isi3').val(obj.isi_satuan3);
                    $('#harga_barang').val(obj.harga_barang);
                    $("#tombol").val('edit');
				}
			});
    }
</script>