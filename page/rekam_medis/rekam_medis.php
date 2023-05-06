<!-- Basic Examples !-->
<?php
$kode=$_GET['koderm'];
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="card">
                        
                        <div class="body">
                        
                            <form method="POST">
                                <div>
                                    <label for="">No. Pendaftaran</label> 
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        <input type="text" name="kode" value="<?php echo $kode;?>" class="form-control">
                                    </div>
                                        <div class="col-md-2">
                                        <input type="text" id= "no_pasien" placeholder="Pilih Pasien" name="no_pasien" class="form-control" data-toggle="modal" data-target="#myModal" required="">
                                        </div>
                                       
                                </div>
                                    <label for="">Terapis</label>
                                    <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <select class="form-control" show-tick name="dokter">
                                        <option value="">-- Pilih Terapis --</option>
                                            <?php
                                            $lbl = '<option value=""> -- Pilih Terapis -- </option>';
                                            $dokter=$koneksi->query("select * from tb_dokter order by kd_dokter");
                                            while ($d_dokter=$dokter->fetch_assoc()){
                                                echo "<option value='$d_dokter[kd_dokter]'>$d_dokter[nm_dokter]</option>";
                                            }
                                            ?>
                                        </select>
                                        </div>
                                         <div class="col-md-2">
                                        <input type="submit" value="Pilih" name="simpan" class="btn btn-primary">
                                        </div>
                                        </div>
                                       
                                        
                            </form>
</div>
</div>
</div>
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
                                            <th>JK</th>
                                            <th>Nama Ibu</th>
                                            <th>Alamat</th>
                                            <th>Terapis</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql=$koneksi->query("select tb_pasien.no_pasien
                                            ,nm_pasien,tgl_lhr,usia,j_kel,nm_ibu,alamat,tb_rekam_medis.kd_dokter FROM tb_pasien,
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
                                                    <td><?php echo $data['alamat']?></td>
                                                    <td><?php echo $data['kd_dokter']?></td>
                                                   
                                            <td>
                                                
                                                <a href="?page=rekam_medis&aksi=hapus&no_pasien=<?php echo $data['no_pasien'];?>&no_rm=<?php echo $data['no_rm'];?>" 
                                                class="btn btn-danger">Hapus</a>
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
            <!-- #END# Basic Examples -->

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
                                    <input type="text" name="txtbb" class="form-control" placeholder="BB">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="txttb" class="form-control" placeholder="TB">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="txtsuhu" class="form-control" placeholder="Suhu">
                                </div>
                            </div>

                            <label for="">2. Riwayat Alergi</label>
                            <div class="row clearfix">
                            <div class="col-sm-6">
                                    <input type="text" name="txtalergi" class="form-control" placeholder="Riwayat Alergi">
                            </div>
                            </div>
                            <label for="">3. Keluhan</label>
                            <div class="row clearfix">
                            <div class="col-sm-6">
                                    <input type="text" name="txtkeluhan" class="form-control" placeholder="Keluhan">
                            </div>
                            <input type="submit" name="simpanawal" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>

</div>
</div>
</div>
</div>



<?php
if (isset($_POST['simpanawal'])){
    $bb=$_POST['txtbb'];
    $tb=$_POST['txttb'];
    $suhu=$_POST['txtsuhu'];
    $keluhan=$_POST['txtkeluhan'];
    $alergi=$_POST['txtalergi'];
    
    $sql=$koneksi->query("insert into tb_rekam_medis_detail3 (no_rm,bb,tb,suhu,keluhan,alergi)
            values('$kode','$bb','$tb','$suhu','$keluhan','$alergi')");
            if($sql){
                ?>
                <script type="text/javascript">
                    alert ("Data berhasil di Simpan");
                    window.location.href="?page=pemeriksaan_dokter";
                </script>
                <?php
            }
}
?>

<!-- Awal Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                       
                         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="myModalLabel">
                                DATA PASIEN
                            </h2>
                            
                        </div>
                        <div class="modal-body">
                            
                                <table id="lookup" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <!--<th>No.</th>-->
                                            <th>Nomor RM</th>
                                            <th>Nama Pasien</th>
                                            <th>Kelamin</th>
                                            <th>Usia</th>
                                            <th>Nama Ibu</th>
                                             <th>Alamat</th>
                                           
                                        </tr>
                                    </thead>

                                    <tbody>
                                    
                                    <?php
                                    
                                    $sql= $koneksi->query("select * from tb_pasien");
                                    while($data= $sql->fetch_assoc()){


                                    ?>
                                    
                                    <tr class="pilih" data-nopasien="<?php echo $data['no_pasien']; ?>">
                                        
                                        <td><?php echo $data['no_pasien']?></td>
                                        <td><?php echo $data['nm_pasien']?></td>
                                        <td><?php echo $data['j_kel']?></td>
                                        <td><?php echo $data['usia']?></td>
                                        <td><?php echo $data['nm_ibu']?></td>
                                        <td><?php echo $data['alamat']?></td>
                                        
                                    </tr>
                                    <?php } ?>        
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                       
            </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript">
                // jika dipilih, no_pasien akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("no_pasien").value = $(this).attr('data-nopasien');
                $('#myModal').modal('hide');
            });
            

// tabel lookup pasien
            $(function () {
                $("#lookup").dataTable();
            });
        
        </script>

<!--Akhir Modal-->








