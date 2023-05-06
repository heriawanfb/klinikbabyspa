<!-- Basic Examples -->
<?php $koneksi=new mysqli("localhost","root","","db_fafa");
?>

<div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN HARIAN PASIEN
                            </h2>
                        </div>
                     
                        <!--<form method="GET">
                        <div class="body">     
                        <div class="table-responsive">
                        <table>
                            <tr>
                                <td>Dari tanggal</td>
                                <td><input type="date" name="dari_tgl" required="required"></td>
                                <td> s/d </td>
                                <td><input type="date" name="sampai_tgl" required="required"></td>
                                <td><input type="submit" class="btn btn-primary" name="cari" value="Cari"></td>
                            </tr>
                        </table>
                        </div>
                        </div>
                        </form> -->

                        <div class="body"> 
                        <input type="button" class="btn btn-primary" value="Cetak" onclick="window.print()">  
                        <ul></ul>
        
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                    <tr>
                        <th>No.</th>
                        <th>Tgl. Periksa</th>
                        <th>No. RM</th>
                        <th>Nama Pasien</th>
                        <th>JK</th>
                        <th>Usia</th>
                        <th>Nama Ibu</th>
                        <th>Alamat</th>
                        <th>Bidan Terapis</th>
                        <th>Terapi</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $tgl=date("Y-m-d");
                    $no=1;
                    $sql=$koneksi->query("select tb_pasien.no_pasien, tb_pasien.nm_pasien, tb_pasien.j_kel, 
                    tb_pasien.usia, tb_pasien.nm_ibu, tb_pasien.alamat, tb_rekam_medis.tgl_pemeriksaan , 
                    tb_rekam_medis.kd_dokter, tb_rekam_medis_detail2.nm_tarif, tb_rekam_medis_detail2.harga 
                    from tb_pasien JOIN tb_rekam_medis ON tb_pasien.no_pasien=tb_rekam_medis.no_pasien JOIN 
                    tb_rekam_medis_detail2 ON tb_rekam_medis.no_rm=tb_rekam_medis_detail2.no_rm where tgl_pemeriksaan='$tgl'");
                    while($data=$sql->fetch_assoc()){
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++;?></td>
                            <td align="center"><?php echo date('d F Y',strtotime($data['tgl_pemeriksaan']))?></td>
                            <td align="center"><?php echo $data['no_pasien']?></td>
                            <td align="center"><?php echo $data['nm_pasien']?></td>
                            <td align="center"><?php echo $data['j_kel']?></td>
                            <td align="center"><?php echo $data['usia']?></td>
                            <td align="center"><?php echo $data['nm_ibu']?></td>
                            <td align="center"><?php echo $data['alamat']?></td>
                            <td align="center"><?php echo $data['kd_dokter']?></td>
                            <td align="center"><?php echo $data['nm_tarif']?></td>
                            <td align="right"><?php echo 'Rp. ' .number_format($data['harga'], 0, '', '.')?></td>
                        </tr>
                        <?php }
                    ?>
                      <tr>
                        <td colspan="10" align="center"><b>Total</b></td>
                        <td align="center"><?php echo $data['total']?></td>
                        </tr>

                                    </tbody>
                                </table>                  
                            </div>
                            </div>
                    </div>
                </div>
            </div>
<!-- #END# Basic Examples -->