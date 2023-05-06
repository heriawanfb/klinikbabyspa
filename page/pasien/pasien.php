<!-- Basic Examples -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PASIEN
                            </h2>
                        </div>
                        <div class="body">
                        <a href="?page=pasien&aksi=tambah" class="btn btn-primary">
                                <img src="images/edit_add.png" width="15" height="15">Tambah</a>
                                <ul></ul>
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
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
                                            <th>Tgl. Daftar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql=$koneksi->query("select*from tb_pasien");
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
                                                    <td><?php echo $data['tgldaftar']?></td>
                                            <td>
                                                <a href="?page=pasien&aksi=ubah&no_pasien=<?php echo $data['no_pasien'];?>" 
                                                class="btn btn-success"><img src="images/edit.ico" width="15" height="15"></a>
                                                <a onclick = "return confirm ('Anda yakin akan menghapus data ini?')"
                                                href="?page=pasien&aksi=hapus&no_pasien=<?php echo $data['no_pasien'];?>" 
                                                class="btn btn-danger"><img src="images/delete.ico" width="15" height="15"></a>
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