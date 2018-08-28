<body>
	<div class="main">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="<?php echo site_url('user/index')?>"><img src="<?php echo base_url();?>/asset/images/logo kuale.jpg" style="width: 100%; height: 120%;" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li><a href="<?php echo site_url('user/index');?>">Beranda</a></li>
              <li><a href="<?php echo site_url('user/about');?>">Profil</a>
              </li>
              <li class="current"><a href="<?php echo site_url('user/menu');?>">Menu Makanan & Minuman</a></li>
              <li><a href="<?php echo site_url('user/gallery')?>">Galleri</a></li>
              <li><a href="<?php echo site_url('user/login')?>">Login</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
<div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h2>Daftar Menu</h2>
      </div>
      <div class="clear"></div>
      <div class="portfolio">
        <div class="menu">
          <?php
  foreach ($kuale as $key) {
    
  
?>
          <div class="grid_3 alpha"> <img src="<?php echo base_url('img/'.$key['foto']) ?>" alt="" class="img_inner" style="text-align: center; ">
            
            <h3 style="text-align: center;"><a><?php echo $key['nama_menu'] ?></a></h3>
            <h3 style="text-align: center;"><a>Rp. <?php echo number_format($key['harga']) ?></a></h3>
         
          </div>
        <?php } ?>
        </div>

      </div>
</div>
</div>
</div>



</div>

<footer>
  <div class="container_12">
    <div class="grid_12"> Kuale Foodcourt Singkawang &copy; 2018 | <a>Privacy Policy</a> | Design by: Rommy Risyandi </div>
    <div class="clear"></div>
  </div>
</footer>
<style type="text/css">
img-thumbnail1 {
	margin: 15px 30px 15px 30px;
	border-style: none; 
}

.container {
	font-family: cursive;
}

</style>
</div>