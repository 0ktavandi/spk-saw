<?php
$this->load->helper('url');
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">STIKI-SAW.id</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url("index.php/welcome/index");?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Alternatif<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url("index.php/welcome/alternatif");?>">Alternatif</a></li>
          <li><a href="<?php echo base_url("index.php/welcome/nilai_bobot");?>">Nilai Bobot Alternatif</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url("index.php/welcome/criteria");?>">Criteria</a></li>
      <li><a href="<?php echo base_url("index.php/welcome/perhitungan.php");?>">Perhitungan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url("index.php/welcome/about");?>"><span class="glyphicon glyphicon-user"></span> About SAW</a></li>
      <li><a href="<?php echo base_url("index.php/welcome/login");?>"><span class="glyphicon glyphicon-log-in"></span>  LOGIN  </a></li>
    </ul>
  </div>
</nav>