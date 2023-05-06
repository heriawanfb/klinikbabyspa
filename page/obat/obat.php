<!-- Basic Examples -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA TARIF TREATMENT
                            </h2>
                        </div>
                        <div class="body">
                        <a href="?page=obat&aksi=tambah" class="btn btn-primary">
                                <img src="images/edit_add.png" width="15" height="15">Tambah</a>
                                <ul></ul>
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Tarif</th>
                                            <th>Nama Treatment</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql=$koneksi->query("select*from tb_tarif");
                                            while($data=$sql->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['kd_tarif']?></td>
                                                    <td><?php echo $data['nm_tarif']?></td>
                                                    <td align="left"><?php echo 'Rp. ' .number_format($data['harga'], 0, '', '.')?></td>
                                            <td>
                                                <a href="?page=obat&aksi=ubah&kd_tarif=<?php echo $data['kd_tarif'];?>" 
                                                class="btn btn-success"><img src="images/edit.ico" width="15" height="15"></a>
                                                <a onclick = "return confirm ('Anda yakin akan menghapus data ini?')"
                                                href="?page=obat&aksi=hapus&kd_tarif=<?php echo $data['kd_tarif'];?>" 
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