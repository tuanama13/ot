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
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Order</h4>
					</div>
				  <div class="panel-body">
				  	<div class="form-group form-group-lg">
  						<label for="sel1">Pilih Toko</label>
				  		<select class="toko form-control" name="toko">
				  			<?php  
				  				foreach ($result as $value) {
				  			?>
							  <option data-alamat="<?php echo $value['alamat_toko'] ?>" value="<?php echo $value['id_toko'] ?>"><?php echo $value['nama_toko'] ?></option>
							<?php } ?>
						</select>
					</div>
				  </div>
				  <div class="panel-footer">				  	
				  		<button class="btn btn-primary btn-lg" onclick="nextOrder()">Next</button>		  					  	
				  </div>
				</div>
			</div>
			<!-- end col-12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
	<script type="text/javascript">


		$(document).ready(function() {
		    $('.toko').select2();
		});

		$("#toko").change(function(){
			// var alamat = $(this).attr("#data-alamat");
			// console.log(alamat);
		})

		function nextOrder(){
			window.location.href = "order_list.php";
		}
	</script>
<?php
	// include_once('../footer.php');
?>