<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html style="background-color : cyan">
<head>
<title>Input Data Siswa Baru</title>
</head>
<body>
    <a href="index.php">Data Siswa</a>
    <br>
    <br>
    <form method="POST" action="proses_data.php">
    <b>Calon Siswa</b><br>
    <b>Nama</b>
    <input type="text" name="nama" placeholder="Nama">
    <br>
    <br>
    <b>NISN</b>
    <input type="text" name="nisn" placeholder="NISN">
    <br>
    <br>
    <b>Tempat Tanggal Lahir</b>
    <input type="text" name="tempat" placeholder="Tempat">
    <!-- <input type="text" name="tanggal_lahir" value="">(tt/bb/hh) -->
    <select name="tanggal_lahir">
        <option value="0" >Tanggal lahir</option>
        <?php
            for($i = 1; $i <= 31; $i++){
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        ?>
    </select>
    <select name="bulan_lahir">
        <option value="0" >Bulan lahir</option>
        <?php
            for($i = 1; $i <= 12; $i++){
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        ?>
    </select>
    <select name="tahun_lahir">
        <option value="0" >Tahun lahir</option>
        <?php
            for($i = 1990; $i <= date('Y'); $i++){
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        ?>
    </select>
    <br>
    <br>
    <b>Alamat</b>
    <input type="text" name="alamat" placeholder="Alamat">
    <br>
    <br>
    <b>Sekolah Asal</b>
    <input type="text" name="sekolah_asal" placeholder="Sekolah Asal">
    <br>
    <br>
    <b>Agama</b>
    <br>
    <input type="radio" name="agama" value="Islam">Islam
    <input type="radio" name="agama" value="Kristen Protestan">Kristen Protestan
    <input type="radio" name="agama" value="Katolik">Katolik
    <input type="radio" name="agama" value="Hindu">Hindu
    <input type="radio" name="agama" value="Buddha">Buddha
    <input type="radio" name="agama" value="Khonghucu">Khonghucu
    <br>
    <br>
    <b>Jenis Kelamin</b>
    <br>
    <br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
    <br>
    <br>
    <b>Status Keluarga</b>
    <br>
    <br>
    <select name="status_keluarga">
    <option value="AnakKandung">Anak Kandung</option>
    <option value="AnakAngkat">Anak Angkat</option>
    <option value="AnakTiri">Anak Tiri</option>
    </select>
    <br>
    <br>
    <b>Anak Ke</b>
    <input type="text" name="anak_ke" placeholder="Anak ke">
    <b>Dari<b>
    <input type="text" name="bersaudara" placeholder="Berapa Bersaudara">
    <br>
    <br>
    <b>Ayah</b>
    <br>
    <b>Nama Ayah</b>
    <input type="text" name="ayah" placeholder="Nama Ayah">
    <br>
    <br>
    <b>Nomor Telepon</b>
    <input type="text" name="no_telp_ayah" placeholder="ex.0822901xxxxx">
    <br>
    <br>
    <b>Pekerjaan</b>
    <input type="text" name="pekerjaan_ayah" placeholder="ex.Petani">
    <br>
    <br>
    <b>Ibu</b>
    <br>
    <b>Nama Ibu</b>
    <input type="text" name="ibu" placeholder="Nama ibu">
    <br>
    <br>
    <b>Nomor Telepon</b>
    <input type="text" name="no_telp_ibu" placeholder="ex.0822901xxxxx">
    <br>
    <br>
    <b>Pekerjaan</b>
    <input type="text" name="pekerjaan_ibu"placeholder="ex.Petani">
    <br>
    <br>
    <b>Wali(optional)</b>
    <br>
    <b>Nama Wali</b>
    <input type="text" name="wali" placeholder="Nama wali">
    <br>
    <br>
    <b>Nomor Telepon</b>
    <input type="text" name="no_telp_wali" placeholder="ex.0822901xxxxx">
    <br>
    <br>
    <b>Pekerjaan</b>
    <input type="text" name="pekerjaan_wali"placeholder="ex.Petani">
    <br>
    <br>
    <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>