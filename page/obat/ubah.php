<?php
 
 $kd_tarif = $_GET['kd_tarif'];
    $sql = $koneksi->query("select * from tb_tarif where kd_tarif='$kd_tarif'");
    $tampil = $sql->fetch_assoc();

?>
<script>
function jumlah(){
    
var hrg_beli = document.getElementById('harga_beli').value;
var hrg_jual = document.getElementById('harga_jual').value;
var rslt = parseInt(hrg_jual) - parseInt(hrg_beli);
if(!isNaN(rslt)){
    document.getElementById('profit').value = rslt;
}

}
</script>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH TARIF TREATMENT
                            </h2>
                        </div>
                            
                        <div class="body">
                        <form method="POST">

                        
                        <label for="">Kode Tarif</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode" value="<?php echo $tampil['kd_tarif'];?>" class="form-control" readonly />
                            </div>
                        </div>
                    

                        <label for="">Nama Treatment</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nm_tarif'];?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Harga</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="harga" value="<?php echo $tampil['harga'];?>" class="form-control" />
                            </div>
                        </div>


                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </form>

<?php 
if (isset($_POST['simpan'])){
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];


$sql=$koneksi->query("update tb_tarif set nm_tarif='$nama',harga='$harga' where kd_tarif='$kode'");
if ($sql){
    ?>
    <script type="text/javascript">
    alert ("Data Berhasil di Ubah");
    window.location.href="?page=obat";
    </script>
    <?php
    }
}

?>