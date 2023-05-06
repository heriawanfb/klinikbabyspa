<?php

    $kd_dokter = $_GET['kd_dokter'];
    $sql = $koneksi->query("select * from tb_dokter where kd_dokter='$kd_dokter'");
    $tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH DATA TERAPIS
                            </h2>
                        </div>
                            
                        <div class="body">
                        <form method="POST">
                        <label for="">Kode</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode" value="<?php echo $tampil['kd_dokter'];?>" class="form-control"/>
                            </div>
                        </div>

                        <label for="">Nama Terapis</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nm_dokter'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Tempat Lahir</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tmplahir" value="<?php echo $tampil['tmp_lhr'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Telpon</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tlp" value="<?php echo $tampil['tlp'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Alamat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="alamat" value="<?php echo $tampil['alamat'];?>" class="form-control" />
                            </div>
                        </div>


                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </form>

<?php 
if (isset($_POST['simpan'])){
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$tmplahir=$_POST['tmplahir'];
$tlp=$_POST['tlp'];
$alamat=$_POST['alamat'];


    $sql=$koneksi->query("update tb_dokter set nm_dokter='$nama',tmp_lhr='$tmplahir',tlp='$tlp',alamat='$alamat' where kd_dokter='$kode'");
    if ($sql){
        ?>
        <script type="text/javascript">
        alert ("Data Berhasil di Ubah");
        window.location.href="?page=dokter";
        </script>
        <?php
    }
}

?>