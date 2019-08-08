<?php
    $path = realpath(__DIR__ . '/..');
    // include_once($path . '/init/db.pdo.php');
    include_once($path . '/init/db.php');
    include_once 'header.php';
    // include_once 'models/Cabangs.php';
    // include_once 'models/Orders.php';
    // include_once 'functions.php';
    include_once 'navbar.php';

    // $database = new Database();
    // $db = $database->connect();

    // $cabang = new Cabang($db);
    // $result = $cabang->readJumMeja(1);

    // $order = new Order($db);
	// // $maxid = $order->cekLastOrder();
	// $orders = $order->readOrders();

    // foreach ($result as $value) {
    //    $jumlah_meja = $value['jumlah_meja'];
    // }

    
?>


<div class="container">
  <div class="row">
    <div class="col-md-3 col-xs-6 text-center">
      <div class="menu">
        <a href="views/produk/list_produk.php" class="btn btn-app">
          <i style="" class="fa fa-boxes"></i> <br> <h4>List Produk</h4>
        </a>        
      </div>
      
    </div>
    <!-- /col-3 -->
    <div class=" col-md-3 col-xs-6 text-center">
      <div class="menu">
      <a href="views/toko/list_toko.php" class="btn btn-app">
        <i class="fa fa-store-alt"></i> <br><h4> List Toko</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
    <div class=" col-md-3 col-xs-6 text-center">
      <div class="menu">
      <a href="views/order/order.php" class="btn btn-app">
        <i class="fa fa-hand-holding-usd"></i> <br> <h4>Order</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
    <div class=" col-md-3 col-xs-6 text-center">
      <div class="menu">
      <a href="views/order/last_order.php" class="btn btn-app">
        <i class="fa fa-history"></i> <br> <h4>History Order</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
  </div>
  <!-- /row -->


</div>
<!-- /container -->

<script>

</script>
<?php
    // include_once 'footer.php';
?>