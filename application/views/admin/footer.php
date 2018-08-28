<style type="text/css">
 h3 {
  font-family: cursive;
 }

  .content {
    font-family: cursive;
  }
</style>
<style type="text/css">
  footer {
    font-family: cursive;
  }
  hr {
 
 border: 2px solid #666; 
	}

	a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
    -webkit-transition: width 2s;
    transition: width 2s;
}


.container {
    font-family: cursive;
    color: #0a0a0a;
}
</style>

<script src="<? echo base_url(); ?>/asset/js/jquery.js"></script>

<script src="<? echo base_url(); ?>/asset/js/bootstrap.min.js"></script>

<script src="<? echo base_url(); ?>/asset/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>/asset/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url(); ?>/asset/js/datatables.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.1/holder.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>
  $(function () {
   
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


</body>
</html>