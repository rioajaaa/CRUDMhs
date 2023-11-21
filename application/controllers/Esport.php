<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswa
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

class Esport extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
    $this->load->model('Esport_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['judul'] = "Halaman Esport Team";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['esport'] = $this->Esport_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("esport/vw_esport", $data);
    $this->load->view("layout/footer", $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Esport";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['esport'] = $this->Esport_model->get();
    $this->form_validation->set_rules('nama_team','Nama Team','required',[
      'required'=>'Team Name is required'
    ]);
    $this->form_validation->set_rules('nama_captain','Nama Captain','required',[
      'required'=>'Captain Name is required'
    ]);
    $this->form_validation->set_rules('jumlah_member','Jumlah Member','required',[
      'required'=>'Number of Member is required'
    ]);
    $this->form_validation->set_rules('nomor_daftar','Nomor Pendaftaran','required',[
      'required'=>'Registration Number is required'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("esport/vw_tambahEsport", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_team' => $this->input->post('nama_team'),
        'nama_captain' => $this->input->post('nama_captain'),
        'jumlah_member' => $this->input->post('jumlah_member'),
        'nomor_daftar' => $this->input->post('nomor_daftar'),
      ];
      $this->Esport_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Esport Berhasil Ditambah</div>');
      redirect('Esport');
    }

  }
  public function hapus($id)
  {
    $this->Esport_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Esport Berhasil Dihapus</div>');
      redirect('Esport');
  }

  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Esport";
    $data['esport'] = $this->Esport_model->getById($id);
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_team','Nama Team','required',[
        'required'=>'Team Name is required'
      ]);
      $this->form_validation->set_rules('nama_captain','Nama Captain','required',[
        'required'=>'Captain Name is required'
      ]);
      $this->form_validation->set_rules('jumlah_member','Jumlah Member','required',[
        'required'=>'Number of Member is required'
      ]);
      $this->form_validation->set_rules('nomor_daftar','Nomor Pendaftaran','required',[
        'required'=>'Registration Number is required'
      ]);
      if ($this->form_validation->run()==false){
        $this->load->view("layout/header", $data);
        $this->load->view("esport/vw_editEsport", $data);
        $this->load->view("layout/footer");
      } else {
        $data = [
          'nama_team' => $this->input->post('nama_team'),
          'nama_captain' => $this->input->post('nama_captain'),
          'jumlah_member' => $this->input->post('jumlah_member'),
          'nomor_daftar' => $this->input->post('nomor_daftar'),
        ];
      $id = $this->input->post('id');
      $this->Esport_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Esport Berhasil Diubah</div>');
      redirect('Esport');
    }
  }
}