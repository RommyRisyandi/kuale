	<!DOCTYPE html>
  <html>
  <head>
    <link rel="icon" href="<?php echo base_url(); ?>/asset/images/logokuale.ico">
 <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/slider.css">
    <title> Form Kasir | Kuale Foodcourt Singkawang</title>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/jquery.dataTables.css">
<style type="text/css">
    body{
   background-color: #5fa022;

   
  }
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
  
<section class="content" id="content">
  <div class="container_12">
      <div class="grid_12">
     <h3 class="text-center">Form Kasir</h3>
    
    
<div class="col-xs-12 col-md-12">
<div class="box-body">  
              <div style="overflow-y: scroll; width: 100%"><table style="width: 100%" id="example2" class="table table-bordered table-hover">
              <thead>
              <th>ID</th>
              <th>ID Pesanan</th>
              <th>Tanggal Order</th>
              <th>Total Order</th>
              <th>Aksi</th>
              
              </thead>
    
        <tbody>
    <?php foreach ($data as $row => $r) {
      
     ?>

     <tr>
        
              
              <td><?php echo $r->id_menu; ?></td>
              <td><?php echo $r->id_pesanan; ?></td>
              <td><?php echo $r->tgl_order; ?></td>
              <td><?php echo $r->total_order; ?></td>
               <td><button type="submit">Detail</button> | <button type="submit">cetak</button></td>
               
             </tr>
           

            
                
    <?php } ?>

</tbody></table><br/>   

</div>
</div>
</div>


</div>  

  
 </div>

 </div>
</div>
</div>
</div>
</div>

</body>
<footer>
  <div class="container_12">
    <div class="grid_12"> Kuale Foodcourt Singkawang &copy; 2018 | <a>Privacy Policy</a> | Design by: Rommy Risyandi </div>
    <div class="clear"></div>
  </div>
</footer>
</section>
<style type="text/css">
 h3 {
  
 }
footer{
    
    position: sticky;
  }
  a{
    text-decoration: underline;
    font-family: cursive;
  }
  .content {
    
  }

  body{
     overflow-x: hidden;
  }
</style>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example2').DataTable();
      });
</script>


<script type="text/javascript">
  function printlayer(layer)
  {
    var generator = window.open(",'name,");
    var layetext = document.getElementByid(layer);
    generator.document.write(layertext.innerHTML.replace("Print Me"));
  
    generator.document.close();
    generator.print();
    generator.close();
  }
</script>

</body>

</html>
