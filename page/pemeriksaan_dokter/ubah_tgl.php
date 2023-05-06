<!-- Basic Examples !-->
<?php
$kode=$_GET['no_rm'];
$sql=$koneksi->query("SELECT tgl_pemeriksaan,tb_rekam_medis.no_rm,tb_rekam_medis.no_pasien,tb_rekam_medis.kd_dokter,nm_pasien,bb,tb,suhu,keluhan,alergi FROM tb_pasien, tb_rekam_medis, tb_rekam_medis_detail3 WHERE tb_pasien.no_pasien=tb_rekam_medis.no_pasien AND tb_rekam_medis.no_rm=tb_rekam_medis_DETAIL3.no_rm AND tb_rekam_medis.no_rm='$kode'");
$tampil=$sql->fetch_assoc();
?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH TANGGAL PEMERIKSAAN
                            </h2>
                        </div>
                            
                        <div class="body">
                        <form method="POST">
                        <label for="">No. Pendaftaran/ID</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode" value="<?php echo $tampil['no_rm'];?>" class="form-control" readonly/>
                            </div>
                        </div>

                        <label for="">Tanggal Periksa</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tglperiksa" value="<?php echo $tampil['tgl_pemeriksaan'];?>" class="form-control" readonly/>
                            </div>
                        </div>

                        <label for="">Tanggal Periksa Baru</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" name="tglperiksabaru"class="form-control" />
                            </div>
                        </div>
                        

                        <input type="submit" name="simpan" value="Ubah Tanggal Periksa" class="btn btn-primary">
                           
                    </form>

<?php 
if (isset($_POST['simpan'])){
$kode=$_POST['kode'];
$tglperiksa=$_POST['tglperiksa'];
$tglperiksabaru=$_POST['tglperiksabaru'];

    $sql=$koneksi->query("update tb_rekam_medis set tgl_pemeriksaan='$tglperiksabaru' where no_rm='$kode'");
    if ($sql){
        ?>
        <script type="text/javascript">
        alert ("Data Berhasil di Ubah");
        window.location.href="?page=pemeriksaan_dokter";
        </script>
        <?php
    }
}

?>