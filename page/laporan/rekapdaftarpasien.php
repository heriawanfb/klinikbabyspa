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
                        <th>Tgl. Daftar</th>
                        <th>No. ID/Pendaftaran</th>
                        <th>Nama Pasien</th>
                        <th>JK</th>
                        <th>Usia</th>
                        <th>Nama Ibu</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tgl_awal=$_POST['tgl_awal'];
                    $tgl_akhir=$_POST['tgl_akhir'];

                    $no=1;
                    $sql=$koneksi->query("select * from tb_pasien where tgldaftar between '$tgl_awal' and '$tgl_akhir'");
                    while($data=$sql->fetch_assoc()){
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++;?></td>
                            <td align="center"><?php echo date('d F Y',strtotime($data['tgldaftar']))?></td>
                            <td align="center"><?php echo $data['no_pasien']?></td>
                            <td><?php echo $data['nm_pasien']?></td>
                            <td align="center"><?php echo $data['j_kel']?></td>
                            <td align="center"><?php echo $data['usia']?></td>
                            <td align="center"><?php echo $data['nm_ibu']?></td>
                            <td><?php echo $data['alamat']?></td>
                            <td align="center"><?php echo $data['no_tlp']?></td>
                        </tr>
                        <?php }
                    ?>
                </tbody>
        </table>
        
<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">
</body>
</html>