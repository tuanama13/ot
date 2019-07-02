<?php
    $path = realpath(__DIR__ . '/../../..');
    include_once($path . '/init/db.php');
    include_once '../../header.php';   
    include_once '../../navbar.php';

  
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 text-center">
      <div class="menu" style="">
        <a href="produk_makanan.php" class="btn btn-app">
          <i style="" class="fa fa-hamburger"></i> <br> <h4>Makanan</h4>
        </a>        
      </div>
      
    </div>
    <!-- /col-3 -->
    <div class=" col-md-4 text-center">
      <div class="menu">
      <a href="produk_minuman.php" class="btn btn-app">
        <i class="fa fa-wine-bottle"></i> <br><h4> Minuman</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
    <div class=" col-md-4 text-center">
      <div class="menu">
      <a href="produk_non.php" class="btn btn-app">
        <i class="fa fa-battery-full"></i> <br> <h4>Non-Makanan</h4>
      </a>
    </div>
    </div>
    <!-- /col-3 -->
  </div>
  <!-- /row -->


</div>
<!-- /container -->