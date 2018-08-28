<body>
<div class="row">
<div id="carouselExampleControls" class="carousel slide col-xs-12" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" id="carousel-item">
      <img class="d-block img" src="<?php echo base_url(); ?>/asset/images/11.jpg" alt="First slide">
    </div>
    <div class="carousel-item" id="carousel-item">
      <img class="d-block img" src="<?php echo base_url(); ?>/asset/images/12.jpg" alt="Second slide">
    </div>
    <div class="carousel-item" id="carousel-item">
      <img class="d-block img" src="<?php echo base_url(); ?>/asset/images/13.jpg" alt="Third slide">
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
<div class="marquee" id="marquee">
<hr size="20">
<marquee>Alamat : Jl.pelangi Pasar Semi Modern Alianyang Lantai 2 Singkawang Barat</marquee>
</div>
<hr size="20">
<div class="container" id="container">
	<h2>Selamat Datang di Kuale Foodcourt Singkawang</h2>
	<div class="row">

		<div class="col-xs-3 col-sm-3">
<img src="<?php echo base_url(); ?>/asset/images/foto.jpg" style="border-radius: 100%; width: 100px">
</div>
<div class="col-sm-6" align="justify">
<p>Di sini kami menyediakan beberapa sajian dan profil restoran. Untuk info lebih lengkap anda dapat mengunjungi lokasi berikut: Jl.pelangi Pasar Semi Modern Alianyang Lantai 2 Singkawang Barat</p>	
</div>
</div>
</div>
<section class="bawah" id="bawah">


<div class="container mt-4">
  <div class="row">
    <div class="col-sm-12 col-xs-12 text-center text-success"><h2>Sajian Baru</h2></div>
    <?php
  foreach ($kuale as $key) {
    
  
?>
  
</div>
</div>
<div class="container mt-3">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card">
          <img src="<?php echo base_url('img/'.$key['gambar']) ?>" alt="img" class="card-img-top">
          <div class="card-body">
            <h3><?php echo $key['makanan'] ?></h3>
            <h5>Rp.<span class="text-center"> <?php echo number_format($key['harga_makanan']) ?></span></h5>
        </div>
      </div>
  </div>

  

 
</div>
 <?php } ?>
</div>


</section>


