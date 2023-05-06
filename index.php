<?php 

session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

//include "kodepj.php";
include "koderm.php";

$koneksi=new mysqli("localhost","root","","db_fafa");

if($_SESSION['admin'] || $_SESSION['petugas'] || $_SESSION['dokter'] || $_SESSION['apoteker']){

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Home | Sistem Informasi Klinik</title>
    <!-- Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!--Google Fonts 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">-->

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/theme-pink.css" rel="stylesheet" />
</head>

<body class="theme-pink">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <img src="images/power-off.ico" width="25" height="25" style="float:left;margin:0 2px 2px 0;" />
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <img src="images/power-off.ico" width="25" height="25" style="float:left;margin:0 2px 2px 0;" />
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php"><img src="images/logofafa.png" width="35" height="35" style="float:left;margin:0 8px 4px 0;" />Klinik FAFA</a>
            </div>
            
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><img src="images/person.ico" width="25" height="25" style="float:left;margin:0 2px 2px 0;" />Profile</a>
                    </li>               
                    <li>
                        <a href="logout.php"><img src="images/power-off.ico" width="25" height="25" style="float:left;margin:0 2px 2px 0;" />Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
<?php  

        if($_SESSION['admin']){
            $user =$_SESSION['admin'];
        }elseif ($_SESSION['petugas']){
            $user =$_SESSION['petugas'];
        }elseif ($_SESSION['dokter']){
            $user =$_SESSION['dokter'];
        }elseif ($_SESSION['apoteker']){
            $user =$_SESSION['apoteker'];
        }

       $sql=$koneksi->query("select * from tb_pengguna where id='$user'");

       $data=$sql->fetch_assoc();

?>

    <section>
        <!-- Left Sidebar -->
        <div id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/<?php echo $data['foto']; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $data['nama']; ?></div>
                    <div class="email">Anda login sebagai <?php echo $data['level']; ?></div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li>
                        <a href="index.php">
                            <!--<i class="material-icons">home</i>-->
                            <img src="images/house-new.ico" width="25" height="25" style="float:left;margin:0;" />
                            <span>Home</span>
                        </a>
                    </li>

                    <?php  if($_SESSION['admin']){ ?>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <!--<i class="material-icons">assignment</i>-->
                            <img src="images/database-new.ico" width="25" height="25" style="float:left;margin:0;" />
                            <span>Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?page=dokter"><img src="images/person.ico" width="25" height="25" style="float:left;margin:0 8px 4px 0;" />Data Terapis</a>
                            </li>
                            <li>
                                <a href="?page=obat"><img src="images/document-edit.ico" width="25" height="25" style="float:left;margin:0 8px 4px 0;" />Data Tarif Treatment</a>
                            </li>
                            <li>
                                <a href="?page=pengguna"><img src="images/person.ico" width="25" height="25" style="float:left;margin:0 8px 4px 0;" />Data User</a>
                            </li>
                        </ul>
                    </li>

                <?php  } ?>
                <?php  if($_SESSION['petugas'] || $_SESSION['admin']){ ?>

                    <li>
                        <a href="?page=pasien">
                            <img src="images/group-new.ico" width="25" height="25" style="float:left;margin:0;" />
                            <span>Pendaftaran Pasien</span>
                        </a>
                    </li>

                    <li>
                        <a href="?page=rekam_medis&koderm=<?php echo $rmkode; ?>">
                            <img src="images/save.ico" width="25" height="25" style="float:left;margin:0;" />
                            <span>Rekam Medis</span>
                        </a>
                    </li>
                    <?php  } ?>
                    <?php  if($_SESSION['dokter'] || $_SESSION['admin'] || $_SESSION['petugas']){ ?>
                    <li>
                        <a href="?page=pemeriksaan_dokter">
                            <img src="images/cari.ico" width="25" height="25" style="float:left;margin:0;" />
                            <span>Pemeriksaan Terapi</span>
                        </a>
                    </li>
                    <?php  } ?>

                    <?php  if($_SESSION['admin'] || $_SESSION['petugas']){ ?>
                    <li>
                            <a href="?page=rekaphasilpageharian">
                                <img src="images/document.ico" width="25" height="25" style="float:left;margin:0;" />
                                <span>Laporan Harian Pasien</span>
                        </a>
                    </li>
                   <?php  } ?>
                    
                      <?php  if($_SESSION['admin']){ ?>
                    <li>
                        <!-- <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/table-new.ico" width="25" height="25" style="float:left;margin:0;" />
                            <span>Laporan-Laporan</span> -->
                            <a href="?page=rekaphasilpage">
                                <img src="images/document.ico" width="25" height="25" style="float:left;margin:0;" />
                                <span>Laporan Bulanan Pasien</span>
                        </a>
                        <ul class="ml-menu">
                         <!--   <li>
                               <a data-toggle="modal" data-target="#smallModal"><img src="images/document.ico" width="25" height="25" style="float:left;margin:0;" />Laporan Pasien</a>
                           </li>
                            <li>
                                <a data-toggle="modal" data-target="#smallModal1"><img src="images/document.ico" width="25" height="25" style="float:left;margin:0;" />Laporan Pemeriksaan Pasien</a>
                            </li> 
                            <li>
                                <a href="?page=rekaphasilpage">
                                <img src="images/document.ico" width="25" height="25" style="float:left;margin:0;" />
                                <span>Laporan Pasien</span>
                                </a>
                            </li> --> 
                        </ul>
                    </li>
                   <?php  } ?>

                      <!--  <?php  if($_SESSION['admin']){ ?>
                    <li>
                            <a href="?page=laprm">
                                <img src="images/document.ico" width="25" height="25" style="float:left;margin:0;" />
                                <span>Laporan RM</span>
                        </a>
                    </li>
                   <?php  } ?> -->

                    <li class="active">
                        <ul class="ml-menu">
                        </ul>
                    </li>
                    <li>
                        <ul class="ml-menu"> 
                        </ul>
                    </li>
                    <li> 
                        <ul class="ml-menu">  
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2023 <a href="javascript:void(0);">Klinik Fafa - Feby Heriawan</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <?php 

                $page=$_GET['page'];
                $aksi=$_GET['aksi'];

                if($page == "dokter"){
                    if($aksi == ""){
                        include "page/dokter/dokter.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/dokter/tambah.php";
                    }
                    if ($aksi=="ubah"){
                        include "page/dokter/ubah.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/dokter/hapus.php";
                    }
                }
                if($page == "obat"){
                    if($aksi == ""){
                        include "page/obat/obat.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/obat/tambah.php";
                    }
                    if ($aksi=="ubah"){
                        include "page/obat/ubah.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/obat/hapus.php";
                    }
                }
                if($page == "diagnosa"){
                    if($aksi == ""){
                        include "page/diagnosa/diagnosa.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/diagnosa/tambah.php";
                    }
                    if ($aksi=="ubah"){
                        include "page/diagnosa/ubah.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/diagnosa/hapus.php";
                    }
                }
                if($page == "pasien"){
                    if($aksi == ""){
                        include "page/pasien/pasien.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/pasien/tambah.php";
                    }
                    if ($aksi=="ubah"){
                        include "page/pasien/ubah.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/pasien/hapus.php";
                    }
                }
                if($page == "pengguna"){
                    if($aksi == ""){
                        include "page/pengguna/pengguna.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/pengguna/tambah.php";
                    }
                    if ($aksi=="ubah"){
                        include "page/pengguna/ubah.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/pengguna/hapus.php";
                    }
                }
                if($page == "rekam_medis"){
                    if($aksi == ""){
                        include "page/rekam_medis/rekam_medis.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/rekam_medis/hapus.php";
                    }
                }
                if($page == "pemeriksaan_dokter"){
                    if($aksi == ""){
                        include "page/pemeriksaan_dokter/daftar.php";
                    }
                    if ($aksi=="pemeriksaan_dokter"){
                        include "page/pemeriksaan_dokter/pemeriksaan_dokter.php";
                    }
                    if ($aksi=="tambah_obat"){
                        include "page/pemeriksaan_dokter/tambah_obat.php";
                    }
                    if ($aksi=="ubah_rm"){
                        include "page/pemeriksaan_dokter/ubah_rm.php";
                    }
                    if ($aksi=="ubah_tgl"){
                        include "page/pemeriksaan_dokter/ubah_tgl.php";
                    }
                    if ($aksi=="hapus_tindakan"){
                        include "page/pemeriksaan_dokter/hapus_tindakan.php";
                    }
                    if ($aksi=="ubah_terapis"){
                        include "page/pemeriksaan_dokter/ubah_terapis.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/pemeriksaan_dokter/tambah.php";
                    }
                    if ($aksi=="kurang"){
                        include "page/pemeriksaan_dokter/kurang.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/pemeriksaan_dokter/hapus.php";
                    }
                    if ($aksi=="tambahdosis"){
                        include "page/pemeriksaan_dokter/tambahdosis.php";
                    }
                    if ($aksi=="kurangdosis"){
                        include "page/pemeriksaan_dokter/kurangdosis.php";
                    }
                }
                if($page == "rekaphasilpage"){
                    if($aksi == ""){
                        include "page/laporan/rekaphasilpage.php";
                    }
                    if($aksi == "cetak"){
                        include "page/laporan/cetak.php";
                    }
            }

            if($page == "rekaphasilpageharian"){
                
                if($aksi == ""){
                    include "page/laporan/rekaphasilpageharian.php";
                }
                if($aksi == "cetak"){
                    include "page/laporan/cetak.php";
                }
            }

                if($page == "tambahstok"){
                    if($aksi == ""){
                        include "page/tambahstok/tambahstok.php";
                    }
                    if ($aksi=="tambah"){
                        include "page/tambahstok/tambah.php";
                    }
                    if ($aksi=="hapus"){
                        include "page/tambahstok/hapus.php";
                    }
                }
                if($page == "cetakobat"){
                    if($aksi == ""){
                        include "page/cetakobat/cetakobat.php";
                    }
                }
                if($page == "laprm"){
                    if($aksi == ""){
                        include "page/laprm/laprm.php";
                    }
                    if ($aksi=="daftar"){
                        include "page/laprm/daftar.php";
                    }
                }
                if($page == ""){
                    include "home.php";
                }

                ?>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>

<?php
    }else{
        header("location:login.php");
    }

