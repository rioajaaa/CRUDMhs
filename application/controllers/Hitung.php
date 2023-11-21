<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung extends CI_Controller {

	function __construct()
    {
		parent::__construct();
        $this->load->library('Persegi');
	}
	function index()
	{
        $this->persegi->keliling('10');
        echo "<br/>";
		$this->persegi->luas('10');
	}
}
?>