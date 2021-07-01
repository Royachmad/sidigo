<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header"  class="header-always-fixed">
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
                                        <!-- <li><a href="<?php echo base_url() . 'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user">Profile</a></li> -->
                                        <li><a href="<?php echo base_url() . 'index.php/Login/logout'; ?>" class="tombol-keluar"><button class="btn btn-danger"> keluar</button></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <!-- <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div> -->
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
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
        <section id="page-content" style="background: url('<?php echo base_url() ?>assets/images/121.png')">
            <div class="container">
                <!-- DataTable -->
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h4>Data Pengguna</h4>
                    </div>
                   
                    <div class="col-lg-6 text-right">
                        <a href="<?= site_url() ?>Pengajuan/tambah_pengajuan"><button type="button" class="btn btn-primary"  ><i class="icon-plus"></i> Tambah Pengguna</button></a>
                    </div>
 
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Tanda Tangan</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key){
                            ?>
                                    <tr>
                                        <td><?php echo $key->nama?></td>
                                        <td><?php echo $key->email?></td>
                                        <td><?php echo $key->username?></td>
                                        <td><?php echo $key->password?></td>
                                        <td><?php echo $key->foto_ttd?></td>
                                        <td>
                                        <?php if($key->level=='1') {?>
                                            <span class="badge badge-primary">Pelaksana</span>
                                            <?php } else if($key->level=='2') { ?>
                                            <span class="badge badge-warning">Pengawas</span>
                                            <?php } else if($key->level=='3') { ?> 
                                            <span class="badge badge-info">Kabag</span>
                                            <?php } else if($key->level=='4') { ?> 
                                            <span class="badge badge-success">Satpam</span>
                                            <?php } else if($key->level=='5') { ?> 
                                            <span class="badge badge-dark">Rekan</span>
                                            <?php } else if($key->level=='6') { ?> 
                                            <span class="badge badge-secondary">MR</span>
                                            <?php } else; ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                
                                <?php } ?>


                            </tbody>

                        </table>
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