?>

<!--Modal Rekap Pendaftaran Pasien-->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Laporan Pasien</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="page/laporan/rekapdaftarpasien.php" target="blank">
            <label for="">Tanggal Awal</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_awal"class="form-control" />
                </div>
            </div>

            <label for="">Tanggal Akhir</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_akhir"class="form-control" />
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cetak</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--Modal Rekap Pendaftaran Pasien-->
<!--Modal Rekap Pemakaian obat-->
<div class="modal fade" id="smallModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Laporan Pemeriksaan Pasien</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="page/laporan/rekaphasil.php" target="blank">
            <label for="">Tanggal Awal</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_awal"class="form-control" />
                </div>
            </div>

            <label for="">Tanggal Akhir</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_akhir"class="form-control" />
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cetak</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--Modal Rekap Pemakaian obat-->
<!--Modal Rekap Pemasukan obat-->
<div class="modal fade" id="smallModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Laporan Pemasukan Obat</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="page/laporan/rekaphasil.php" target="blank">
            <label for="">Tanggal Awal</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_awal"class="form-control" />
                </div>
            </div>

            <label for="">Tanggal Akhir</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_akhir"class="form-control" />
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cetak</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--Modal Rekap Pemasukan obat-->
<!--Modal Rekap berobat pasien-->
<div class="modal fade" id="smallModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Laporan Berobat Pasien</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="page/laporan/rekapberobatpasien.php" target="blank">
            <label for="">Tanggal Awal</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_awal"class="form-control" />
                </div>
            </div>

            <label for="">Tanggal Akhir</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_akhir"class="form-control" />
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cetak</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--Modal Rekap berobat pasien-->