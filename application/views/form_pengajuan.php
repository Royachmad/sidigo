<body >
    <!-- Body Inner -->

    <div class="body-inner" >
        <!-- Header -->
        <header id="header" class="header-always-fixed">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <img src="<?php echo base_url() ?>assets/images/logo.png"></div>
                    <div class="header-extras">
                        <ul>
                            <li>

                                <div class="p-dropdown">
                                    <a href="#"><i class="fa fa-user btn-lg"></i></a>

                                    <ul class="p-dropdown-content">
                                        <!-- <li><a href="<?php echo base_url() . 'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user">Profil</a></li> -->
                                        <li><a href="<?php echo base_url() . 'index.php/Login/logout'; ?>" class="tombol-keluar"><button class="btn btn-danger"> keluar</button></a></li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive">
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

                        <table class="table">
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
                        
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td>&nbsp Nama Pekerjaan</td>
                                <td colspan='4'> 
                                    <input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Nama Pekerjaan"
                                    <?php if($data) echo 'value="'.$data[0]->nama_pekerjaan.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?>>
                                </td>
                                <br>
                            </tr>
                            <tr>
                                <td>&nbsp Nomor Pekerjaan</td>
                                <td colspan='4'> 
                                    <input type="text" class="form-control" id="nomor_pekerjaan" name="nomor_pekerjaan" placeholder="Nomor Pekerjaan"
                                    <?php if($data) echo 'value="'.$data[0]->nomor_pekerjaan.'"'; ?> 
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Nama Pelaksana / Rekanan</td>
                                <td colspan='4'> 
                                    <input type="text" class="form-control" id="nama_pelaksana" name="nama_pelaksana" placeholder="Nama Pelaksana" 
                                    <?php if($data) echo 'value="'.$data[0]->nama_pelaksana.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td> &nbsp Pimpinan Rekanan</td>
                                <div class="col-sm-10">
                                <td colspan='2'> 
                                    <input type="text" class="form-control" id="pimpinan_rekanan" name="pimpinan_rekanan" placeholder="Pimpinan Rekanan" 
                                    <?php if($data) echo 'value="'.$data[0]->pimpinan_rekanan.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                                <div class="col-sm-10">
                                <td> &nbsp No Telepon</td>
                                <td> 
                                    <input type="text" class="form-control" id="no_tlp_pimpinan" name="no_tlp_pimpinan" placeholder="Nomor Telp." 
                                    <?php if($data) echo 'value="'.$data[0]->no_tlp_pimpinan.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Pengawas Rekanan</td>
                                <td colspan='2'> 
                                    <input type="text" class="form-control" id="pengawas_rekanan" name="pengawas_rekanan" placeholder="Pengawas Rekanan" 
                                    <?php if($data) echo 'value="'.$data[0]->pengawas_rekanan.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?>  >
                                    </td>
                                    <td> &nbsp No Telepon</td>
                                <td> 
                                    <input type="text" class="form-control" id="no_tlp_pengawas" name="no_tlp_pengawas" placeholder="Nomor Telp." 
                                    <?php if($data) echo 'value="'.$data[0]->no_tlp_pengawas.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Lokasi Pekerjaan</td>
                                <td colspan='4'> 
                                    <input type="text" class="form-control" id="lokasi_pekerjaan" name="lokasi_pekerjaan" placeholder="Lokasi Pekerjaan" 
                                    <?php if($data) echo 'value="'.$data[0]->lokasi_pekerjaan.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                            <td> &nbsp Lama Pekerjaan</td>
                            <td> &nbsp dari tanggal</td>
                            <td> <input type="date" class="form-control" id="lama_dari" name="lama_dari" placeholder="Dari Tanggal" 
                            <?php if($data) echo 'value="'.$data[0]->lama_dari.'"'; ?>
                            <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> ></td>
                                <td> &nbsp sampai tanggal</td>
                            <td> <input type="date" class="form-control" id="lama_sampai" name="lama_sampai" placeholder="Sampai Tanggal" 
                            <?php if($data) echo 'value="'.$data[0]->lama_sampai.'"'; ?>
                            <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Jam Kerja Per-hari</td>
                                <td colspan='4'> 
                                    <input type="number" class="form-control" id="jam_kerja" name="jam_kerja" placeholder="Jam Kerja Per-hari" 
                                    <?php if($data) echo 'value="'.$data[0]->jam_kerja.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Pengawas Teknis</td>
                                <td colspan='4'> 
                                    <input type="text" class="form-control" id="pengawas_teknis" name="pengawas_teknis" placeholder="Pengawas Teknis" 
                                    <?php if($data) echo 'value="'.$data[0]->pengawas_teknis.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp Jumlah Tenaga Pelaksana</td>
                                <td colspan='4'> 
                                    <input type="number" class="form-control" id="jumlah_tenaga" name="jumlah_tenaga" placeholder="Jumlah Tenaga" 
                                    <?php if($data) echo 'value="'.$data[0]->jumlah_tenaga.'"'; ?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'readonly=""';?> >
                                </td>
                            </tr>
                            
                        </table>

                        <!--Klasifikasi--> 
                        <table class="col-lg-12 text-center">
                            <tr><td class="col-lg-4 table_baru"><h4>KLASIFIKASI PEKERJAAN</h4></td></tr>
                        </table>
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td>
                                    &nbsp<input id="defaultCheck1" name="instalasi_listrik" type="checkbox" value="instalasi_listrik"
                                    <?php if($data) { if($data[0]->instalasi_listrik) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Maintenance Listrik</label>
                                    <?php if($data) { if($data[0]->instalasi_listrik) echo '<input type="hidden" value="1" name="instalasi_listrik">'; }?>
                                </td>
                                <td>
                                    &nbsp<input id="defaultCheck1" name="fire" type="checkbox" value="fire"
                                    <?php if($data) { if($data[0]->fire) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Maintenance Sistem Pemadam Kebakaran</label>
                                    <?php if($data) { if($data[0]->fire) echo '<input type="hidden" value="1" name="fire">'; }?>
                                </td>
                                <td >
                                    &nbsp<input id="defaultCheck1" name="pengelasan" type="checkbox"  value="pengelasan"
                                    <?php if($data) { if($data[0]->pengelasan) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1" >Pengelasan</label>
                                    <?php if($data) { if($data[0]->pengelasan) echo '<input type="hidden" value="1" name="pengelasan">'; }?>
                                </td>

                                <td>&nbsp<input id="defaultCheck1" name="limbah_b3" type="checkbox" value="limbah_b3"
                                    <?php if($data) { if($data[0]->limbah_b3) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Pengangkutan Limbah B3 </label>
                                    <?php if($data) { if($data[0]->limbah_b3) echo '<input type="hidden" value="1" name="limbah_b3">'; }?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp<input id="defaultCheck1" name="instalasi_jaringan" type="checkbox"  value="instalasi_jaringan"
                                    <?php if($data) { if($data[0]->instalasi_jaringan) echo 'checked '; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Maintenance Jaringan Komputer</label>
                                    <?php if($data) { if($data[0]->instalasi_jaringan) echo '<input type="hidden" value="1" name="instalasi_jaringan">'; }?>
                                </td>
                                <td>
                                &nbsp<input id="defaultCheck1" name="tandon" type="checkbox" value="tandon" 
                                    <?php if($data) { if($data[0]->tandon) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1"> Pembersihan Tandon</label>
                                    <?php if($data) { if($data[0]->tandon) echo '<input type="hidden" value="1" name="tandon">'; }?>
                                </td>
                                <td>
                                &nbsp<input id="defaultCheck1" name="kaca" type="checkbox" value="kaca" 
                                    <?php if($data) { if($data[0]->kaca) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1"> Pembersihan Kaca Gedung</label>
                                    <?php if($data) { if($data[0]->kaca) echo '<input type="hidden" value="1" name="kaca">'; }?>
                                </td>
                                <td>
                                    &nbsp<input id="defaultCheck1" name="fogging" type="checkbox" value="fogging"
                                    <?php if($data) { if($data[0]->fogging) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Fogging </label>
                                    <?php if($data) { if($data[0]->fogging) echo '<input type="hidden" value="1" name="fogging">'; }?>
                                </td>

                            </tr>
                            <tr>
                            <td>
                                &nbsp<input id="defaultCheck1" name="jartel" type="checkbox"  value="jartel"
                                    <?php if($data) { if($data[0]->jartel) echo 'checked '; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Maintenance Jaringan Telepon</label>
                                    <?php if($data) { if($data[0]->jartel) echo '<input type="hidden" value="1" name="jartel">'; }?>
                                </td>
                                <td>
                                &nbsp<input  name="pemasangan_service_ac" id="defaultCheck1" type="checkbox" value="pemasangan_service_ac"
                                    <?php if($data) { if($data[0]->pemasangan_service_ac) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?>>
                                    <label class="form-check-label" for="defaultCheck1">Pemasangan/Service AC</label>
                                    <?php if($data) { if($data[0]->pemasangan_service_ac) echo '<input type="hidden" value="1" name="pemasangan_service_ac">'; }?>

                                </td>
                                <td>
                                &nbsp<input id="defaultCheck1" name="pengecatan_kantor" type="checkbox" value="pengecatan_kantor"
                                    <?php if($data) { if($data[0]->pengecatan_kantor) echo 'checked'; }?>
                                    <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >
                                    <label class="form-check-label" for="defaultCheck1">Pengecatan Kantor</label>
                                    <?php if($data) { if($data[0]->pengecatan_kantor) echo '<input type="hidden" value="1" name="pengecatan_kantor">'; }?>

                                </td>
                            </tr>
                        </table>
                    <!--Peraturan atau Kebijakan-->
                        <table class="col-lg-12 text-center">
                            <tr><td class="col-lg-4 table_baru"><h4>PERATURAN ATAU KEBIJAKAN K3 YANG TELAH DIJELASKAN</h4></td></tr>
                        </table>
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td>
                                &nbsp<input id="defaultCheck1" name="uu" type="checkbox" value="uu"
                                    <?php if($data) { if($data[0]->uu) echo 'checked '; }?>
                                    <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                        UU. No. 1 Th. 1970
                                        </label>
                                        <?php if($data) { if($data[0]->uu) echo '<input type="hidden" value="1" name="uu">'; }?>
                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                        <input class="form-check-input" name="pelaporan" id="defaultCheck1" type="checkbox" value="pelaporan" 
                                            <?php if($data) { if($data[0]->pelaporan) echo 'checked'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <label class="form-check-label" for="defaultCheck1">Pelaporan & penyelidikan Kecelakaan</label>  
                                            <?php if($data) { if($data[0]->pelaporan) echo '<input type="hidden" value="1" name="pelaporan">'; }?>
        
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp<input id="defaultCheck1" name="peraturan_umum_k3" type="checkbox" value="peraturan_umum_k3" 
                                    <?php if($data) { if($data[0]->peraturan_umum_k3) echo 'checked'; }?>
                                    <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Peraturan Umum K3 untuk Rekanan
                                        </label>
                                        <?php if($data) { if($data[0]->peraturan_umum_k3) echo '<input type="hidden" value="1" name="peraturan_umum_k3">'; }?>

                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                        <input class="form-check-input" name="p3k" id="defaultCheck1" type="checkbox" value="p3k"
                                            <?php if($data) { if($data[0]->p3k) echo 'checked '; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <label class="form-check-label" for="defaultCheck1">P3K</label>
                                            <?php if($data) { if($data[0]->p3k) echo '<input type="hidden" value="1" name="p3k">'; }?>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp<input id="defaultCheck1" name="surat_izin" type="checkbox" value="surat_izin" 
                                <?php if($data) { if($data[0]->surat_izin) echo 'checked'; }?>
                                <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                <label class="form-check-label" for="defaultCheck1">Surat Izin Kerja Berbahaya</label>
                                <?php if($data) { if($data[0]->surat_izin) echo '<input type="hidden" value="1" name="surat_izin">'; }?>

                                </td>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group">
                                        <input class="form-check-input" name="peraturan1" id="exampleCheck1" type="checkbox" value="peraturan1"
                                            <?php if($data) { if($data[0]->peraturan1) echo 'checked '; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                            <?php if($data) { if($data[0]->peraturan1) echo '<input type="hidden" value="1" name="peraturan1">'; }?>

                                            <input type="text" class="form-control form-check-label" id="peraturan_1" name="peraturan_1" placeholder="Lainnya" 
                                            <?php if($data) { if($data[0]->peraturan_1) echo 'value="'.$data[0]->peraturan_1.'"'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'readonly=""';?> >
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp<input  id="defaultCheck1" name="syarat_kerja" type="checkbox" value="syarat_kerja"
                                <?php if($data) { if($data[0]->syarat_kerja) echo 'checked'; }?>
                                <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1">
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

                                            <input type="text" class="form-control form-check-label" id="peraturan_2" name="peraturan_2" placeholder="Lainnya" 
                                            <?php if($data) { if($data[0]->peraturan_2) echo 'value="'.$data[0]->peraturan_2.'"'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'readonly=""';?> >
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp<input  id="defaultCheck1" name="claim" type="checkbox" value="claim"
                                <?php if($data) { if($data[0]->claim) echo 'checked '; }?>
                                <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>>
                                        <label class="form-check-label" for="defaultCheck1">
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

                                            <input type="text" class="form-control form-check-label" id="peraturan_3" name="peraturan_3" placeholder="Lainnya" 
                                            <?php if($data) { if($data[0]->peraturan_3) echo 'value="'.$data[0]->peraturan_3.'"'; }?>
                                            <?php if(($level!='2')||($stat!='kabag')) echo 'readonly=""';?> >
                                        </div>
                                </div>
                                </td>
                            </tr>
                        </table>
                    <!--Tanda Tangan-->
                        <table class="table_baru1" style="width:100%;">
                            <tr class="text-center">
                                    <td class="text-center">
                                        <label class="form-check-label" for="defaultCheck1">Disetujui oleh</label>
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
                                </div>
                            </tr>
                            <tr height="30px" class="text-center">
                                <td> 
                                <?php if($ttd_kabag) {?>
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_kabag ?>" class="img-fluid img-thumbnail" alt="" style="max-height :120px">
                                    <?php } else {?>
                                    <button type="submit" name="tombol" value="kabag" class="btn btn-success btn-sm" <?php if(($level!='3')||($stat!='pelaksana')) echo 'disabled=""';?> >Setuju</button>
                                    <!-- <button type="submit" name="tombol" value="tolak" class="btn btn-danger btn-sm" <?php if(($level!='3')||($stat!='pelaksana')) echo 'disabled=""';?> >Tolak</button> -->
                                    <?php }?>
                                </td>
                                <td >
                                <?php if($ttd_rekan) {?>
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_rekan ?>" class="img-fluid img-thumbnail" alt="" style="max-height :120px">
                                    <?php } else {?>
                                    <button type="submit" name="tombol" value="rekan" class="btn btn-success btn-sm" <?php if(($level!='1')||($stat!='satpam')) echo 'disabled=""';?> >Setuju</button>
                                    <!-- <button type="button" class="btn btn-danger btn-sm" <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >Tolak</button> -->
                                    <?php }?>
                                </td>
                                <td >
                                <?php if($ttd_pengawas_k3) {?>
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_pengawas_k3 ?>" class="img-fluid img-thumbnail" alt="" style="max-height :120px">
                                    <?php } else {?>
                                    <button type="submit" name="tombol" value="pengawas" class="btn btn-success btn-sm" <?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?> >Setuju</button>
                                    <!-- <button type="button" class="btn btn-danger btn-sm" <?php if(($level!='2')||($stat!='kabag')) echo 'disabled';?> >Tolak</button> -->
                                    <?php }?>
                                </td>
                                <td >
                                    <?php if($ttd_pelaksana) {?>
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_pelaksana ?>" class="img-fluid img-thumbnail" alt="" style="max-height :120px">
                                    <?php } else {?>
                                    
                                    <button type="submit" name="tombol" value="pelaksana" class="btn btn-primary btn-sm" <?php if(($level!='1')||($stat!=null)) echo 'disabled=""';?> >Ajukan</button>
                                    <!-- <button type="button" class="btn btn-danger btn-sm" <?php if(($level!='1')||($stat!=null)) echo 'disabled';?> >batal</button> -->
                                    <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <p class="text-center"> <?php if($data) echo $data[0]->tgl_acc_kabag; ?> <br>
                                    <?php if($data) echo $data[0]->nama_kabag; ?>
                                    </p>
                                    
                                </td>
                                <td>
                                    <p class="text-center"> <?php if($data) echo $data[0]->tgl_acc_rekan ;?> <br>
                                    <?php if($data) echo $data[0]->nama_rekan; ?>
                                    </p>
                                </td >

                                <td >
                                    <p class="text-center"> <?php if($data) echo $data[0]->tgl_acc_pengawas_k3 ;?> <br> 
                                    <?php if($data) echo $data[0]->nama_pengawas; ?>
                                    </p>
                                </td>

                                <td >
                                    <p class="text-center"> <?php if($data) echo $data[0]->tgl_pengajuan ;?> <br>
                                    <?php if($data) echo $data[0]->nama_pelaksana; ?>
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
                                <td class="text-center"><h5>Kabag/Wakabag/Pimpro</h5></td>
                                <td class="text-center"><h5>Pimpinan Rekanan <br>(Jika dikerjakan Rekanan) </h5> </td>
                                <td class="text-center"><h5>Pengawas K3</h5</td>
                                <td class="text-center"><h5>Fungsional/ Personil terkait</h5></td>
                            </tr>
                        </table>
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td class="col-lg-4 table_baru"><h4>Rekomendasi Oleh Pengawas K3</h4>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="rekomendasi_pengawas_k3" rows="2"<?php if(($level!='2')||($stat!='kabag')) echo 'disabled=""';?>><?php if($data) echo $data[0]->rekomendasi_pengawas_k3;?></textarea>
                                <?php if($data) { if($data[0]->rekomendasi_pengawas_k3) echo '<input type="hidden" value="'.$data[0]->rekomendasi_pengawas_k3.'" name="rekomendasi_pengawas_k3">'; }?>

                            <br>
                                </td>
                            </tr>
                        </table>
                    <!--Tanda Tangan MR-->
                        <table class="col-lg-12 table_baru1">
                            <tr class="text-center">
                                <td>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Diketahui oleh
                                    </label>
                                </td>
                            </tr>
                            <tr height="100px" class="text-center">
                                <td> 
                                <?php if($ttd_mr) {?>
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_mr ?>" class="img-fluid img-thumbnail" alt="" style="max-height :120px">
                                    <?php } else {?>
                                    
                                        <button type="submit" name="tombol" value="mr" class="btn btn-success btn-sm" <?php if(($level!='6')||($stat!='pengawas')) echo 'disabled=""';?> >Setuju</button>
                                    <!-- <button type="button" class="btn btn-danger btn-sm" <?php if(($level!='6')||($stat!='pengawas')) echo 'disabled=""';?> >Tolak</button> --> <?php }?>
                                   
                                </td>

                            </tr>
                            <tr>
                            <td>
                                    <p><center> <?php if($data) echo $data[0]->tgl_acc_mr ;?> <br>
                                    <?php if($data) echo $data[0]->nama_mr ;?>
                                    </center> </p>
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    <hr />
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="col-md-3"><h5>Manager Representative<h5></td>
                            </tr>
                        </table>
                    <!--Rekomendasi-->
                        
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td class="col-lg-4 table_baru"><h4>Rekomendasi Oleh MR</h4>
                                <textarea class="form-control" name="rekomendasi_mr"<?php if(($level!='6')||($stat!='pengawas')) echo 'disabled=""';?>><?php if($data) echo $data[0]->rekomendasi_mr;?></textarea>
                            <?php if($data) { if($data[0]->rekomendasi_mr) echo '<input type="hidden" value="'.$data[0]->rekomendasi_mr.'" name="rekomendasi_mr">'; }?>
                                </td>
                            </tr>
                        </table>
                    <!--Catatan Satpam-->
                        <table class="col-lg-12 table_baru1">
                            <tr>
                                <td class="col-lg-4 table_baru"><h4>Catatan pelaksanaan pekerjaan (Satpam)</h4>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="catatan"<?php if(($level!='4')||($stat!='mr')) echo 'disabled=""';?>><?php if($data) echo $data[0]->catatan;?></textarea>
                            <?php if($data) { if($data[0]->catatan) echo '<input type="hidden" value="'.$data[0]->catatan.'" name="catatan">'; }?>
                            <br>
                            <?php if($data) { if(!$data[0]->catatan){?>
                                <button type="submit" name="tombol" value="satpam" class="btn btn-primary btn-sm" <?php if(($level!='4')||($stat!='mr')) echo 'disabled';?> >Simpan</button>
                            <?php } } ?>    
                            </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <div class="col-lg-12 text-center">

                            <?php if($data){ if($data[0]->status=='rekan'){?>
                            <a href="<?php if($data) echo base_url().'index.php/Pengajuan/cetak_form?id='.$data[0]->id_pengajuan; ?>" target="_blank" class="btn btn-outline"><i class="fa fa-download"></i> Unduh</a>
                            <?php } }?>
                            <a href="<?php echo site_url() ?>Pengajuan/pengajuan"><button type="button" class="btn btn-light">Kembali</button></a>
                            <!-- <a href="<?php if($data) echo base_url().'index.php/Pengajuan/tes_excel'; ?>" target="_blank" class="btn btn-outline"><i class="fa fa-print"></i> ujicoba</a> -->
                           </div>

                       
                    
                    </table>
                    </form>
                    </div>
                    </div>

                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <!-- end: Page Content -->

    </div> <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Popover plugin files-->

</body>