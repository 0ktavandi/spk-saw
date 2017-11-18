<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once('layout.php');
?>
<div class="container">
	<center>
	<h1> Sistem Informasi Penilaian Pegawai Terbaik di Instansi </h1>
	</center>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="index.php" class="search-form" method="post">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
                <!-- //kode disini// -->
            </form>
        </div>
    </div>

</div>


</body> 
</html>
