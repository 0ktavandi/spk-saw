<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('index.php');
	}
	public function criteria(){
		$this->load->view('list_crit.php');
	}
	public function alternatif(){
		$this->load->view('list_alt.php');
	}
	public function nilai_bobot(){
		$this->load->view('nil_bobot.php');
	}
	public function about(){
		$this->load->view('about.php');
	}
	public function login(){
		$this->load->view('login.php');
	}
	public function perhitungan(){
		$this->load->view('perhitungan.php');
	}

}
