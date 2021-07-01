<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
    $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function index()
  {
		
    if($this->session->userdata('level')!='7'){
      redirect('index.php/Home');
    }
    
  }

  

  public function data_user()
  {
		//echo "admiinnnn";
    // if($this->session->userdata('level')!='4'){
    //   redirect('index.php/Home');
    // }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'data_pengguna',
      'footer' => 'layouts/footer',
      'data' => $this->M_admin->lihat_data_pengguna()->result(),
  
    ];
//var_dump($data);
   $this->load->view('template', $data);
    
  }

  public function tambah_pengguna()
  {
		//echo "admiinnnn";
    // if($this->session->userdata('level')!='4'){
    //   redirect('index.php/Home');
    // }
    if($this->input->get('id')) $id=$this->input->get('id');
    else $id='0';

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'tammbah_pengguna',
      'footer' => 'layouts/footer',
      'data' => $this->M_admin->ambil_data($id)->result(),
      'status' => $this->M_pengajuan->ambil_status($id)->result(),
       ];

    $this->load->view('template', $data);
   
  }
 
   public function logout(){

    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    $this->session->unset_userdata('id_user');
    $this->session->unset_userdata('p');
     
    redirect('index.php/Home');
  }


  public function aksi_upload_smk3(){


    $config['upload_path']          = './upload/upload_smk3';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = 2000;
    // $config['max_width']            = 3000;
    // $config['max_height']           = 3000;

    
    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('berkas')){
      $error = array('error' => $this->upload->display_errors());
    redirect('index.php/Admin/informasi_umum');
    }else{
      $data = array('upload_data' => $this->upload->data());

    $berkas=$this->upload->data('file_name');
    $id_user=$this->session->userdata('id_user');
    $this->M_admin->savesmk3($berkas,$id_user);
    }

    $data2= array(
      'nama_perusahaan' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'nib' => $this->input->post('nomor_izin'),
      'jumlah_karyawan' => $this->input->post('karyawan'),
      'no_p2k3' => $this->input->post('nomor_sah'),
      'tanggal_p2k3' => $this->input->post('tanggal_sah'),
    );
   
    $this->M_admin->updateuser($data2,$this->session->userdata('id_user'));
    $this->session->set_flashdata('flash','Data berhasil disimpan');
    redirect('index.php/Admin/informasi_umum');
  }



  


}


    




