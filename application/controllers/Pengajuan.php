<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pengajuan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
    $this->load->model('M_pengajuan');
    $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function pengajuan()
  {
		//echo "admiinnnn";
    // if($this->session->userdata('level')!='4'){
    //   redirect('index.php/Home');
    // }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'list_pengajuan',
      'footer' => 'layouts/footer',
      'cetak'=>'0',
      'data' => $this->M_pengajuan->lihat_data_pengajuan()->result(),
  
    ];
//var_dump($data);
   $this->load->view('template', $data);
    
  }

  public function tambah_pengajuan()
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
      'content' => 'form_pengajuan',
      'footer' => 'layouts/footer',
      'cetak'=>'0',
      'data' => $this->M_pengajuan->ambil_data($id)->result(),
      'status' => $this->M_pengajuan->ambil_status($id)->result(),
       ];

    $this->load->view('template', $data);
   
  }


 

  public function simpan_pengajuan(){
    if($this->input->post('id_pengajuan')) 
    {
      $status='update';

      $tgl_pengajuan = $this->input->post('tgl_pengajuan');
      $tgl_acc_pengawas_k3 = $this->input->post('tgl_acc_pengawas_k3');
      $tgl_acc_kabag = $this->input->post('tgl_acc_kabag');
      $tgl_acc_mr = $this->input->post('tgl_acc_mr');
      $tgl_acc_rekan = $this->input->post('tgl_acc_rekan');
    
      $ttd_pelaksana = $this->input->post('ttd_pelaksana');
      $ttd_pengawas_k3 = $this->input->post('ttd_pengawas_k3');
      $ttd_kabag = $this->input->post('ttd_kabag');
      $ttd_mr = $this->input->post('ttd_mr');
      $ttd_rekan = $this->input->post('ttd_rekan');

      $nama_satpam = $this->input->post('nama_satpam');
      $nama_pengawas = $this->input->post('nama_pengawas');
      $nama_kabag = $this->input->post('nama_kabag');
      $nama_mr = $this->input->post('nama_mr');
      $nama_rekan = $this->input->post('nama_rekan');
    }
    else {
      $status='insert';
      $tgl_acc_pengawas_k3 = null;
      $tgl_acc_kabag = null;
      $tgl_acc_mr = null;
      $tgl_acc_rekan = null;

      
      $ttd_pengawas_k3 = null;
      $ttd_kabag = null;
      $ttd_mr =null;
      $ttd_rekan = null;

      $nama_pengawas = null;
      $nama_kabag = null;
      $nama_mr =null;
      $nama_rekan = null;
      $nama_satpam=null;
    


    }
     
    $pelaksana = $kabag = $pengawas = $mr = $rekan = null;
    if($this->input->post('tombol')=='pelaksana') {
      $tgl_pengajuan =  date("Y/m/d h:i:sa");
      $pelaksana=$this->input->post('tombol');
      $ttd_pelaksana=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
    }
    else if($this->input->post('tombol')=='pengawas') {
      $tgl_acc_pengawas_k3 =  date("Y/m/d h:i:sa");
      $pengawas=$this->input->post('tombol');
      $ttd_pengawas_k3=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
      $nama_pengawas=$this->M_pengajuan->ambil_nama($this->session->userdata('id_user'))->result()[0]->nama;

    }
    else if($this->input->post('tombol')=='kabag') {
      $tgl_acc_kabag =  date("Y/m/d h:i:sa");
      $kabag=$this->input->post('tombol');
      $ttd_kabag=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
      $nama_kabag=$this->M_pengajuan->ambil_nama($this->session->userdata('id_user'))->result()[0]->nama;

    }
    else if($this->input->post('tombol')=='mr') {
      $tgl_acc_mr  =  date("Y/m/d h:i:sa"); 
      $mr=$this->input->post('tombol');
      $ttd_mr=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
      $nama_mr=$this->M_pengajuan->ambil_nama($this->session->userdata('id_user'))->result()[0]->nama;

    }
    else if($this->input->post('tombol')=='rekan') {
      $tgl_acc_rekan =  date("Y/m/d h:i:sa");
      $rekan=$this->input->post('tombol');
      $ttd_rekan=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
      $nama_rekan=$this->M_pengajuan->ambil_nama($this->session->userdata('id_user'))->result()[0]->nama;

    }
    else if($this->input->post('tombol')=='satpam') {
      $tgl_catatan_satpam =  date("Y/m/d h:i:sa");
      $satpam=$this->input->post('tombol');
      $nama_satpam=$this->M_pengajuan->ambil_nama($this->session->userdata('id_user'))->result()[0]->nama;

    }
    else;

    
    $data=array(
//pengajuan (pelaksana)      
      'id_user'=> $this->session->userdata('id_user'),
      'nama_pekerjaan'=>$this->input->post('nama_pekerjaan'),
      'nomor_pekerjaan'=>$this->input->post('nomor_pekerjaan'),
      'nama_pelaksana'=>$this->input->post('nama_pelaksana'),
      'pimpinan_rekanan'=>$this->input->post('pimpinan_rekanan'),
      'no_tlp_pimpinan' => $this->input->post('no_tlp_pimpinan'),
      'pengawas_rekanan'=>$this->input->post('pengawas_rekanan'),
      'no_tlp_pengawas'=>$this->input->post('no_tlp_pengawas'),
      'lokasi_pekerjaan'=>$this->input->post('lokasi_pekerjaan'),
      'lama_dari'=>$this->input->post('lama_dari'),
      'lama_sampai'=>$this->input->post('lama_sampai'),
      'jam_kerja'=>$this->input->post('jam_kerja'),
      'pengawas_teknis'=>$this->input->post('pengawas_teknis'),
      'jumlah_tenaga'=>$this->input->post('jumlah_tenaga'),
//klasifikasi (pelaksana)
      'instalasi_listrik'=>$this->input->post('instalasi_listrik'),
      'instalasi_jaringan'=>$this->input->post('instalasi_jaringan'),
      'jartel'=>$this->input->post('jartel'),
      'pemasangan_service_ac'=>$this->input->post('pemasangan_service_ac'),
      'fogging'=>$this->input->post('fogging'),
      'tandon'=>$this->input->post('tandon'),
      'pengecatan_kantor'=>$this->input->post('pengecatan_kantor'),
      'pengelasan'=>$this->input->post('pengelasan'),
      'limbah_b3'=>$this->input->post('limbah_b3'),
      'kaca'=>$this->input->post('kaca'),
      'fire'=>$this->input->post('fire'),
//pengaturan (pengawas k3)
      'uu'=>$this->input->post('uu'),
      'peraturan_umum_k3'=>$this->input->post('peraturan_umum_k3'),
      'surat_izin'=>$this->input->post('surat_izin'),
      'syarat_kerja'=>$this->input->post('syarat_kerja'),
      'claim' => $this->input->post('claim'),
      'pelaporan'=>$this->input->post('pelaporan'),
      'p3k'=>$this->input->post('p3k'),
      'peraturan1'=>$this->input->post('peraturan1'),
      'peraturan2'=>$this->input->post('peraturan2'),
      'peraturan3'=>$this->input->post('peraturan3'),
      'peraturan_1'=>$this->input->post('peraturan_1'),
      'peraturan_2'=>$this->input->post('peraturan_2'),
      'peraturan_3'=>$this->input->post('peraturan_3'),
  //ttd acc    
      'ttd_kabag'=>$ttd_kabag,
      'ttd_rekan'=>$ttd_rekan,
      'ttd_pengawas_k3'=>$ttd_pengawas_k3,
      'ttd_pelaksana'=>$ttd_pelaksana,
      'ttd_mr'=>$ttd_mr,

      'nama_kabag'=>$nama_kabag,
      'nama_rekan'=>$nama_rekan,
      'nama_pengawas'=>$nama_pengawas,
      'nama_satpam'=>$nama_satpam,
      'nama_mr'=>$nama_mr,
  // rekomendasi dan catatan   
      'rekomendasi_pengawas_k3'=>$this->input->post('rekomendasi_pengawas_k3'),
      'rekomendasi_mr'=>$this->input->post('rekomendasi_mr'),
      'catatan'=>$this->input->post('catatan'),
      'tgl_catatan_satpam'=>$this->input->post('tgl_catatan_satpam'),
      'status'=>$this->input->post('tombol'),
  //tgl
      'tgl_pengajuan'=>$tgl_pengajuan,
      'tgl_acc_kabag'=>$tgl_acc_kabag,
       'tgl_acc_rekan'=>$tgl_acc_rekan,
       'tgl_acc_pengawas_k3'=>$tgl_acc_pengawas_k3,
      'tgl_acc_mr'=>$tgl_acc_mr,

      
      );
      var_dump($data);
     if($status=='update') $this->M_pengajuan->update_pengajuan($this->input->post('id_pengajuan'),$data);
     else $this->M_pengajuan->simpan_pengajuan($data);
  
    $this->session->set_flashdata('flash', 'Data Berhasil Disimpan');
  redirect('index.php/Pengajuan/pengajuan');



  }


  // public function hapus_pengajuan(){
  //   $id=$this->input->get('id');
  //   echo $id;
  //   $this->M_pengaduan->hapus_pengaduan($id);
  //   $this->session->set_flashdata('flash', 'Data Behasil Dihapus');
  //   redirect('index.php/Pengaduan/data_pengaduan');
  // }


  public function cetak_form()

	{
    

    if($this->input->get('id')) $id=$this->input->get('id');
    else $id='0';

    $data2= $this->M_pengajuan->ambil_data($id)->result();
    
    $lampiran1=$lampiran2=$lampiran3=$lampiran4=null;
    $lampiran5=$lampiran6=$lampiran7=$lampiran8=null;
    $lampiran9=$lampiran10=$lampiran11=null;
 if($data2){
    if($data2[0]->instalasi_listrik=='1')$lampiran1='pemeriksaan_listrik';
    if($data2[0]->instalasi_jaringan=='1')$lampiran2='pemeriksaan_jarkom';
    if($data2[0]->jartel=='1')$lampiran3='pemeriksaan_jartel';
    if($data2[0]->pengelasan=='1')$lampiran4='pengelasan';
    if($data2[0]->fire=='1')$lampiran5='fire_hydrant';
    if($data2[0]->tandon=='1')$lampiran6='tandon';
    if($data2[0]->pengecatan_kantor=='1')$lampiran7='pengecatan';
    if($data2[0]->kaca=='1')$lampiran8='kaca';
    if($data2[0]->limbah_b3=='1')$lampiran9='limbah_b3';
    if($data2[0]->fogging=='1')$lampiran10='fogging';
    if($data2[0]->pemasangan_service_ac=='1')$lampiran11='pemeriksaan_ac';
 }

    $data = [
        
      //'header'=>'layouts/head2',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'cetak',
      'content1' => $lampiran1,
      'content2' => $lampiran2,
      'content3' => $lampiran3,
      'content4' => $lampiran4,
      'content5' => $lampiran5,
      'content6' => $lampiran6,
      'content7' => $lampiran7,
      'content8' => $lampiran8,
      'content9' => $lampiran9,
      'content10' => $lampiran10,
      'content11' => $lampiran11,
      //'footer' => 'layouts/footer2',
      'data' => $data2,
      'status' => $this->M_pengajuan->ambil_status($id)->result(),
      'cetak'=>'1',
       ];

      // var_dump($data);
    //   if($data2){
    //     echo "gtttt";
    //     if($data2[0]->instalasi_listrik=='1')$data=['content1'=>'pemeriksaan_listrik'];
    //     if($data2[0]->instalasi_jaringan=='1')$data=['content2'=>'pemeriksaan_jarkom'];
    //     if($data2[0]->jartel=='1')$data=['content3'=>'pemeriksaan_jartel'];
    //     if($data2[0]->pengelasan=='1')$lampiran4='pengelasan';
    //     if($data2[0]->fire=='1')$lampiran5='fire_hydrant';
    //     if($data2[0]->tandon=='1')$lampiran6='tandon';
    //     if($data2[0]->pengecatan_kantor=='1')$lampiran7='pengecatan';
    //     if($data2[0]->kaca=='1')$lampiran8='kaca';
    //     if($data2[0]->limbah_b3=='1')$lampiran9='limbah_b3';
    //     if($data2[0]->fogging=='1')$lampiran10='fogging';
    //     if($data2[0]->pemasangan_service_ac=='1')$lampiran11='pemeriksaan_ac';
    //  }
     $this->load->library('pdf');
		//  $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "IJIN KERJA.pdf";
		 //$this->pdf->load_view('cetak', $data);
     //var_dump($data);
    //$html=$this->load->view('template', $data, true);
     $this->load->view('template', $data);
		 //$this->load->library('Pdf');

		

		//setting awal

		// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    //     $pdf->setPrintFooter(false);

    //     $pdf->setPrintHeader(false);

    //     $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

    //     $pdf->AddPage('');

    //     $pdf->Write(0, '', '', 0, 'L', true, 0, false, false, 0);

    //     $pdf->SetFont('');

        

         //$pdf->writeHTML($html);
         //ob_end_clean();
         //$pdf->Output("Ijin_Pelaksanaan_Kerja ".date("d-m-Y").".pdf", 'I');

	}

//   public function tes_excel() {

//     $template='book.xls';
//     $templateDir='./';

//     $config= array(
//       'template'=>$template,
//       'templateDir'=>$templateDir,
//     );

//     $R=new PHPReport($config);
//     $R->load(array(
//       array(
//       'id'=>'inv',
//       'data'=>array('company'=>'tessss'),
//       )
//       ));
//       echo $R->render('html');
//       exit();
//   }

//   public function cetak_detail_data()

// 	{
// 		$id = $this->input->get('id_pengajuan');
// 		$data['pengajuan'] =$this->M_pengajuan->tampil_data_id($id)->result();
// 		$html = $this->load->view('coba',$data,true);

// 	    	$this->load->library('Pdf');

// 		//setting awal



// 		  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//         $pdf->setPrintFooter(false);
//         $pdf->setPrintHeader(false);
//         $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
//         $pdf->AddPage('');
//         $pdf->Write(0, '', '', 0, 'L', true, 0, false, false, 0);
//         $pdf->SetFont('');
//         $pdf->writeHTML($html);
//         ob_end_clean();
//         $pdf->Output("IPK ".date("d-m-Y").".pdf", 'I');

  



// }

  


  


}
