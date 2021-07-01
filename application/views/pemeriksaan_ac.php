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
                                <h4 class="text-center"><b>JOB SAFETY ANALYSIS</b></h4></td>

                                <td style="text-right">
                                <!-- <img src="<?php echo base_url() ?>assets/images/nomor.png"> -->
                                <table class="tab table table-bordered3 no-display" style='text-align:left;'>
                                        <tr>
                                            <td>&nbsp No Dokumen</td>
                                            <td> &nbsp:</td>
                                            <td>&nbsp FK3-MR-08-02</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp Revisi</td>
                                            <td>&nbsp:</td>
                                            <td> &nbsp 00</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp Tgl Berlaku</td>
                                            <td>&nbsp:</td>
                                            <td>&nbsp 20-08-2019</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp Halaman</td>
                                            <td>&nbsp:</td>
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
                                <td >&nbsp No.JSA</td>
                                <td colspan='2'> 
                                    :&nbsp<?php echo $data[0]->nomor_pekerjaan?> 
                                </td>
                                <td> &nbsp Terbit</td>
                                <td> 
                                :&nbsp<?php echo $data[0]->lama_dari ?>
                                </td>  
                            </tr>
                            <tr>
                                <td >&nbsp Nama Pekerjaan</td>
                                <td colspan='2'> 
                                    :Pemeriksaan / Maintenance AC
                                </td>
                                <td>&nbsp Instansi/vendor</td>
                                <td>:&nbsp<?php echo $data[0]->nama_pelaksana ?>
                                </td>
                            </tr>
                           
                            <tr>
                                <td>&nbsp Pengawas</td>
                                <td colspan='2'> 
                                :&nbsp<?php echo $data[0]->pengawas_rekanan ?>
                                </td>
                                <td> &nbsp Pelaksana</td>
                                <td> :&nbsp <?php echo $data[0]->pimpinan_rekanan ?>
                                </td>
                            </tr>

                            <tr>
                                <td>&nbsp APD</td>
                                <td colspan='2'> 
                                :&nbsp  1. Safety Helmet	<br>		
                                &nbsp  2. Hand Gloves / Rubber Gloves	<br>		
                               			
                                </td>
                                <td>  &nbsp 3. Safety Shoes	<br>
                                &nbsp 4. Dusk Masker
                                </td>

                            </tr>
                            
                        </table>

                        <table class="table table-striped table-bordered2 display no-wrap"

                                        style="width:100%">

                                        <thead>

                                            <tr class="border-3">

                                                <th class="border-1 font-14 font-weight-medium text-muted" style='text-align:center;vertical-align:middle'><b> No </b></th>

                                                <th class="border-1 font-14 font-weight-medium text-muted px-2" style='text-align:center;vertical-align:middle'><b> Langkah Kerja/Job Steps</b> </th>

                                                <th class="border-1 font-14 font-weight-medium text-muted" style='text-align:center;vertical-align:middle'><b>Potensi Bahaya/Hazard</b></th>
                                                <th class="border-1 font-14 font-weight-medium text-muted" style='text-align:center;vertical-align:middle'><b>Risiko/Risk</b></th>                                                
                                                <th class="border-1 font-14 font-weight-medium text-muted" style='text-align:center;vertical-align:middle'><b>Upaya Pengendalian <br> /Accident Prevention</b></th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12">1</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12">Melakukan briefing mengenai instruksi kerja/ standar operasional prosedur serta aspek keselamatan dan kesehatan kerja ketika melakukan pekerjaan</td>

                                                <td class="border-top-1 px-2 py-4"> - </td>
                                                <td class="border-top-1 px-2 py-4"> - </td>

                                                <td class="border-top-1 px-2 py-4"> - </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12">2</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12">Identifikasi instalasi Air Conditioner (AC)</td>

                                                <td class="border-top-1 px-2 py-4"> - </td>
                                                <td class="border-top-1 px-2 py-4"> - </td>

                                                <td class="border-top-1 px-2 py-4"> - </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="4">3</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="4" >Pemeriksaan Kondisi fisik Air Conditioner (AC)</td>

                                                <td class="border-top-1 px-2 py-4"> 
                                                1. Permukaan tidak rata/ stabil <br>
                                                 </td>
                                                 <td class="border-top-1 px-2 py-4"> 1. Terpleset <br> /tersandung </td>
                                                <td class="border-top-1 px-2 py-4" >
                                                1. Bekerja dengan fokus dan hati- hati <br>
                                                2. Jika memungkinkan, bersihkan terlebih dahulu lokasi kerja agar tidak licin <br>                                               
                                                </td>			
                                            </tr>

                                            <tr>

                                                <td class="border-top-1 px-2 py-4"> 
                                                2. Sudut dari instalasi yang tajam <br>
                                                 </td>
                                                 <td class="border-top-1 px-2 py-4">1. Tergores/Terluka <br> /terjepit</td>
                                                <td class="border-top-1 px-2 py-4" >
                                                1. Menggunakan pakaian kerja (wearpack) / Hand gloves				
                                                </td>
                                            </tr>
                                            <tr>   
                                                <td class="border-top-1 px-2 py-4">  
                                                3. Aliran listrik
                                                 </td>
                                                 <td class="border-top-1 px-2 py-4">1. Tersetrum </td>
                                               <td class="border-top-1 px-2 py-4" >
                                                1. Membaca dan menerapkan SOP pekerjaan instalasi AC <br>			
                                                2. Menerapkan prosedur LOTO	<br>
                                                3. Menggunakan wearpack, safety shoes, hand gloves, safety helmet			  
                                                </td>
                                            </tr>

                                            <tr>   
                                                <td class="border-top-1 px-2 py-4">  
                                                3. AC kotor/ berdebu
                                                 </td>
                                                 <td class="border-top-1 px-2 py-4">1. Pernafasan terganggu </td>
                                               <td class="border-top-1 px-2 py-4" >
                                                1. Menggunakan dust masker					  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12"  rowspan="2">4</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12"  rowspan="2">Membersihkan bilah ventilasi	 </td>

                                                <td class="border-top-1 px-2 py-4">1. Permukaan tidak rata/ stabil </td>
                                                <td class="border-top-1 px-2 py-4">1. Terpleset <br> /tersandung </td>
                                                <td class="border-top-1 px-2 py-4"> 
                                                1. Bekerja dengan fokus dan hati- hati	<br>			
                                                2. Jika memungkinkan, bersihkan terlebih dahulu lokasi kerja agar tidak licin.</td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 px-2 py-4">2. Aliran listrik </td>
                                                <td class="border-top-1 px-2 py-4">1. Tersetrum </td>
                                                <td class="border-top-1 px-2 py-4"> 1. Membaca dan menerapkan SOP pekerjaan instalasi listrik <br>				
                                                2. Menerapkan prosedur LOTO	<br>		
                                                3. Menggunakan wearpack, safety shoes, hand gloves, safety helmet				
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="2">5</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="2">Melepaskan filter Air Conditioner (AC)</td>

                                                <td class="border-top-1 px-2 py-4">1. Permukaan tidak rata/ stabil  </td>
                                                <td class="border-top-1 px-2 py-4">1. Terpleset <br> / tersandung </td>

                                                <td class="border-top-1 px-2 py-4">
                                                1. Bekerja dengan fokus dan hati- hati <br>			
                                                2. Jika memungkinkan, bersihkan terlebih dahulu lokasi kerja agar tidak licin					
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-1 px-2 py-4">2. Aliran listrik  </td>
                                                <td class="border-top-1 px-2 py-4">1. Tersetrum </td>
                                                <td class="border-top-1 px-2 py-4">
                                                1. Membaca dan menerapkan SOP pekerjaan instalasi listrik	<br>			
                                                2. Menerapkan prosedur LOTO		<br>		
                                                3. Menggunakan wearpack, safety shoes, hand gloves, safety helmet				
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="2">6</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="2">Membersihkan filter Air Conditioner (AC)</td>

                                                <td class="border-top-1 px-2 py-4"> 1. Permukaan tidak rata/ stabil</td>
                                                <td class="border-top-1 px-2 py-4">1. Terpleset <br> /tersandung </td>

                                                <td class="border-top-1 px-2 py-4">
                                                1. Bekerja dengan fokus dan hati- hati <br>				
                                                2. Jika memungkinkan, bersihkan terlebih dahulu lokasi kerja agar tidak licin				
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-1 px-2 py-4">2. Filter Kotor/berdebu </td>
                                                <td class="border-top-1 px-2 py-4">1. Pernafasan terganggu </td>
                                                <td class="border-top-1 px-2 py-4">
                                                1. Menggunakan dusk masker						
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="1">7</td>

                                                <td class="border-top-1 text-muted px-2 py-4 font-12" rowspan="1">Membilas filter Air Conditioner (AC)</td>

                                                <td class="border-top-1 px-2 py-4"> 1. Permukaan tidak rata/ stabil</td>
                                                <td class="border-top-1 px-2 py-4"> 1. Terpleset <br> /tersandung </td>

                                                <td class="border-top-1 px-2 py-4"> 1. Bekerja dengan fokus dan hati- hati	<br>			
                                                2. Jika memungkinkan, bersihkan terlebih dahulu lokasi kerja agar tidak licin				
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                        
                    <!--Tanda Tangan-->
                        <table class="table_baru" style="width:100%;">
                            <tr>
                                <td class="text-center" style="width:50%;" >
                                    <h5>&nbsp &nbspDibuat oleh</h5>
                                </td>
                                <td class="text-center" style="width:50%;" >
                                    <label class="form-check-label" for="defaultCheck1">Diketahui oleh</label>
                                </td>
                            </tr>
                            <tr height="30px" class="text-center">
                                    <td>                                    
                                    <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_pelaksana; ?>" alt="" style="max-height :120px">
                                    </td>
                                        <td class="text-center"> 
                                            <img src="<?php echo base_url().'assets/img/ttd/'.$data[0]->ttd_mr ?>" alt="" style="max-height :120px">
                                        </td>

                            </tr>
                            <tr >
                                <td><hr /></td>
                                <td><hr /></td>
                            </tr>
                                    <tr class="text-center">
                                        <td> <p class="text-center">
                                        <?php echo $data[0]->nama_pelaksana; ?>
                                        </p></td>
                                        <td class="col-md-6"> <p class="text-center">
                                            <?php echo $data[0]->nama_mr ;?>
                                            </p></td>
                                    </tr>
                                </td>
                            </tr>
                            
                        </table>
                    <!--Rekomendasi-->
                    
                    <!-- </table> -->
                    </form>
                    </div>
                    </div>

                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <!-- end: Page Content -->

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