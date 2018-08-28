	<div class="container" id="container">
<div class="row col-md-offset-1">
<?php
	foreach ($kuale as $key) {
		
	
?>
<div class="col-md-3 col-xs-3">
	<div class="card">
<img src="<?php echo base_url('img/'.$key['gambar']) ?>" class="img-thumbnail1" width=100% height=200px>
<div class="text-center">
	<div class="card-body">
<?php echo $key['makanan'] ?> <br>
Rp. <?php echo number_format($key['harga_makanan']) ?>
</div>
</div>
</div>
</div>
<?php } ?>

</div>
