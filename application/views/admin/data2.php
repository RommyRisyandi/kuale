<html>
<head>
  <link rel="icon" href="<?php echo base_url(); ?>/asset/images/logokuale.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/slider.css">
  <title>Form Admin | Kuale Foodcourt Singkawang</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/jquery.dataTables.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/jquery.dataTables.css">
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example2').DataTable();
      });
</script>
</head>
<div class="box">  
              <a href="<?php echo site_url('admin/upload'); ?>"> <button> Tambah Menu </button></a>
              <h4></h4>
              <div style="overflow-y: scroll; width: 100%"><table id="example2" class="table table-bordered table-hover table-striped" style="width: 100%">
              <thead>
              <th>Nama Menu</th>
              <th>Harga</th>
              <th>Kategori</th>
              <th>Foto</th>
              <th>Aksi</th>
              </thead>
    
        <tbody>
    <?php foreach ($data as $row => $r) {
      
     ?>

     <tr>
        
              
              <td><?php echo $r->nama_menu; ?></td>
              <td>Rp.<?php echo $r->harga; ?></td>
              <td><?php echo $r->kategori; ?></td>
              <td><?php echo $r->gambar; ?></td>
              <td><a href="<?php echo site_url('admin/edit/').$r->id_menu?>"><button>Edit</button></a> |
                  <a href="<?php echo site_url('admin/hapus/').$r->id_menu?>"
            onClick="return confirm('apakah anda yakin ingin menghapus menu?')"><button>Hapus</button></a></td></tr>
                
    <?php } ?>
    
</tbody></table><br/>   
</div>
</div>
</div>
</section>