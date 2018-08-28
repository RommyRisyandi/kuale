
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


    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/jquery.dataTables.css">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

  <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  
        <style type="text/css">
body{
   background-color: #5fa022;

   
  }
  table{
    overflow-y: none;
  }
#menu{
  width: 150px;

}

</style>  


        <script type="text/javascript">
 function hitung() {
   var a = $(".harga_satuan").val();
   var b = $(".jml_porsi").val();
   c = a * b;
   $(".subtotal").val(c); 
 }
function isNumberKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode;
  if (charCode != 46 && charCode > 31 && (charCode  < 48 || charCode  > 57))
    return false;
      return true;
}
//date picker

        </script>
       
<script>

</script>
<script type="text/javascript">
 $(document).ready(function() {
    $('#example3').DataTable();
      });
</script>
  </head>
<body>  
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
<div class="container_12">
<div class="grid_12">
  <h3 class="text-center">Tambah Pesanan</h3>
<form>
  <div class="col-xs-12 col-sm-12">
    <table id="example2" class="table table-bordered table-hover table-striped" style="width: 100%">
      <thead>
    <th>Nomor Meja</th>
    <th>Tanggal Order</th>
    <th>Total Order</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <tr>
      <?php
$total=0;
foreach ($detail->result() as $row => $r) {
$total +=$r->subtotal;
}
?>
<?php echo form_open('admin/porder'); ?>
<td><select name="no_meja" class="form-control">
  <option>Pilih No.Meja</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>

<td><input type="date" name="tgl_order" id="tgl_order"></td>
<td><input type="text" name="total" class="subtotal_val" value="<?=$total ;?>" readonly></td>
<td><button type="submit" onClick="return confirm('apakah anda sudah selesai menginput menu?')">Selesai</button></td></tr>
<?php echo form_close();; ?>

<h4></h4>
</tbody></table><br/>
</div>
</form>

 

  <div class="col-xs-12 col-sm-12">
<div class="row">
  <div style="overflow-y: scroll; width: 100%"><table id="example3" class="table table-bordered table-hover table-striped" style="width: 100%">

    <thead>
      
  <th>ID Menu</th>
  <th>Nama Menu</th>
  <th>Harga Satuan</th>
  <th>Kategori</th>
  <th>Jumlah Porsi</th>
  <th>Subtotal</th>
  <th>Aksi</th>

</thead>
<tbody>

     <?php 
          
      foreach ($data as $row => $r)
      
      {
      
     ?>

     
  <tr>
    <?php echo form_open_multipart('admin/apesan'); ?>
      
      <td><input type="text" name="id_menu" value="<?php echo $r->id_menu?>" readonly></td>
      <td><input type="text" name="nama_pesanan" value="<?php echo $r->nama_menu?>" readonly></td>
      <td><input type="text" id="harga_satuan" class="harga_satuan" name="harga_satuan" onkeyup="hitung()" value="<?php echo $r->harga; ?>" readonly></td>
      <td><?php echo $r->kategori; ?></td>
      <td><input type="number" name="jml_porsi" id="jml_porsi" class="jml_porsi" onkeyup="hitung()"></td>
      <td><input type="text" name="subtotal" id="subtotal" class="subtotal" readonly></td>
      <td><a href="<?php echo base_url('admin/apesan') ?>"><button type="submit">Masukkan</button></td></tr>
   <?php echo form_close();; ?>
 <?php } ?>
 
   


</tr></tbody></table><br/>
</div>
</div>



<h3 class="text-center">Data Pesanan</h3>
<div style="overflow-y: scroll; width: 100%"><table id="example4" class="table table-bordered table-hover table-striped" style="width: 100%">
  <thead>
    
    <th>ID Produk</th>
    <th>Nama Pesanan</th>
    <th>Harga Satuan</th>
    <th>Jumlah Porsi</th>
    <th>Subtotal</th>
    <th>Aksi</th>
  </thead>
  <tbody>
     <?php 
     
     $total = 0;
     foreach ($detail->result() as $row => $r) {
      
     ?>
    <tr>
      
      <td><?php echo $r->id_menu; ?></td>
      <td><?php echo $r->nama_pesanan; ?></td>
      <td id="harga_satuan" class="harga_satuan">Rp.<?php echo $r->harga_satuan; ?></td>
      <td id="jml_porsi" class="jml_porsi" onkeyup="total()"><?php echo $r->jml_porsi; ?></td>
      <td id="subtotal" class="subtotal" onkeyup="total()">Rp.<?php echo $r->subtotal; ?></td>
      <td><a href="<?php echo site_url('admin/hapus2/').$r->id_menu?>"
            onClick="return confirm('apakah anda yakin ingin menghapus pesanan?')"><button>Hapus</button></a></td></tr>
       <?php $total +=$r->subtotal; } ?>

       <tr style="font-weight: bold;"><td colspan="3"></td><td>Total :</td><td id="total1" name="total1" class="total1">Rp.<?php echo $total; ?></td></tr>
       
       
  </tbody></table><br/>
</div>
</div>
  </div>

</div>
</div>

</section>
</div>


 

</div>
</div>

<footer>
<div class="container_12">
    <div class="grid_12"> Kuale Foodcourt Singkawang &copy; 2018 | <a>Privacy Policy</a> | Design by: Rommy Risyandi </div>
    <div class="clear"></div>
  </div>
</footer>
</body>



</html>