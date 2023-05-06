<?php

	$kode = $_GET['koderm'];
    $no_rm=$_GET['no_rm'];
    $sql = $koneksi->query("delete from tb_rekam_medis where no_rm='$no_rm'");
        if($sql){
            ?>
             <script type="text/javascript">
                window.location.href="?page=rekam_medis&koderm=<?php echo $kode;?>";
                </script>
                <?php

                
                }
        ?>


