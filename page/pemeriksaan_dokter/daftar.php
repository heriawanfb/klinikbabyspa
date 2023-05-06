<!-- Basic Examples -->

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR PASIEN YANG TERAPI
                            </h2>
                        </div>

                        <div class="body">
                                <ul></ul>
                        <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tgl Periksa</th>
                                            <th>No. ID/Pendaftaran</th>
                                            <th>No. RM</th>
                                            <th>Nama</th>
                                            <th>Usia</th>
                                            <th>Keluhan</th>
                                            <th>Terapis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $tgl=date("Y-m-d");
                                            $no=1;
                                            $sql=$koneksi->query("SELECT tgl_pemeriksaan,tb_rekam_medis.no_rm,tb_rekam_medis.no_pasien,nm_pasien,usia,
                                            keluhan,tb_rekam_medis.kd_dokter FROM tb_pasien, tb_rekam_medis, tb_rekam_medis_detail3 
                                            WHERE tb_pasien.no_pasien=tb_rekam_medis.no_pasien AND tb_rekam_medis.no_rm=tb_rekam_medis_DETAIL3.no_rm 
                                            and tgl_pemeriksaan='$tgl' ORDER BY tb_rekam_medis.id DESC;");
                                            while($data=$sql->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['tgl_pemeriksaan']?></td>
                                                    <td><?php echo $data['no_rm']?></td>
                                                    <td><?php echo $data['no_pasien']?></td>
                                                    <td><?php echo $data['nm_pasien']?></td>
                                                    <td><?php echo $data['usia']?></td>
                                                    <td><?php echo $data['keluhan']?></td>
                                                    <td><?php echo $data['kd_dokter']?></td>
                                                    
                                                    
                                            <td>
                                                <a href="?page=pemeriksaan_dokter&aksi=pemeriksaan_dokter&no_rm=<?php echo $data['no_rm'];?>" 
                                                class="btn btn-success">Cek RM</a>
                                                <a href="?page=pemeriksaan_dokter&aksi=ubah_tgl&no_rm=<?php echo $data['no_rm'];?>" 
                                                class="btn btn-success">! Ubah Tanggal</a>
                                                <a href="?page=pemeriksaan_dokter&aksi=ubah_rm&no_rm=<?php echo $data['no_rm'];?>" 
                                                class="btn btn-success">! Ganti Terapis</a>
                                                <!-- <a href="?page=pemeriksaan_dokter&aksi=ubah_terapis&no_rm=<?php echo $data['no_rm'];?>" 
                                                class="btn btn-success">! Ubah Terapis</a> -->
                                                <br>
                                                <br>
                                                <a href="?page=pemeriksaan_dokter&aksi=tambah_obat&no_rm=<?php echo $data['no_rm'];?>" 
                                                class="btn btn-primary">+ Terapi</a>
                                                <a onclick = "return confirm ('Anda yakin akan menghapus data ini?')"
                                                href="?page=pemeriksaan_dokter&aksi=hapus&no_rm=<?php echo $data['no_rm']?>" 
                                                class="btn btn-danger">- Hapus</a>
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