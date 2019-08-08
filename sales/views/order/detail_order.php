<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Orders.php');
    include_once('../../models/Tokos.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

    (isset($_GET['id']) ? $id = $_GET['id'] : $id ="" );


    $database = new Database();
    $db = $database->connect();

    // cal Class Order
    $order = new Order($db);
    $result = $order->readOneOrder($id);
    $value = $result->fetch(PDO::FETCH_ASSOC);

    // call function detailOrder
    $resultDet = $order->readDetOrder($id);

    // call Class Toko
    $toko = new Toko($db);
    $resultToko = $toko->readOneToko($value['id_toko']);
    $valueToko = $resultToko->fetch(PDO::FETCH_ASSOC);

    
    $no = 1;
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5>Detail Toko</h5>
				</div>
				<!-- end panel heading -->
				<div class="panel-body">
					<dl>
					  <dt>Nama Toko</dt>
					  <dd id="labelNaToko"><?php echo $valueToko['nama_toko']?></dd><br>
					  <dt>Alamat Toko</dt>
					  <dd id="labelAlToko"><?php echo $valueToko['alamat_toko']?></dd><br>
					  <dt>Kontak Toko</dt>
					  <dd id="labelKoToko"><?php echo $valueToko['kontak_toko']?></dd>
					</dl>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-4 -->
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5>Detail Order</h5>
				</div>
				<!-- end panel heading -->
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Barang</th>
								<th>Harga</th>
								<th>Qty</th>
								<th>Satuan</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                            foreach ($resultDet as $valueDet) {
                        ?>
							<tr>
								<td>1</td>
								<td><?php echo $valueDet['nama_barang'] ?></td>
								<td><?php echo $valueDet['harga_barang'] ?></td>
								<td><?php echo $valueDet['jumlah_barang'] ?></td>
								<td><?php echo $valueDet['satuan_barang'] ?></td>
								<td><?php echo $valueDet['harga_barang'] * $valueDet['jumlah_barang'] ?></td>
							</tr>
                        <?php
                            }
                        ?>
						<tfoot>
							<tr>
								<td colspan="5"><h4><span class="pull-right">Total</span></h4></td>
								<td><h4><strong>Rp <?php echo $value['grandtotal'] ?></strong></h4></td>
							
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- end panel-body -->
				<!-- <div class="panel-footer">
					<button class="btn btn-primary btn-lg">Proses</button>
				</div> -->
			</div>
		</div>
		<!-- end col-8 -->
		<div class="col-md-12">
			
		</div>
		<!-- end col-12 -->
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		    $('#barang').select2();
			// console.log($('.barang').val());
			
		});

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