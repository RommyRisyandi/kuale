	<header>
   <nav class="navbar navbar-expand-lg navbar-light p-3 mb-2 bg-success ">
  <a class="navbar-brand img-thumbnail" href="<?php echo base_url('user/index'); ?>"><img src="<?php echo base_url(); ?>/asset/images/logo kuale.jpg" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('user/index')?>">Logout</a>
      </li>
    </ul>
    
  </div>
  </nav>

</div>
 
  </header>
  <body>
<section class="content" id="content">
     <h3 class="text-center">Form Pelayan</h3>
    <div class="row">
    
<div class="col-xs-12 col-md-12">
<div class="box-body">  
              <div style="overflow-y: scroll; width: 100%"><table style="width: 100%" id='example2' class="table table-bordered table-hover table-striped">
              <thead>
              <th>Nama Makanan</th>
              <th>Harga</th>
              <th>Aksi</th>
              </thead>
    
        <tbody>
    <?php foreach ($makanan as $row => $r) {
      
     ?>

     <tr>
        
              
              <td><?php echo $r->makanan; ?></td>
              <td>Rp.<?php echo $r->harga_makanan; ?></td>
              <td><a href="<?php echo site_url('admin/apelayan/').$r->makanan?>">masukkan</a></td></tr>
           

            
                
    <?php } ?>

</tbody></table><br/>       
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12">
<div class="box-body">  
              <div style="overflow-y: scroll; width: 100%"><table id="example2" class="table table-bordered table-hover table-striped">
              <thead>
              <th>Nama Minuman</th>
              <th>Harga</th>
              <th>Aksi</th>
              
              </thead>
    
        <tbody>
    <?php foreach ($minuman as $row => $r) {
      
     ?>

     <tr>
        
              
              <td><?php echo $r->minuman; ?></td>
              <td>Rp.<?php echo $r->harga_minuman; ?></td>
             <td><a href="<?php echo site_url('admin/apelayan2/').$r->minuman?>">Masukkan</a></td></tr>

           

            
                
    <?php } ?>

</tbody></table><br/>   
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12">
Masukkan No.Meja : <input type="number" name="no_meja">
</div>
<div class="col-xs-12 col-sm-12">

<textarea rows="10" cols="50px" readonly>
<?php foreach ($data as $row => $r) {
      
     ?>  
  Kuale Foodcourt Singkawang
  --------------------------
  Makanan:
  <?php echo $r->makanan." ".$r->harga_makanan; ?>
  Minuman:
  <?php echo $r->minuman." ".$r->harga_minuman; ?>
  --------------------------
  Total :

<?php } ?>
  </textarea>

</div>
<div class="col-xs-12 col-sm-12">
<a href="<?php echo site_url('admin/'); ?>"> <button>Kirim </button></a>  
  </div>
</div>
</div>
</div>
</div>


</body>
<footer>
<hr size="20">

 <div class="row p-3 mb-2 bg-success">
    <div class="col-md-12 text-center "> Kuale Foodcourt Singkawang &copy; 2018 | <a>all right reserved</a> | Design by: Rommy Risyandi </div>
</div>
</footer>
</section>

