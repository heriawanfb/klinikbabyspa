<?php
    $tgl=date("Y-m-d");

    $sql2=$koneksi->query("select * from tb_pasien");

    while ($tampil2=$sql2->fetch_assoc()) {
        $jumlah_pasien=$sql2->num_rows;
    }
    
    $sql3=$koneksi->query("select * from tb_dokter");

    while ($tampil3=$sql3->fetch_assoc()) {
        $jumlah_dokter=$sql3->num_rows;
    }

    $sql4=$koneksi->query("select * from tb_rekam_medis where tgl_pemeriksaan='$tgl'");

    while ($tampil4=$sql4->fetch_assoc()) {
        $jumlah_remek=$sql4->num_rows;
    }

    $sql5=$koneksi->query("select * from tb_dokter");

    while ($tampil5=$sql5->fetch_assoc()) {
        $jumlah_dokter=$sql5->num_rows;
    }
?>

<p align="center"><img src="images/logofafa.png"></p>
<marquee>Selamat datang di Sistem Informasi FAFA !!</marquee>
<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
             <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <a href="page=pasien"><img src="images/table-tick.ico" width="50" height="60"></a>
                            
                        </div>
                        <div class="content">
                            <div class="text">Data Pasien</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_pasien; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <a href="page=terapis"><img src="images/table-tick.ico" width="50" height="60"></a>
                            
                        </div>
                        <div class="content">
                            <div class="text">Terapis</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_dokter; ?></div>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <a href="page=pasienhariini"><img src="images/table-tick.ico" width="50" height="60"></a>
                            
                        </div>
                        <div class="content">
                            <div class="text">Pasien Hari Ini</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_remek; ?></div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <a href="page=pasien"><img src="images/table-tick.ico" width="50" height="60"></a>
                            
                        </div>
                        <div class="content">
                            <div class="text">Masuk sebagai</div>
                            <div class="text" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $data['level']; ?></div>
                        </div>
                    </div>
                </div> 
            </div>
</div>