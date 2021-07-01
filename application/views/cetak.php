<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />    
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/favicon22.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>SIDIGO</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo base_url()?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="<?php echo base_url()?>assets/js_new/sweetalert/dist/sweetalert2.all.min.js"></script>
    <link href='<?php echo base_url()?>assets/plugins/datatables/datatables.min.css' rel='stylesheet' />

    
</head>
<body >
    <!-- Body Inner -->
    <div class="body-inner" style="background: url('<?php echo base_url() ?>assets/images/121.png')">
        <!-- Header -->
       
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                    <div class="">
                    <form method="post" action="<?php echo base_url().'index.php/Pengajuan/simpan_pengajuan'?>">
                    <?php
                    $ttd_pelaksana = null;
                    $ttd_pengawas_k3 =  null;
                    $ttd_kabag = null;
                    $ttd_mr = null;
                    $ttd_rekan = null; 
                    if($data){ ?>
                  
                    <input type="hidden" name="id_pengajuan" value="<?php echo $data[0]->id_pengajuan; ?>">
                    <input type="hidden" name="tgl_pengajuan" value="<?php echo $data[0]->tgl_pengajuan; ?>">
                    <input type="hidden" name="tgl_acc_kabag" value="<?php  echo $data[0]->tgl_acc_kabag; ?>">
                    <input type="hidden" name="tgl_acc_pengawas_k3" value="<?php  echo $data[0]->tgl_acc_pengawas_k3; ?>">
                    <input type="hidden" name="tgl_acc_rekan" value="<?php echo $data[0]->tgl_acc_rekan; ?>">
                    <input type="hidden" name="tgl_acc_mr" value="<?php  echo $data[0]->tgl_acc_mr; ?>"> 
                    <input type="hidden" name="tgl_catatan_satpam" value="<?php  echo $data[0]->tgl_catatan_satpam; ?>"> 


                    <input type="hidden" name="ttd_pelaksana" value="<?php echo $data[0]->ttd_pelaksana; ?>">
                    <input type="hidden" name="ttd_kabag" value="<?php  echo $data[0]->ttd_kabag; ?>">
                    <input type="hidden" name="ttd_pengawas_k3" value="<?php  echo $data[0]->ttd_pengawas_k3; ?>">
                    <input type="hidden" name="ttd_rekan" value="<?php echo $data[0]->ttd_rekan; ?>">
                    <input type="hidden" name="ttd_mr" value="<?php  echo $data[0]->ttd_mr; ?>"> 

                    <input type="hidden" name="nama_pelaksana" value="<?php echo $data[0]->nama_pelaksana; ?>">
                    <input type="hidden" name="nama_kabag" value="<?php  echo $data[0]->nama_kabag; ?>">
                    <input type="hidden" name="nama_pengawas" value="<?php  echo $data[0]->nama_pengawas; ?>">
                    <input type="hidden" name="nama_rekan" value="<?php echo $data[0]->nama_rekan; ?>">
                    <input type="hidden" name="nama_mr" value="<?php  echo $data[0]->nama_mr; ?>">
                    <input type="hidden" name="nama_satpam" value="<?php  echo $data[0]->nama_satpam; ?>"> 
                    
                    
                    <?php
                $ttd_pelaksana = $data[0]->ttd_pelaksana;
                $ttd_pengawas_k3 =  $data[0]->ttd_pengawas_k3;
                $ttd_kabag = $data[0]->ttd_kabag;
                $ttd_mr = $data[0]->ttd_mr;
                $ttd_rekan = $data[0]->ttd_rekan; 
                }
               // var_dump($status);
                if($status) $stat=$status[0]->status;
                else $stat=null;
                ?>

                        <!-- <table class="table"> -->
                        <!--Wizard 7-->
                        <table class="table table-bordered text-center" style="width:100%">
                            <thead>
                                <tr>
                                <th style="width:28%; text-align:center;vertical-align:middle">
                                <img src="<?php echo base_url() ?>assets/images/logosi.png"></th>

                                <td style='text-align:center;vertical-align:middle'>
                                <h4 class="text-center"><b>IJIN PELAKSANAAN  KERJA</b></h4></td>

                                <td style="text-right">
                                <!-- <img src="<?php echo base_url() ?>assets/images/nomor.png"> -->
                                <table class="tab table table-bordered3 no-display" style='text-align:left;'>
                                        <tr>
                                            <td >&nbsp No Dokumen</td>
                                            <td  > &nbsp:</td>
                                            <td >&nbsp FK3-MR-08-01</td>
                                        </tr>
                                        <tr>
                                            <td >&nbsp Revisi</td>
                                            <td >&nbsp:</td>
                                            <td > &nbsp 01</td>
                                        </tr>
                                        <tr>
                                            <td >&nbsp Tgl Berlaku</td>
                                            <td >&nbsp:</td>
                                            <td >&nbsp 03.07.2017</td>
                                        </tr>
                                        <tr>
                                            <td >&nbsp Halaman</td>
                                            <td >&nbsp:</td>
                                            <td>&nbsp 1 dari 1</td>
                                        </tr>
                                    </table>
                                
                                </td>
                                
                                
                                </tr>
                            
                            </thead>

                        </table>
                          
                        <!--Pengajuan Pelaksana-->
                        
                        <table class="table table-bordered2 table-striped display no-wrap text-muted" style="width:100%; height:100%;">
                            <tr>
                                <td >&nbsp Nama Pekerjaan</td>
                                <td colspan='4'> 
                                    :&nbsp<?php echo $data[0]->nama_pekerjaan?>
                                </td>
                            </tr>
                            <tr>
                                <td >&nbsp Nomor Pekerjaan</td>
                                <td colspan='4'> 
                                    :&nbsp<?php echo $data[0]->nomor_pekerjaan?> 
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Nama Pelaksana / Rekanan</td>
                                <td colspan='4'> 
                                :&nbsp<?php echo $data[0]->nama_pelaksana ?>
                                </td>
                            </tr>
                            <tr>
                                <td> &nbsp Pimpinan Rekanan</td>
                                <div class="col-sm-10">
                                <td colspan='2'> 
                                :&nbsp <?php echo $data[0]->pimpinan_rekanan ?>
                                </td>
                                <div class="col-sm-10">
                                <td> &nbsp No Telepon</td>
                                <td> 
                                :&nbsp<?php echo $data[0]->no_tlp_pimpinan?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Pengawas Rekanan</td>
                                <td colspan='2'> 
                                :&nbsp<?php echo $data[0]->pengawas_rekanan ?>
                                    </td>
                                    <td> &nbsp No Telepon</td>
                                <td> 
                                :&nbsp<?php echo $data[0]->no_tlp_pengawas ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Lokasi Pekerjaan</td>
                                <td colspan='4'> 
                                :&nbsp <?php echo $data[0]->lokasi_pekerjaan ?>
                                </td>
                            </tr>
                            <tr>
                            <td> &nbsp Lama Pekerjaan</td>
                            <td> :&nbsp dari tanggal</td>
                            <td> 
                            :&nbsp<?php  echo $data[0]->lama_dari ?>
                            </td>
                                <td> &nbsp sampai tanggal</td>
                            <td> 
                            :&nbsp<?php echo $data[0]->lama_sampai ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Jam Kerja Per-hari</td>
                                <td colspan='4'> 
                                :&nbsp<?php  echo $data[0]->jam_kerja ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Pengawas Teknis</td>
                                <td colspan='4'> 
                                :&nbsp<?php echo $data[0]->pengawas_teknis ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Jumlah Tenaga Pelaksana</td>
                                <td colspan='4'> 
                                :&nbsp<?php  echo $data[0]->jumlah_tenaga ?>
                                </td>
                            </tr>
                            
                        </table>

                        <!--Klasifikasi--> 
                        <table class="col-lg-12 table_baru1 table table-bordered3 ">
                            <tr><td class="table_baru text-center"><h5>KLASIFIKASI PEKERJAAN</h5></td></tr>
                        </table>
                        <table class="col-lg-12 table_baru1  table-bordered3">
                            <tr>
                                <td>
                                    &nbsp<input id="defaultCheck1" name="instalasi_listrik" type="checkbox" value="instalasi_listrik"
                                    <?php if($data) { if($data[0]->instalasi_listrik) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Maintenance Listrik</label>
                                    <?php if($data) { if($data[0]->instalasi_listrik) echo '<input type="hidden" value="1" name="instalasi_listrik">'; }?>
                                </td>
                                <td>
                                    &nbsp<input id="defaultCheck1" name="fire" type="checkbox" value="fire"
                                    <?php if($data) { if($data[0]->fire) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Maintenance Sistem Pemadam Kebakaran</label>
                                    <?php if($data) { if($data[0]->fire) echo '<input type="hidden" value="1" name="fire">'; }?>
                                </td>
                                <td >
                                    &nbsp<input id="defaultCheck1" name="pengelasan" type="checkbox"  value="pengelasan"
                                    <?php if($data) { if($data[0]->pengelasan) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;" >Pengelasan</label>
                                    <?php if($data) { if($data[0]->pengelasan) echo '<input type="hidden" value="1" name="pengelasan">'; }?>
                                </td>

                                <td>&nbsp<input id="defaultCheck1" name="limbah_b3" type="checkbox" value="limbah_b3"
                                    <?php if($data) { if($data[0]->limbah_b3) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Pengangkutan <span> Limbah B3 </span> </label>
                                    <?php if($data) { if($data[0]->limbah_b3) echo '<input type="hidden" value="1" name="limbah_b3">'; }?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp<input id="defaultCheck1" name="instalasi_jaringan" type="checkbox"  value="instalasi_jaringan"
                                    <?php if($data) { if($data[0]->instalasi_jaringan) echo 'checked '; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Maintenance Jarkom</label>
                                    <?php if($data) { if($data[0]->instalasi_jaringan) echo '<input type="hidden" value="1" name="instalasi_jaringan">'; }?>
                                </td>
                                <td>
                                &nbsp<input id="defaultCheck1" name="tandon" type="checkbox" value="tandon" 
                                    <?php if($data) { if($data[0]->tandon) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;"> Pembersihan Tandon</label>
                                    <?php if($data) { if($data[0]->tandon) echo '<input type="hidden" value="1" name="tandon">'; }?>
                                </td>
                                <td>
                                &nbsp<input id="defaultCheck1" name="kaca" type="checkbox" value="kaca" 
                                    <?php if($data) { if($data[0]->kaca) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Pembersihan Kaca Gedung</label>
                                    <?php if($data) { if($data[0]->kaca) echo '<input type="hidden" value="1" name="kaca">'; }?>
                                </td>
                                <td>
                                    &nbsp<input id="defaultCheck1" name="fogging" type="checkbox" value="fogging"
                                    <?php if($data) { if($data[0]->fogging) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Fogging </label>
                                    <?php if($data) { if($data[0]->fogging) echo '<input type="hidden" value="1" name="fogging">'; }?>
                                </td>

                            </tr>
                            <tr>
                            <td>
                                &nbsp<input id="defaultCheck1" name="jartel" type="checkbox"  value="jartel"
                                    <?php if($data) { if($data[0]->jartel) echo 'checked '; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Maintenance <span>Jartel </span> </label>
                                    <?php if($data) { if($data[0]->jartel) echo '<input type="hidden" value="1" name="jartel">'; }?>
                                </td>
                                <td>
                                &nbsp<input  name="pemasangan_service_ac" id="defaultCheck1" type="checkbox" value="pemasangan_service_ac"
                                    <?php if($data) { if($data[0]->pemasangan_service_ac) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Pemasangan/Service AC</label>
                                    <?php if($data) { if($data[0]->pemasangan_service_ac) echo '<input type="hidden" value="1" name="pemasangan_service_ac">'; }?>

                                </td>
                                <td>
                                &nbsp<input id="defaultCheck1" name="pengecatan_kantor" type="checkbox" value="pengecatan_kantor"
                                    <?php if($data) { if($data[0]->pengecatan_kantor) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Pengecatan Kantor</label>
                                    <?php if($data) { if($data[0]->pengecatan_kantor) echo '<input type="hidden" value="1" name="pengecatan_kantor">'; }?>

                                </td>
                            </tr>
                        </table>
                        <br>
                    <!--Peraturan atau Kebijakan-->
                        <table class="col-lg-12 text-center ">
                            <tr><td class="col-lg-4 table_baru"><h5>PERATURAN ATAU KEBIJAKAN K3 YANG TELAH DIJELASKAN</h5></td></tr>
                        </table>
                        <table class="col-lg-12 table_baru1 table-bordered3  ">
                            <tr>
                                <td>
                                    <input id="defaultCheck1" name="uu" type="checkbox" value="uu"
                                    <?php if($data) { if($data[0]->uu) echo 'checked '; }?>
                                    <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">
                                        UU. No. 1 Th. 1970
                                        </label>
                                        <?php if($data) { if($data[0]->uu) echo '<input type="hidden" value="1" name="uu">'; }?>
                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <input class="form-check-input" name="pelaporan" id="exampleCheck1" type="checkbox" value="pelaporan" 
                                            <?php if($data) { if($data[0]->pelaporan) echo 'checked'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <label class="form-check-label" for="exampleCheck1" style="font-size: 11px;">Pelaporan & penyelidikan Kecelakaan</label>  
                                            <?php if($data) { if($data[0]->pelaporan) echo '<input type="hidden" value="1" name="pelaporan">'; }?>
        
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="defaultCheck1" name="peraturan_umum_k3" type="checkbox" value="peraturan_umum_k3" 
                                    <?php if($data) { if($data[0]->peraturan_umum_k3) echo 'checked'; }?>
                                    <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">
                                            Peraturan Umum K3 untuk Rekanan
                                        </label>
                                        <?php if($data) { if($data[0]->peraturan_umum_k3) echo '<input type="hidden" value="1" name="peraturan_umum_k3">'; }?>

                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <input class="form-check-input" name="p3k" id="exampleCheck1" type="checkbox" value="p3k"
                                            <?php if($data) { if($data[0]->p3k) echo 'checked '; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <label class="form-check-label" for="exampleCheck1" style="font-size: 11px;">P3K</label>
                                            <?php if($data) { if($data[0]->p3k) echo '<input type="hidden" value="1" name="p3k">'; }?>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <input id="defaultCheck1" name="surat_izin" type="checkbox" value="surat_izin" 
                                <?php if($data) { if($data[0]->surat_izin) echo 'checked'; }?>
                                <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">Surat Izin Kerja Berbahaya</label>
                                <?php if($data) { if($data[0]->surat_izin) echo '<input type="hidden" value="1" name="surat_izin">'; }?>

                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <input class="form-check-input" name="peraturan1" id="exampleCheck1" type="checkbox" value="peraturan1"
                                            <?php if($data) { if($data[0]->peraturan1) echo 'checked '; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <?php if($data) { if($data[0]->peraturan1) echo '<input type="hidden" value="1" name="peraturan1">'; }?>

                                            <?php  echo $data[0]->peraturan_1;?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input  id="defaultCheck1" name="syarat_kerja" type="checkbox" value="syarat_kerja"
                                    <?php if($data) { if($data[0]->syarat_kerja) echo 'checked'; }?>
                                    <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">
                                        Syarat-syarat kerja yang akan dilaksanakan
                                        </label>
                                        <?php if($data) { if($data[0]->syarat_kerja) echo '<input type="hidden" value="1" name="syarat_kerja">'; }?>
                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <input class="form-check-input" name="peraturan2" id="exampleCheck1" type="checkbox" value="peraturan2"
                                            <?php if($data) { if($data[0]->peraturan2) echo 'checked'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <?php if($data) { if($data[0]->peraturan2) echo '<input type="hidden" value="1" name="peraturan2">'; }?>

                                            <?php echo $data[0]->peraturan_2;?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                        <input  id="defaultCheck1" name="claim" type="checkbox" value="claim"
                                        <?php if($data) { if($data[0]->claim) echo 'checked '; }?>
                                        <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1" style="font-size: 11px;">
                                        Claim dan ganti rugi
                                        </label>
                                        <?php if($data) { if($data[0]->claim) echo '<input type="hidden" value="1" name="claim">'; }?>

                                </td>
                                <td>
                                <div class="form-row">
                                        <div class="form-group">
                                            <input class="form-check-input" name="peraturan3" id="exampleCheck1" type="checkbox" value="peraturan3" 
                                            <?php if($data) { if($data[0]->peraturan3) echo 'checked'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <?php if($data) { if($data[0]->peraturan3) echo '<input type="hidden" value="1" name="peraturan3">'; }?>

                                            <?php echo $data[0]->peraturan_3;?>
                                             
                                        </div>
                                </div>
                                </td>
                            </tr>
                        </table>
                    <!--Tanda Tangan-->
                        <table class="table_baru1" style="width:100%;">
                            <tr>
                                <td class="text-center">
                                    <label class="form-check-label text-center" for="defaultCheck1">Disetujui oleh</label>
                                </td>
                                <td class="text-center"> 
                                    <label class="form-check-label text-center" for="defaultCheck1">Rekanan</label>
                                </td>
                                <td class="text-center"> 
                                    <label class="form-check-label text-center" for="defaultCheck1">Pengawasan oleh</label>
                                </td>
                                <td class="text-center"> 
                                    <label class="form-check-label text-center" for="defaultCheck1">Pelaksana</label>
                                </td>
                            </tr>
                            <tr height="30px" class="text-center">
                                <td > 
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_kabag; ?>"  alt="" style="max-height :120px">
                                </td>
                                <td>
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_rekan; ?>"  alt="" style="max-height :120px">
                                </td>
                                <td >
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_pengawas_k3; ?>"  alt="" style="max-height :120px">
                                   
                                </td>
                                <td >
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_pelaksana; ?>" alt="" style="max-height :120px">
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>
                                    <p class="text-center"> <?php echo $data[0]->tgl_acc_kabag; ?> <br>
                                    <?php echo $data[0]->nama_kabag; ?>
                                     </p>
                                    
                                </td>
                                <td>
                                    <p class="text-center"> <?php echo $data[0]->tgl_acc_rekan;?> <br>
                                    <?php echo $data[0]->nama_rekan; ?>
                                   </p>
                                </td>

                                <td>
                                    <p class="text-center"> <?php echo $data[0]->tgl_acc_pengawas_k3;?> <br> 
                                    <?php echo $data[0]->nama_pengawas; ?>
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center"> <?php echo $data[0]->tgl_pengajuan ;?> <br>
                                    <?php echo $data[0]->nama_pelaksana; ?>
                                    </p>
                                </td>


                            </tr> -->
                            <tr>
                                <td>
                                    <p class="text-center">
                                    <?php echo $data[0]->nama_kabag; ?>
                                     </p>
                                    
                                </td>
                                <td>
                                    <p class="text-center"> 
                                    <?php echo $data[0]->nama_rekan; ?>
                                   </p>
                                </td>

                                <td>
                                    <p class="text-center"> 
                                    <?php echo $data[0]->nama_pengawas; ?>
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                    <?php echo $data[0]->nama_pelaksana; ?>
                                    </p>
                                </td>
                            </tr>
                            <tr >
                                <td><hr /></td>
                                <td><hr /></td>
                                <td><hr /></td>
                                <td><hr /></td>
                            </tr>
                            <tr>
                                <td class="text-center"><h6>Kabag/Wakabag/Pimpro<h6></td>
                                <td class="text-center"><h6>Pimpinan Rekanan <br>(Jika dikerjakan Rekanan) </h6> </td>
                                <td class="text-center"><h6>Pengawas K3</h6></td>
                                <td class="text-center"><h6>Fungsional/ Personil terkait</h6></td>
                            </tr>
                        </table>
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td class="table_baru1"><h5>Rekomendasi Oleh Pengawas K3</h5>

                            <?php echo $data[0]->rekomendasi_pengawas_k3;?>

                                </td>
                            </tr>
                        </table>
                    <!--Tanda Tangan MR-->
                        <table class="table_baru" style="width:100%;">
                            <tr>
                                <td class="text-left" style="width:50%;" >
                                    <h5>&nbsp &nbspRekomendasi Oleh MR</h5>
                                        &nbsp &nbsp<?php echo $data[0]->rekomendasi_mr;?>
                                </td>
                                <td class="text-center" style="width:50%;" >
                                    <label class="form-check-label" for="defaultCheck1">Diketahui oleh</label>
                                </td>
                            </tr>
                            <tr height="30px" class="text-center">
                                    <td></td>
                                        <td class="text-center"> 
                                            <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_mr ?>" alt="" style="max-height :120px">
                                        </td>
                            </tr>
                            <tr>
                                    <td></td>
                                    <td class="text-center">
                                            <p class="text-center">
                                            <?php echo $data[0]->nama_mr ;?>
                                            </p>
                                        </td>
                                    </tr>
                            <tr >
                                <td></td>
                                        <td>
                                            <hr />
                                        </td>
                            </tr>
            
                                    <tr class="text-center">
                                        <td></td>
                                        <td class="col-md-6"><h6>Manager Representative<h6></td>
                                    </tr>
                                </td>
                            </tr>
                            
                        </table>
                    <!--Rekomendasi-->
                        
                        <!-- <table class="col-lg-12 table_baru1">
                            <tr>
                                <td class="col-lg-4 table_baru"><h5>Rekomendasi Oleh MR</h5>
                            <?php echo $data[0]->rekomendasi_mr;?>
                                </td>
                            </tr>
                        </table> -->
                    <!--Catatan Satpam-->
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td class="col-lg-4 table_baru"><h5>Catatan pelaksanaan pekerjaan (Satpam)</h5>
                            <?php echo $data[0]->catatan;?>  
                            </td>
                            </tr>
                        </table>
                   
                    
                    <!-- </table> -->
                    </form>
                    </div>
                    </div>

                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <!-- end: Page Content -->
        <br>
        <br>
        <br>

    </div> <!-- end: Body Inner -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins.js"></script>

    <!--Template functions-->
    <script src="<?php echo base_url()?>assets/js/functions.js"></script>
    <script src="<?php echo base_url()?>assets/js_new/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url()?>assets/js_new/sweetalert/dist/myscript.js"></script>

     <script src="<?php echo base_url()?>assets/plugins/popper/popper.min.js"></script>

    <!--Template functions-->
    <script src="<?php echo base_url()?>assets/js/functions.js"></script>
     
      <script src='<?php echo base_url()?>assets/plugins/datatables/datatables.min.js'></script>

      
   


</body>

</html>