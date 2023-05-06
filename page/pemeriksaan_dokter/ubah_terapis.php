<!-- Basic Examples !-->
<?php
$kode=$_GET['no_rm'];
$sql=$koneksi->query("SELECT tgl_pemeriksaan,tb_rekam_medis.no_rm,tb_rekam_medis.no_pasien,nm_pasien,bb,tb,suhu,keluhan,alergi FROM tb_pasien, tb_rekam_medis, tb_rekam_medis_detail3 WHERE tb_pasien.no_pasien=tb_rekam_medis.no_pasien AND tb_rekam_medis.no_rm=tb_rekam_medis_DETAIL3.no_rm AND tb_rekam_medis.no_rm='$kode'");
$tampil=$sql->fetch_assoc();
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                        
                            <form method="POST">
                                <div>
                                    <label for="">No. Pendaftaran</label>
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        <input type="text" name="kode" value="<?php echo $kode;?>" class="form-control" readonly>
                                        </div>
                                        </div>
                            </form>
</div>

<?php
if (isset($_POST['simpan'])){
    date_default_timezone_set('Asia/Jakarta');
    $date=date("Y-m-d H:i:s");
    $no_rm=$_POST['kode'];
    $nopasien=$_POST['no_pasien'];
    $kddokter=$_POST['dokter'];

    $pasien=$koneksi->query("select * from tb_pasien where no_pasien='$nopasien'");
    while($data_pasien=$pasien->fetch_assoc()){
        $status=$data_pasien['status'];
        if($status==0){
            $koneksi->query("insert into tb_rekam_medis(no_rm,no_pasien,tgl_pemeriksaan,ket,status,kd_dokter)
            values('$no_rm','$nopasien','$date','-','Dalam Antrian','$kddokter')");
            $koneksi->query("update tb_pasien set status where='A' where no_pasien='$nopasien'");

        }
        else{
            ?>
            <script type="text/javascript">
                alert("Nomor atau Pasien sudah terdaftar");
                window.location.href="?page=rekam_medis&koderm=<?php echo $kode;?>";

            </script>
            <?php
        }
    }
}
?>

<form method="POST"></form>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PASIEN
                            </h2>
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. RM</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nama Ibu</th>
                                            <th>No. Telpon</th>
                                            <th>Alamat</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql=$koneksi->query("select tb_pasien.no_pasien
                                            ,nm_pasien,tgl_lhr,usia,j_kel,nm_ibu,no_tlp,alamat FROM tb_pasien,
                                            tb_rekam_medis where tb_rekam_medis.no_pasien=tb_pasien.no_pasien
                                            AND no_rm='$kode'");
                                            while($data=$sql->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['no_pasien']?></td>
                                                    <td><?php echo $data['nm_pasien']?></td>
                                                    <td><?php echo $data['tgl_lhr']?></td>
                                                    <td><?php echo $data['usia']?></td>
                                                    <td><?php echo $data['j_kel']?></td>
                                                    <td><?php echo $data['nm_ibu']?></td>
                                                    <td><?php echo $data['no_tlp']?></td>
                                                    <td><?php echo $data['alamat']?></td>
                                            
                                                </tr>
                                            <?php }
                                        ?>
                                    </tbody>
                                </table>                  
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

            <form method="POST"></form>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TERAPIS
                            </h2>
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Terapis</th>
                                            <th>Aksi</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql2=$koneksi->query("select kd_dokter FROM tb_rekam_medis where no_pasien=no_pasien
                                            AND no_rm='$kode'");
                                            while($data=$sql2->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['kd_dokter']?></td>
                                                    <td>
                                                        <a href="?page=pemeriksaan_dokter&aksi=ubah_terapis&no_rm=<?php echo $data['no_rm'];?>" 
                                                        class="btn btn-success"><img src="images/edit.ico" width="15" height="15"> Ganti Terapis</a>
                                                    </td>                                        
                                                </tr>
                                            <?php }
                                        ?>
                                    </tbody>
                                </table>                  
                            </div>
                            </div>
                    </div>
                </div>
            </div>

<!-- Basic Examples -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEMERIKSAAN AWAL <small>oleh : Terapis</small>
                            </h2>
                        </div>
                        <div class="body">
                        <form method="POST">
                            <label for="">1. Berat Badan, Tinggi Badan dan Suhu Badan</label>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                BB :<input type="text" name="txtbb" value="<?php echo $tampil['bb']?>" class="form-control" readonly>
                                </div>
                                <div class="col-sm-2">
                                TB :    <input type="text" name="txttb" value="<?php echo $tampil['tb']?>" class="form-control" readonly>
                                </div>
                                <div class="col-sm-2">
                                Suhu :    <input type="text" name="txtsuhu" value="<?php echo $tampil['suhu']?>" class="form-control" readonly>
                                </div>
                            </div>

                            <label for="">2. Riwayat Alergi</label>
                            <div class="row clearfix">
                            <div class="col-sm-6">
                                    <input type="text" name="txtalergi" value="<?php echo $tampil['alergi']?>" class="form-control" readonly>
                            </div>
                            </div>
                            <label for="">3. Keluhan</label>
                            <div class="row clearfix">
                            <div class="col-sm-6">
                                    <input type="text" name="txtkeluhan" value="<?php echo $tampil['keluhan']?>" class="form-control" readonly>
                            </div>
                            </div>
                        </form>

</div>
</div>
</div>
</div>







