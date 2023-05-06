<?php

	$id = $_GET['id'];
    $no_rm = $_GET['no_rm'];
	$kd_tarif = $_GET['kd_tarif'];
	$data = $_GET['no_rm'];
    
    $sql = $koneksi->query("delete from tb_rekam_medis_detail2 where no_rm='$no_rm' AND kd_tarif='$kd_tarif' ");
    
?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?page=pemeriksaan_dokter&aksi=tambah_obat&no_rm=<?php echo $no_rm;?>";
</script>