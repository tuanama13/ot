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
    <div class="menu col-md-3 text-center">
      <a class="btn btn-app">
        <i style="" class="fa fa-boxes"></i> Produk
      </a>
    </div>
    <!-- /col-3 -->
    <div class="menu col-md-3 text-center">
      <a class="btn btn-app">
        <i class="fa fa-store-alt"></i> Toko
      </a>
    </div>
    <!-- /col-3 -->
    <div class="menu col-md-3 text-center">
      <a class="btn btn-app">
        <i class="fa fa-history"></i> History Order
      </a>
    </div>
    <!-- /col-3 -->
    <div class="menu col-md-3 text-center">
      <a class="btn btn-app">
        <i class="fa fa-user"></i> Akun
      </a>
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