<!-- Basic Examples -->
<?php $koneksi=new mysqli("localhost","root","","db_fafa");
?>

<div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN REKAP KEUANGAN
                            </h2>
                        </div>

                        
            <div class="modal-body">
            <form method="POST" action="page/laporan/rekaphasil.php" target="blank">
            <label for="">Tanggal Awal</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_awal"class="form-control" />
                </div>
            </div>

            <label for="">Tanggal Akhir</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="tgl_akhir"class="form-control" />
                </div>
           

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Lihat</button>
               
            </div>
            </div>
        </form>
        </div>
    </div>
</div>