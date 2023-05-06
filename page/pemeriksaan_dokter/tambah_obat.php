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
                                    <label for="">No. Pendaftaran  ---------  No. RM  ----------------------  Nama Pasien
                                    </label>
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        <input type="text" name="kode" value="<?php echo $kode;?>" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-2">
                                        <input type="text" name="no_pasien" value="<?php echo $tampil['no_pasien'];?>" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-3">
                                        <input type="text" name="nm_pasien" value="<?php echo $tampil['nm_pasien'];?>" class="form-control" readonly>
                                        </div>
                                        </div>
                                        </div>
                                        </form>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA TERAPI 
                            </h2>
                        </div>
                        <div class="body">
                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form method="POST">
                        <div class="body">
                        <div>
                            <label for="">Kode Terapi</label>
                            <div class="row clearfix">
                            <div class="col-md-2">
                            <input type="text" id="kd_tarif" name="kd_tarif" class="form-control"
                            data-toggle="modal" data-target="#myModal"></div>
                            <div class="col-md-2">
                            <input type="submit" value="Tambahkan Terapi" name="simpan" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>

<?php
if (isset($_POST['simpan'])){
    $kdtarif=$_POST['kd_tarif'];
    $tarif=$koneksi->query("select * from tb_tarif where kd_tarif='$kdtarif' ");
    $data_tarif=$tarif->fetch_assoc();
    $harga=$data_tarif['harga'];
    $nmtarif=$data_tarif['nm_tarif'];
    $jumlah=1;
    $total=$jumlah*$harga;

    $tarif2=$koneksi->query("select * from tb_tarif where kd_tarif='$kdtarif' ");
    while($data_tarif2=$tarif2->fetch_assoc()){
        $sisa=$data_tarif2['stok'];
        if($sisa==0){
            ?>
            <script type="text/javascript">
                alert("Terapi sudah terinput");
                window.location.href="";

            </script>
            <?php
            
        }else{
            $koneksi->query("insert into tb_rekam_medis_detail2 (no_rm,kd_tarif,jumlah,harga,nm_tarif)
            values('$kode','$kdtarif','$jumlah','$harga','$nmtarif')");
            
        }
        }
}
?>


<form method="POST">
<div class="body">
                        <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. ID</th>
                                            <th>Kode Terapi</th>
                                            <th>Nama Terapi</th>
                                            <th>Harga</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql=$koneksi->query("SELECT no_rm,kd_tarif,nm_tarif,harga FROM tb_rekam_medis_detail2 where no_rm='$kode'");
                                            while($data=$sql->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++;?></td>
                                                    <td><?php echo $data['no_rm']?></td>
                                                    <td><?php echo $data['kd_tarif']?></td>
                                                    <td><?php echo $data['nm_tarif']?></td>
                                                    <td align="left"><?php echo 'Rp. ' .number_format($data['harga'], 0, '', '.')?></td>
                                                                                                      
                                            <td>
                                                <a onclick="return confirm ('Anda Yakin Menghapus Terapi?')"
                                                href="?page=pemeriksaan_dokter&aksi=hapus_tindakan&id=<?php echo $data['id']?>&no_rm=<?php echo $data['no_rm']?>
                                                &kd_tarif=<?php echo $data['kd_tarif']?>&jumlah=<?php echo $data['jumlah']?>" title="hapus"
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
</form>


<!-- Awal Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                       
                         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="myModalLabel">
                                DATA TERAPI
                            </h2>
                            
                        </div>
                        <div class="modal-body">
                            
                                <table id="lookup" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <!--<th>No.</th>-->
                                            <th>Kode Terapi</th>
                                            <th>Nama Terapi</th>
                                            <th>Harga</th>
                                                                                     
                                        </tr>
                                    </thead>

                                    <tbody>
                                    
                                    <?php
                                    
                                    $sql= $koneksi->query("select * from tb_tarif");
                                    while($data= $sql->fetch_assoc()){


                                    ?>
                                    
                                    <tr class="pilih" data-kdtarif="<?php echo $data['kd_tarif']; ?>">
                                        
                                        <td><?php echo $data['kd_tarif']?></td>
                                        <td><?php echo $data['nm_tarif']?></td>
                                        <td><?php echo $data['harga']?></td>
                                        
                                        
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
                document.getElementById("kd_tarif").value = $(this).attr('data-kdtarif');
                $('#myModal').modal('hide');
            });
            

// tabel lookup pasien
            $(function () {
                $("#lookup").dataTable();
            });
        
        </script>

<!--Akhir Modal-->
                    