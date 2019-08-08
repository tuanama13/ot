<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once('../../models/Produks.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

    $database = new Database();
    $db = $database->connect();

    $produk = new Produk($db);
    $result = $produk->readBarang();
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
					  <dd>TOKO WIRA</dd><br>
					  <dt>Alamat Toko</dt>
					  <dd>Jl Nawawi Hasan No 90</dd><br>
					  <dt>Kontak Toko</dt>
					  <dd>0896-7855-5256</dd>
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
					<h5>Detail Barang</h5>
				</div>
				<!-- end panel heading -->
				<div class="panel-body">
					<!-- <form action="post">
						
					</form> -->
					<div class="form-group form-group-lg">
  						<label for="sel1">Pilih Barang</label>
				  		<select class="barang form-control" name="barang" id="barang">
				  			<?php  
				  				foreach ($result as $value) {
				  			?>
							  <option value="<?php echo $value['id_barang'] ?>"><?php echo $value['nama_barang'] ?></option>
							<?php } ?>
						</select>
						<!-- end select -->
					</div>
					<!-- end div pili barang -->

					<div class="form-group">
						<label for="harga">Harga Barang</label>
						<input type="text" name="harga" class="form-control" value="35.000">
					</div>
					
					<div class="form-group col-md-6">
						<label for="qty">Quantity</label>
						<input type="number" name="qty" class="form-control" value="1">
					</div>
					<div class="form-group col-md-6">
						<label for="satuan">Satuan</label>
						<select class="form-control" name="satuan"> 
							<option value="1">Pcs</option>
							<option value="2">Karton</option>
							<option value="3">Lusin</option>
						</select>
					</div>


				</div>
				<!-- end panel-body -->
				<div class="panel-footer">
					<button class="btn btn-primary btn-lg">Save</button>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-8 -->
		<div class="col-md-12">
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
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>TANGGO COKLAT 176gr</td>
								<td>13000</td>
								<td>10</td>
								<td>PCS</td>
								<td>Rp 130.000</td>
								<td><a href="" class="btn btn-success">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>YOU C VITAMIN APEL</td>
								<td>7100</td>
								<td>10</td>
								<td>PCS</td>
								<td>Rp 71.000</td>
								<td><a href="" class="btn btn-success">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5"><h4><span class="pull-right">Total</span></h4></td>
								<td><h4><strong>Rp 201.000</strong></h4></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- end panel-body -->
				<div class="panel-footer">
					<button class="btn btn-primary btn-lg">Proses</button>
				</div>
			</div>
		</div>
		<!-- end col-12 -->
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		    $('#barang').select2();
			// console.log($('.barang').val());
			
		});
</script>