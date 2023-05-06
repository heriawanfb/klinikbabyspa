<?php

    $no_pasien = $_GET['no_pasien'];
    $sql = $koneksi->query("select * from tb_pasien where no_pasien='$no_pasien'");
    $tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH DATA PASIEN
                            </h2>
                        </div>
                            
                        <div class="body">
                        <form method="POST">
                        <label for="">No. RM</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode" value="<?php echo $tampil['no_pasien'];?>" class="form-control" readonly/>
                            </div>
                        </div>

                        <label for="">Nama</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nm_pasien'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Tanggal Lahir</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" name="tgllahir" value="<?php echo $tampil['tgl_lhr'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Usia</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="umur" value="<?php echo $tampil['usia'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Jenis Kelamin</label>
                        <div class="form-group">
                            <div class="form-line">
                            <select name="jk" class="form-control" show-tick>
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="L"<?php if ($tampil['j_kel']=='L'){echo "selected";}?>>Laki-Laki</option>
                                <option value="P"<?php if ($tampil['j_kel']=='P'){echo "selected";}?>>Perempuan</option>
                                </select>    
                            </div>
                        </div>

                        <label for="">Nama Ibu</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nm_ibu" value="<?php echo $tampil['nm_ibu'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">No. Telpon</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="telepon" value="<?php echo $tampil['no_tlp'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Alamat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="alamat" value="<?php echo $tampil['alamat'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Status</label>
                        <div class="form-group">
                            <div class="form-line">
                            <select name="status" class="form-control" show-tick>
                                <option value="">--Pilih Status--</option>
                                <option value="A"<?php if ($tampil['status']=='A'){echo "selected";}?>>Aktif</option>
                                <option value="IA"<?php if ($tampil['status']=='IA'){echo "selected";}?>>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </form>


<?php 
if (isset($_POST['simpan'])){

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$tgllahir=$_POST['tgllahir'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$nm_ibu=$_POST['nm_ibu'];
$telepon=$_POST['telepon'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];


    $sql=$koneksi->query("update tb_pasien set nm_pasien='$nama',tgl_lhr='$tgllahir',usia='$umur',j_kel='$jk',nm_ibu='$nm_ibu',no_tlp='$telepon',alamat='$alamat',status='$status' where no_pasien='$kode'");
    if ($sql){
        ?>
        <script type="text/javascript">
        alert ("Data Berhasil di Simpan");
        window.location.href="?page=pasien";
        </script>
        <?php
    }
}

?>