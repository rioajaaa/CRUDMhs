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

class Prodi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer");
  }

  public function tambah()
  {
    // $data['judul'] = "Halaman Tambah";
    // $this->load->view("layout/header");
    // $this->load->view("prodi/vw_tambahProdi", $data);
    // $this->load->view("layout/footer");

    $data['judul'] = "Halaman Tambah Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('prodi','Program Studi','required',[
      'required'=>'Program Studi is required'
    ]);
    $this->form_validation->set_rules('ruangan','Room','required',[
      'required'=>'Room is required'
    ]);
    $this->form_validation->set_rules('jurusan','Major','required',[
      'required'=>'Major is required'
    ]);
    $this->form_validation->set_rules('akre','Akreditas','required',[
      'required'=>'Akreditasi is required'
    ]);
    $this->form_validation->set_rules('nk','Kaprodi Name','required',[
      'required'=>'Kaprodi Name is required'
    ]);
    $this->form_validation->set_rules('tb','Since','required',[
      'required'=>'Since is required'
    ]);
    $this->form_validation->set_rules('ol','Graduete','required',[
      'required'=>'Graduete is required'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("prodi/vw_tambahProdi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'prodi' => $this->input->post('prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akre' => $this->input->post('akre'),
        'nk' => $this->input->post('nk'),
        'tb' => $this->input->post('tb'),
        'ol' => $this->input->post('ol'),
      ];
      
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image){
        $config['allowed_type'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = '.assets/assets/img/prodi/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Prodi_model->insert($data, $upload_image);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Prodi Berhasil Ditambah</div>');
      redirect('Prodi');
    }
  }

  public function upload()
  {
    $data =
      [
        'prodi' => $this->input->post('prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akre' => $this->input->post('akre'),
        'nk' => $this->input->post('nk'),
        'tb' => $this->input->post('tb'),
        'ol' => $this->input->post('ol'),
      ];
    $this->Prodi_model->insert($data);
    redirect('Prodi');
  }

  public function edit($id)
  {
    // $data['judul'] = "Halaman Edit";
    // $data['prodi'] = $this->Prodi_model->getById($id);
    // $this->load->view("layout/header");
    // $this->load->view("prodi/vw_editProdi", $data);
    // $this->load->view("layout/footer");

    $data['judul'] = "Halaman Edit Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->getById($id);

    $this->form_validation->set_rules('prodi','Program Studi','required',[
      'required'=>'Program Studi is required'
    ]);
    $this->form_validation->set_rules('ruangan','Room','required',[
      'required'=>'Room is required'
    ]);
    $this->form_validation->set_rules('jurusan','Major','required',[
      'required'=>'Major is required'
    ]);
    $this->form_validation->set_rules('akre','Akreditas','required',[
      'required'=>'Akreditasi is required'
    ]);
    $this->form_validation->set_rules('nk','Kaprodi Name','required',[
      'required'=>'Kaprodi Name is required'
    ]);
    $this->form_validation->set_rules('tb','Since','required',[
      'required'=>'Since is required'
    ]);
    $this->form_validation->set_rules('ol','Graduete','required',[
      'required'=>'Graduete is required'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("prodi/vw_editProdi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'prodi' => $this->input->post('prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akre' => $this->input->post('akre'),
        'nk' => $this->input->post('nk'),
        'tb' => $this->input->post('tb'),
        'ol' => $this->input->post('ol'),
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image){
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = '.assets/assets/img/prodi/';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('gambar')) {
          $old_image = $data['prodi']['gambar'];
          if ($old_image != 'default.jpg'){
            unlink(FCPATH . 'assets/assets/img/prodi/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $id = $this->input->post('id');
      $this->Prodi_model->update(['id' => $id], $data, $upload_image);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Prodi Berhasil Diubah</div>');
      redirect('Prodi');
    }
  }
  // public function update()
  // {
  //   $data =
  //     [
  //       'prodi' => $this->input->post('prodi'),
  //       'ruangan' => $this->input->post('ruangan'),
  //       'jurusan' => $this->input->post('jurusan'),
  //       'akre' => $this->input->post('akre'),
  //       'nk' => $this->input->post('nk'),
  //       'tb' => $this->input->post('tb'),
  //       'ol' => $this->input->post('ol'),
  //     ];
  //   $id = $this->input->post('id');
  //   $this->Prodi_model->update(['id' => $id], $data);
  //   redirect('Prodi');
  // }

  public function hapus($id)
  {
    $this->Prodi_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0){
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Prodi Tidak dapat Dihapus (Sudah Berelasi)</div>');
    } else {
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus</div>');
    }
    redirect('Prodi');
  }
}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */