<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';
    

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
					  <dd>0896-7855-5256</dd><br>
					  <dt>Tanggal Order</dt>
					  <dd>27-07-2019</dd>
					</dl>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>

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
					<button class="btn btn-primary btn-lg">Cetak</button>
				</div>
			</div>
		</div>
		<!-- end col-12 -->
	</div>
</div>