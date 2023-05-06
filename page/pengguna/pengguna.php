<!-- Basic Examples -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA USER
                            </h2>
                        </div>
                        <div class="body">
                        <a href="?page=pengguna&aksi=tambah" class="btn btn-primary">
                                <img src="images/edit_add.png" width="15" height="15">Tambah</a>
                                <ul></ul>
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no=1;
                                            $sql=$koneksi->query("select*from tb_pengguna");
                                            while($data=$sql->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    
                                                    <td><?php echo $data['id']?></td>
                                                    <td><?php echo $data['username']?></td>
                                                    <td><?php echo $data['nama']?></td>
                                                    <td><?php echo $data['password']?></td>
                                                    <td><?php echo $data['level']?></td>
                                                    <td><?php echo $data['foto']?></td>
                                            <td>
                                                <a href="?page=pengguna&aksi=ubah&id=<?php echo $data['id'];?>" 
                                                class="btn btn-success"><img src="images/edit.ico" width="15" height="15"></a>
                                                <a onclick = "return confirm ('Anda yakin akan menghapus data ini?')"
                                                href="?page=pengguna&aksi=hapus&id=<?php echo $data['id'];?>" 
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