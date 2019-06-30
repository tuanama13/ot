<?php
    $path = realpath(__DIR__ . '/../..');
    include_once($path . '/init/db.php');
    include_once '../header.php';   
    include_once '../navbar.php';

  
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 text-center">
      <div class="menu">
        <a href="tipe_produk.php" class="btn btn-app">
          <i style="" class="fa fa-boxes"></i> <br> <h4>Makanan</h4>
        </a>        
      </div>
      
    </div>
    <!-- /col-3 -->
    <div class=" col-md-4 text-center">
      <div class="menu">
      <a href="toko/list_toko.php" class="btn btn-app">
        <i class="fa fa-store-alt"></i> <br><h4> Minuman</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
    <div class=" col-md-4 text-center">
      <div class="menu">
      <a href="gudang/gudang.php" class="btn btn-app">
        <i class="fa fa-warehouse"></i> <br> <h4>Non-Makanan</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
  </div>
  <!-- /row -->


</div>
<!-- /container -->