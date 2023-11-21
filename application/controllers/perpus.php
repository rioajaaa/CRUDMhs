<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->library('pustaka');
	}
	public function index()
	{
		$this->Pustaka->hitung(150, 300, 100, 200);
	}
}
?>