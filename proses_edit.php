<?php
include "koneksi.php";
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tanggal_lahir'];
$bulan_lahir = $_POST['bulan_lahir'];
$tahun_lahir = $_POST['tahun_lahir'];
$tanggal_lahir = $tahun_lahir."-".$bulan_lahir."-".$tgl;
$alamat = $_POST['alamat'];
$sekolah_asal = $_POST['sekolah_asal'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_keluarga = $_POST['status_keluarga'];
$anak_ke = $_POST['anak_ke'];
$bersaudara = $_POST['bersaudara'];
$ayah = $_POST['ayah'];
$no_telp_ayah = $_POST['no_telp_ayah'];
$pekerjaan_ayah = $_POST['pekerjaaan_ayah'];
$ibu = $_POST['ibu'];
$no_telp_ibu = $_POST['no_telp_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$wali = $_POST['wali'];
$no_telp_wali = $_POST['no_telp_wali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$id=$_POST['id'];

$update = mysqli_query($con,"UPDATE data_siswa SET nama='$nama',nisn='$nisn',tempat='$tempat',tanggal_lahir='$tanggal_lahir',alamat='$alamat',sekolah_asal='$sekolah_asal',agama='$agama',jenis_kelamin='$jenis_kelamin',stasus_keluarga='$status_keluarga',anak_ke='$anak_ke',bersaudara='$bersaudara',ayah='$ayah',no_telp_ayah='$no_telp_ayah',pekerjaan_ayah='$pekerjaan_ayah',ibu='$ibu',no_telp_ibu='$no_telp_ibu',pekerjaan_ibu='$pekerjaan_ibu',wali='$wali',no_telp_wali='$no_telp_wali',pekerjaan_wali='$pekerjaan_wali' WHERE id='$id'");

if($update){
    header("location: index.php");
}else {
    header("location: edit.php?id=$id");
}
?>