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

echo $sql_insert = "INSERT INTO data_siswa (nama, nisn, tempat, tanggal_lahir, alamat, sekolah_asal, agama, jenis_kelamin, status_keluarga, anak_ke, bersaudara, ayah, no_telp_ayah, pekerjaan_ayah, ibu, no_telp_ibu, pekerjaan_ibu, wali, no_telp_wali, pekerjaan_wali) VALUE ('$nama', '$nisn', '$tempat', '$tanggal_lahir', '$alamat', '$sekolah_asal', '$agama', '$jenis_kelamin', '$status_keluarga', '$anak_ke', '$bersaudara', '$ayah', '$no_telp_ayah', '$pekerjaan_ayah', '$ibu', '$no_telp_ibu', '$pekerjaan_ibu', '$wali', '$no_telp_wali', '$pekerjaan_wali')";
$insert_data= mysqli_query($con, $sql_insert);

if ($insert_data){
    header("location: index.php");
}else{
    header("location: tambah.php");
}
//print_r($_POST);

?>