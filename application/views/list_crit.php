<?php
require_once('layout.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ALTERNATIF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="page-header">
</div>
<div class="panel panel-default">
<div class="panel-heading">
<form class="form inline">
 			<input type="hidden" name="m" value="kriteria"/>
 			<div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="" />
            </div>
        </form>
    </div>
<table class="table">
	<thead>
		<tr>
		<th>No</th>
		<th>Kode</th>
		<th>Nama Kriteria</th>
		<th>Atribut</th>
		<th>Bobot</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<!-- //kode disini// -->

	</tbody>
</table>
</body>
</html>