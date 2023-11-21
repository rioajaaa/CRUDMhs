<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Prodi
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Capres extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Capres_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Capres";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['capres'] = $this->Capres_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("capres/vw_capres", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah";
    $this->load->view("layout/header");
    $this->load->view("capres/vw_tambahCapres", $data);
    $this->load->view("layout/footer");
  }
  public function upload()
  {
    $data =
      [
        'nik' => $this->input->post('nik'),
        'nama' => $this->input->post('nama'),
        'asal' => $this->input->post('asal'),
        'partai' => $this->input->post('partai'),
        'riwayat' => $this->input->post('riwayat'),
        'umur' => $this->input->post('umur'),
      ];
    $this->Capres_model->insert($data);
    redirect('Capres');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit";
    $data['capres'] = $this->Capres_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("capres/vw_editCapres", $data);
    $this->load->view("layout/footer");
  }
  public function update()
  {
    $data =
      [
        'nik' => $this->input->post('nik'),
        'nama' => $this->input->post('nama'),
        'asal' => $this->input->post('asal'),
        'partai' => $this->input->post('partai'),
        'riwayat' => $this->input->post('riwayat'),
        'umur' => $this->input->post('umur'),
      ];
    $id = $this->input->post('id');
    $this->Capres_model->update(['id' => $id], $data);
    redirect('Capres');
  }
  public function hapus($id)
  {
    $this->Capres_model->delete($id);
    redirect('Capres');
  }
}


/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */