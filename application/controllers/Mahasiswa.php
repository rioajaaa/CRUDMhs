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

class Mahasiswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_mahasiswa", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
  {
    // $data['judul'] = "Halaman Tambah";
    // $data['prodi'] = $this->Prodi_model->get();
    // $this->load->view("layout/header", $data);
    // $this->load->view("mahasiswa/vw_tambahMahasiswa", $data);
    // $this->load->view("layout/footer", $data);

    $data['judul'] = "Halaman Tambah Mahasiswa";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama','Nama Mahasiswa','required',[
      'required'=>'Mahasiswa Name is required'
    ]);
    $this->form_validation->set_rules('nim','Nim','required',[
      'required'=>'Mahasiswa Nim is required'
    ]);
    $this->form_validation->set_rules('email','Email','required',[
      'required'=>'Mahasiswa Email is required'
    ]);
    $this->form_validation->set_rules('prodi','Prodi','required',[
      'required'=>'Mahasiswa Prodi is required'
    ]);
    $this->form_validation->set_rules('alamat','Alamat','required',[
      'required'=>'Mahasiswa Alamat is required'
    ]);
    $this->form_validation->set_rules('as','Asal Sekolah','required',[
      'required'=>'Mahasiswa Asal Sekolah is required'
    ]);
    $this->form_validation->set_rules('nh','Phone','required',[
      'required'=>'Mahasiswa Phone is required'
    ]);
    $this->form_validation->set_rules('jk','Gender','required',[
      'required'=>'Mahasiswa Gender is required'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambahMahasiswa", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'alamat' => $this->input->post('alamat'),
        'jk' => $this->input->post('jk'),
        'as' => $this->input->post('as'),
        'nh' => $this->input->post('nh'),
      ];
      $this->Mahasiswa_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Diatmbah</div>');
      redirect('Mahasiswa');
    }

  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_detailMahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function upload()
  {
    $data =
      [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'jk' => $this->input->post('jk'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'as' => $this->input->post('as'),
        'nh' => $this->input->post('nh'),
        'alamat' => $this->input->post('alamat'),
      ];
    $this->Mahasiswa_model->insert($data);
    redirect('Mahasiswa');
  }
  public function hapus($id)
  {
    $this->Mahasiswa_model->delete($id);
    $this->session->set_flashdata('message','< class="alert alert-success" role="alert">Data Mahasiswa Berhasil Dihapus</div>');
    redirect('Mahasiswa');
  }
  public function edit($id)
  {
    // $data['judul'] = "Halaman Edit";
    // $data['prodi'] = $this->Prodi_model->get();
    // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    // $this->load->view("layout/header");
    // $this->load->view("mahasiswa/vw_editMahasiswa", $data);
    // $this->load->view("layout/footer");

    $data['judul'] = "Halaman Edit Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();

    $this->form_validation->set_rules('nama','Nama Mahasiswa','required',[
      'required' => "Mahasiswa Name is required"
    ]);
    $this->form_validation->set_rules('nim','Nim','required',[
      'required'=>'Mahasiswa Nim is required'
    ]);
    $this->form_validation->set_rules('email','Email','required',[
      'required'=>'Mahasiswa Email is required'
    ]);
    $this->form_validation->set_rules('prodi','Prodi','required',[
      'required'=>'Mahasiswa Prodi is required'
    ]);
    $this->form_validation->set_rules('alamat','Alamat','required',[
      'required'=>'Mahasiswa Alamat is required'
    ]);
    $this->form_validation->set_rules('as','Asal Sekolah','required',[
      'required'=>'Mahasiswa Asal Sekolah is required'
    ]);
    $this->form_validation->set_rules('nh','Phone','required',[
      'required'=>'Mahasiswa Phone is required'
    ]);
    $this->form_validation->set_rules('jk','Gender','required',[
      'required'=>'Mahasiswa Gender is required'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_editMahasiswa", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'alamat' => $this->input->post('alamat'),
        'jk' => $this->input->post('jk'),
        'as' => $this->input->post('as'),
        'nh' => $this->input->post('nh'),
      ];
      $id = $this->input->post('id');
      $this->Mahasiswa_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Diubah</div>');
      redirect('Mahasiswa');
    }
  }
  // public function update()
  // {
  //   $data =
  //     [
  //       'nama' => $this->input->post('nama'),
  //       'nim' => $this->input->post('nim'),
  //       'jk' => $this->input->post('jk'),
  //       'email' => $this->input->post('email'),
  //       'prodi' => $this->input->post('prodi'),
  //       'as' => $this->input->post('as'),
  //       'nh' => $this->input->post('nh'),
  //       'alamat' => $this->input->post('alamat'),
  //     ];
  //   $id = $this->input->post('id');
  //   $this->Mahasiswa_model->update(['id' => $id], $data);
  //   redirect('Mahasiswa');
  // }
}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */