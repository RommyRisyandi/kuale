<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="<?php echo base_url(); ?>/asset/images/logokuale.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/slider.css">
	<title>
		Form Pelayan | Kuale Foodcourt Singkawang
	</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  	
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/jquery.dataTables.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	
<body>	
</head>
<div class="main">
<header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href=""><img src="<?php echo base_url();?>/asset/images/logo kuale.jpg" style="width: 100%; height:120%;" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li><a href="<?php echo site_url('admin/logout');?>">Logout</a></li>
              
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>

<section class="content">

	<div class="col-xs-12 col-sm-12">
    <h3 class="text-center">Data Pesanan</h3>
<div class="box">
<a href="<?php echo site_url('admin/pesan'); ?>"><button>Tambah Pesanan</button></a>  
              <div style="overflow-y: scroll; width: 100%"><table style="width: 100%" id='example2' class="table table-bordered table-hover table-striped">
              <thead>
              <th>No.Meja</th>
              <th>Tanggal Pesan</th>
              <th>Total</th>
              <th>Aksi</th>
              </thead>
    
        <tbody>
    <?php foreach ($data as $row => $r) {
      
     ?>

     <tr>
        
              
              <td><?php echo $r->no_meja; ?></td>
              <td><?php echo $r->tgl_pesan; ?></td>
              <td><?php echo $r->total; ?></td>
              <td><a href="<?php echo site_url('admin/detail').$r->id_pesanan?>"><button>Detail</button></a></td></tr>
           

            
                
    <?php } ?>

</tbody></table><br/>       
</div>
</div>
</div>
</section>
</div>




<footer>
<div class="container_12">
    <div class="grid_12"> Kuale Foodcourt Singkawang &copy; 2018 | <a>Privacy Policy</a> | Design by: Rommy Risyandi </div>
    <div class="clear"></div>
  </div>
</footer>
<style type="text/css">
body{
     background-color: #5fa022;
  }
	
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example2').DataTable();
      });
</script>


</body>
</html>