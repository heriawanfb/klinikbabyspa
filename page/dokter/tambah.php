<?php
 
// menghubungkan dengan koneksi database
$koneksi=new mysqli("localhost","root","","db_fafa");
 
// mengambil data pasien dengan kode paling besar
 //$query = mysqli_query($koneksi, "SELECT max(kd_dokter) as kodeTerbesar FROM tb_dokter");
//$data = mysqli_fetch_array($query);
//$nodokter = $data['kodeTerbesar'];
 
// mengambil angka dari nmor pasien terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
//$urutan = (int) substr($nodokter, 1, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
//$urutan++;
 
// membentuk nomor pasien baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
//$huruf = "D";
//$nodokter = $huruf . sprintf("%03s", $urutan);
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
                                TAMBAH DATA DOKTER
                            </h2>
                        </div>
                            
                        <div class="body">
                        <form method="POST">
                        <label for="">Kode</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode" class="form-control" />
                            </div>
                        </div>

                        <label for="">Nama Terapis</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama" class="form-control" />
                            </div>
                        </div>

                        <label for="">Tempat Lahir</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tmplahir"class="form-control" />
                            </div>
                        </div>

                        <label for="">No. Telpon</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="telpon"class="form-control" />
                            </div>
                        </div>

                        <label for="">Alamat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="alamat"class="form-control" />
                            </div>
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </form>

<?php 
if (isset($_POST['simpan'])){
$kd_dokter=$_POST['kode'];
$nama=$_POST['nama'];
$tmplahir=$_POST['tmplahir'];
$telpon=$_POST['telpon'];
$alamat=$_POST['alamat'];

    $sql=$koneksi->query("insert into tb_dokter values('$kd_dokter','$nama','$tmplahir','$telpon','$alamat')");
    if ($sql){
        ?>
        <script type="text/javascript">
        alert ("Data Berhasil di Simpan");
        window.location.href="?page=dokter";
        </script>
        <?php
    }
}

?>