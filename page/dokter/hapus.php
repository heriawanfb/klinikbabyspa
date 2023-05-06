<?php

	$kd_dokter = $_GET['kd_dokter'];
    $sql = $koneksi->query("delete from tb_dokter where kd_dokter='$kd_dokter'");

?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?page=dokter";
</script>