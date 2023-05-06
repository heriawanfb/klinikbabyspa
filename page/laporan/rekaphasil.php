<?php $koneksi=new mysqli("localhost","root","","db_fafa");

//$no_rm=$GET['no_rm'];
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            @media print{
                input.noPrint{
                    display: none;
                }
            }
        </style>
    </head>
    <body>

    

        <table border="1" width="100%" style="border-collapse: collapse;">

            <div align="left">
                <img src="../../images/logofafa.png" width="75" height="75" style="float:left;margin:0 8px 4px 0;"/>
                <font size="6" color="pink"><b>Fafa Baby Kids Moms Spa</b></font><br>
                Perum Istana Kebonwaris Blok A17, Pandaan <br> Telp. 081234028038 </div>
                <caption>Rekap Pendaftaran Pasien Periode: <b><?php echo $_POST['tgl_awal']?></b> s/d <b><?php echo $_POST['tgl_akhir']?></b></caption>
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
                    $tgl_awal=$_POST['tgl_awal'];
                    $tgl_akhir=$_POST['tgl_akhir'];

                    $no=1;
                    $sql=$koneksi->query("select tb_pasien.no_pasien, tb_pasien.nm_pasien, tb_pasien.j_kel, 
                    tb_pasien.usia, tb_pasien.nm_ibu, tb_pasien.alamat, tb_rekam_medis.tgl_pemeriksaan , 
                    tb_rekam_medis.kd_dokter, tb_rekam_medis_detail2.nm_tarif, tb_rekam_medis_detail2.harga 
                    from tb_pasien JOIN tb_rekam_medis ON tb_pasien.no_pasien=tb_rekam_medis.no_pasien JOIN 
                    tb_rekam_medis_detail2 ON tb_rekam_medis.no_rm=tb_rekam_medis_detail2.no_rm where tgl_pemeriksaan between '$tgl_awal' and '$tgl_akhir'
                    ");
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
        
<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">
</body>
</html>