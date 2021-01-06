<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Tampilan Data </title>
</head>
<body>
<a href="tambah.php">Tambah Data </a>
<br>
<br>
<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>NISN</th>
<th>Tempat Tanggal Lahir</th>
<th>Alamat</th>
<th>Sekolah Asal</th>
<th>Agama</th>
<th>Jenis Kelamin</th>
<th>Status Keluarga</th>
<th>Anak Ke</th>
<th>Jumlah Saudara</th>
<th>Nama Ayah</th>
<th>Nomor Telepon Ayah</th>
<th>Pekerjaan Ayah</th>
<th>Nama Ibu</th>
<th>Nomor Telepon Ibu</th>
<th>Pekerjaan Ibu</th>
<th>Nama Wali</th>
<th>Nomor Telepon Wali</th>
<th>Pekerjaan Wali</th>
<th>Aksi</th>
</tr>
<?php
$query_select = mysqli_query($con, "SELECT * FROM data_siswa");
$no = 1;
while($row = mysqli_fetch_assoc($query_select)){
    ?>
    <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $row['nama'];?></td>
    <td><?php echo $row['nisn'];?></td>
    <td><?php echo $row['tempat'];?><?php echo $row['tanggal_lahir'];?></td>
    <td><?php echo $row['alamat'];?></td>
    <td><?php echo $row['sekolah_asal'];?></td>
    <td><?php echo $row['agama'];?></td>
    <td><?php echo $row['jenis_kelamin'];?></td>
    <td><?php echo $row['status_keluarga'];?></td>
    <td><?php echo $row['anak_ke'];?></td>
    <td><?php echo $row['bersaudara'];?></td>
    <td><?php echo $row['ayah'];?></td>
    <td><?php echo $row['no_telp_ayah'];?></td>
    <td><?php echo $row['pekerjaan_ayah'];?></td>
    <td><?php echo $row['ibu'];?></td>
    <td><?php echo $row['no_telp_ibu'];?></td>
    <td><?php echo $row['pekerjaan_ibu'];?></td>
    <td><?php echo $row['wali'];?></td>
    <td><?php echo $row['no_telp_wali'];?></td>
    <td><?php echo $row['pekerjaan_wali'];?></td>
    
    <td>
    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="proses_delete.php?id=<?php echo $row['id'];?>">Delete</a>
    </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>