<!doctype html>

 <?php
 include 'config.php';
  session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="icon" type="image/png" href="img/icon.png">
   <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Baba Ong Coffee</title>
  </head>
  <body id="page-top">

<!-- Navigation Bar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-white pb-1  sticky-top" id="mainNav">
      <div class="container">
  <a class="navbar-brand" href="index.php"> <img src="img/logo_babaong.png"></a>

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">BERANDA <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUK</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="catalog_arabika.php">ARABIKA</a>
          <a class="dropdown-item" href="catalog_robusta.php">ROBUSTA</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#profile">PROFILE</a>
      </li>
    </ul>
    &nbsp;

    <ul class="navbar-nav">
         <?php
         if (isset($_SESSION['fullname'])){ ?>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-1x fas fa-user">&nbsp;</i>
              <?= $_SESSION['fullname']; ?>

              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="assets/logout.php">Keluar</a>
        </div>
              <?php
         }else {
          ?>
      <li class="nav-item">
         <a class="nav-link" href="assets/login.php"><i class="fa-1x fas fa-user">&nbsp;</i>MASUK</a>
        <?php } ?>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="assets/pembelian.php">
        <i class="fas fa-shopping-cart">&nbsp;</i>Keranjang</a>
      </li>
     
    </ul>
  </div>
  </div>
</nav>


<div class="container-fluid p-0"  id="carousel-top" style="margin-top: -60px;">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" >
        <div class="carousel-item active">
          <img src="img/banner2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/banner1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/banner3.jpg" class="d-block w-100" alt="...">
        </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="jumbotron-fluid">
  <div class="container">
    <h3 align="center" style="margin-top: 10px">Produk Kami</h3>
    <hr width="75px" size="50px" color="black">
  </div>
</div>


<div class="container">
  <div class="row">
<?php
        $query = "SELECT * FROM product WHERE categories_product='arabika'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>

      <div class="col  col-lg-4 col-md-6 col-sm-12">
        <div class="">
        <form class="panel panel-default text-center" method="post" action="assets/pembelian.php?action=add&id=<?php echo $row["id_product"]; ?>">
          <div style="border:1px solid #333; margin-bottom:20px; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">

            <img src="admin/imgproduct/<?php echo $row["image"]; ?>" height="250px" class="img-responsive" /><br />

            <h6 class="text-info"><?php echo $row["name_product"]; ?>&nbsp;<?php echo $row['categories_product'];?></h6>

            <h6 class="text-danger">Rp. <?php echo $row["price"]; ?></h6>

            <input type="text" name="quantity" value="1" class="form-control" width="10px" />

            <input type="hidden" name="product_code" value="<?php echo $row['product_code']; ?>" />

            <input type="hidden" name="hidden_name" value="<?php echo $row["name_product"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Masukkan Keranjang" />

          </div>
        </form>
      </div>
      </div>
     
      
      <?php
          }
        }
      ?>

    </div>
  </div>

<div id="profile">
  <div class="container bg-transparent w-75 h-75 pb-lg-5 pt-lg-5 " align="center">
    
    <div class="container bg-transparent mt-5">
    <hr width="50px" size="50px" color="black">
    <h3>Tentang Baba Ong</h3></div> 
    <p>
    <p>


    <p> Warung Kopi Baba Ong berlokasi Jalan Raya Panggung No.3, Jatibening, Pondok Gede, Kota Bekasi. Tempat kami melayani dan menyajikan kopi nusantara dengan berbagai macam makan ringan seperti kue pancong, roti bakar dan lainnya. Tempat yang nyaman dengan harga yang kompetitif serta pelayanan yang ramah bisa anda dapatkan ditempat kami. Silahkan hubungi kami untuk info lanjut.

    
  </div>
</div>

<div class="container">
 
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>

   <div class="card-footer text-mute fixed-bottom">
     <div class="row">
     <div class="col-sm-8" style= "text-align: left; font-size: 12px; text-decoration: none;">
      
      <a href="#" style="color: #808080">email@babaongcoffee.com</a>&nbsp;&nbsp;&nbsp;

     </div>
     <div class="col-sm-4" style="text-align: right; color: #808080; font-size: 12px;">
      2019 ® Baba Ong Coffee

     </div>
     </div>
   </div>
  
  </body>
</html>