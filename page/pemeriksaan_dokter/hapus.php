<?php

	$id = $_GET['id'];
    $no_rm = $_GET['no_rm'];
    
    $sql = $koneksi->query("delete from tb_rekam_medis where no_rm='$no_rm'");
    

?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?page=pemeriksaan_dokter";
</script>