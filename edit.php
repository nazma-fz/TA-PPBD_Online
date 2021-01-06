<?php
include "koneksi.php";
$select_data = mysqli_query($con, "SELECT * FROM data_siswa WHERE id = '$_GET[id]'");
    $row = mysqli_fetch_assoc($select_data);
    $nama = $row['nama'];
    $nisn = $row['nisn'];
    $tempat = $row['tempat'];
    $tgl = $row['tanggal_lahir'];
    $explode_tgl = explode('-', $tgl);
    $tahun_lahir = $explode_tgl[0];
    $bulan_lahir = $explode_tgl[1];
    $tanggal = $explode_tgl[2];
    $alamat = $row['alamat'];
    $sekolah_asal = $row['sekolah_asal'];
    $agama = $row['agama'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $status_keluarga = $row['status_keluarga'];
    $anak_ke = $row['anak_ke'];
    $bersaudara = $row['bersaudara'];
    $ayah = $row['ayah'];
    $no_telp_ayah = $row['no_telp_ayah'];
    $pekerjaan_ayah = $row['pekerjaan_ayah'];
    $ibu = $row['ibu'];
    $no_telp_ibu = $row['no_telp_ibu'];
    $pekerjaan_ibu = $row['pekerjaan_ibu'];
    $wali = $row['wali'];
    $no_telp_wali = $row['no_telp_wali'];
    $pekerjaan_wali = $row['pekerjaan_wali'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
</head>
<body>
    <a href="index.php">Data Siswa</a>
    <br>
    <br>
    <form method="POST" action="proses_edit.php">
    <b>Calon Siswa</b><br>
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <b>Nama</b>
    <input type="text" name="nama" placeholder="Nama" value="<?php echo $nama;?>">
    <br>
    <br>
    <b>NISN</b>
    <input type="text" name="nisn" placeholder="NISN" value="<?php echo $nisn;?>">
    <br>
    <br>
    <b>Tempat Tanggal Lahir</b>
    <input type="text" name="tempat" placeholder="Tempat" value="<?php echo $tempat;?>">
    <!-- <input type="text" name="tanggal_lahir" value="">(tt/bb/hh) -->
    <select name="tanggal_lahir">
        <option value="0" >Tanggal lahir</option>
        <?php
            for($i = 1; $i <= 31; $i++){
                echo '<option value="'.$i.'"';
                if($i == $tanggal){
                    echo "selected";
                }
                echo '>'.$i.'</option>';
            }
        ?>  
    </select>
    <select name="bulan_lahir">
        <option value="0" >Bulan lahir</option>
        <?php
            for($i = 1; $i <= 12; $i++){
                echo '<option value="'.$i.'"';
                if($i == $bulan_lahir){
                    echo "selected";
                }
                echo '>'.$i.'</option>';
            }
        ?>
    </select>
    <select name="tahun_lahir">
        <option value="0" >Tahun lahir</option>
        <?php
            for($i = 1990; $i <= date('Y'); $i++){
                echo '<option value="'.$i.'"';
                if($i == $tahun_lahir){
                    echo "selected";
                }
                echo '>'.$i.'</option>';
            }
        ?>
    </select>
    <br>
    <br>
    <b>Alamat</b>
    <input type="text" name="alamat" placeholder="Alamat"value=" <?php echo $alamat;?>">
    <br>
    <br>
    <b>Sekolah Asal</b>
    <input type="text" name="sekolah_asal" placeholder="Sekolah Asal" value="<?php echo $sekolah_asal;?>">
    <br>
    <br>
    <b>Agama</b>
    <br>
    <input type="radio" name="agama" value="Islam"<?php if($agama == "Islam"){echo "checked='checked'";} ?>>Islam
    <input type="radio" name="agama" value="Kristen Protestan"<?php if($agama == "Kristen Protestan"){echo "checked='checked'";} ?>>Kristen Protestan
    <input type="radio" name="agama" value="Katolik"<?php if($agama == "Katolik"){echo "checked='checked'";} ?>>Katolik
    <input type="radio" name="agama" value="Hindu"<?php if($agama == "Hindu"){echo "checked='checked'";} ?>>Hindu
    <input type="radio" name="agama" value="Buddha"<?php if($agama == "Buddha"){echo "checked='checked'";} ?>>Buddha
    <input type="radio" name="agama" value="Khonghucu"<?php if($agama == "Khonghucu"){echo "checked='checked'";} ?>>Khonghucu
    <br>
    <br>
    <b>Jenis Kelamin</b>
    <br>
    <br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"<?php if($jenis_kelamin == "Laki-laki"){echo "checked='checked'";} ?>>Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"<?php if($jenis_kelamin == "Perempuan"){echo "checked='checked'";} ?>>Perempuan
    <br>
    <br>
    <b>Status Keluarga</b>
    <br>
    <br>
    <select name="status_keluarga">
    <option value="AnakKandung"<?php if($status_keluarga == "AnakKandung"){echo "selected";} ?>>Anak Kandung</option>
    <option value="AnakAngkat"<?php if($status_keluarga == "AnakAngkat"){echo "selected";} ?>>Anak Angkat</option>
    <option value="AnakTiri"<?php if($status_keluarga == "AnakTiri"){echo "selected";} ?>>Anak Tiri</option>
    </select>
    <br>
    <br>
    <b>Anak Ke</b>
    <input type="text" name="anak_ke" placeholder="Anak ke" value="<?php echo $anak_ke;?>">
    <b>Dari<b>
    <input type="text" name="bersaudara" placeholder="Berapa Bersaudara"value="<?php echo $bersaudara;?>">
    <br>
    <br>
    <b>Ayah</b>
    <br>
    <b>Nama Ayah</b>
    <input type="text" name="ayah" placeholder="Nama Ayah" value="<?php echo $ayah;?>">
    <br>
    <br>
    <b>Nomor Telepon</b>
    <input type="text" name="no_telp_ayah" placeholder="ex.0822901xxxxx" value="<?php echo $no_telp_ayah;?>">
    <br>
    <br>
    <b>Pekerjaan</b>
    <input type="text" name="pekerjaan_ayah" placeholder="ex.Petani" value="<?php echo $pekerjaan_ayah;?>">
    <br>
    <br>
    <b>Ibu</b>
    <br>
    <b>Nama Ibu</b>
    <input type="text" name="ibu" placeholder="Nama ibu" value="<?php echo $ibu;?>">
    <br>
    <br>
    <b>Nomor Telepon</b>
    <input type="text" name="no_telp_ibu" placeholder="ex.0822901xxxxx"value="<?php echo $no_telp_ibu;?>">
    <br>
    <br>
    <b>Pekerjaan</b>
    <input type="text" name="pekerjaan_ibu"placeholder="ex.Petani"value="<?php echo $pekerjaan_ibu;?>">
    <br>
    <br>
    <b>Wali(optional)</b>
    <br>
    <b>Nama Wali</b>
    <input type="text" name="wali" placeholder="Nama wali"value="<?php echo $wali;?>">
    <br>
    <br>
    <b>Nomor Telepon</b>
    <input type="text" name="no_telp_wali" placeholder="ex.0822901xxxxx"value="<?php echo $no_telp_wali;?>">
    <br>
    <br>
    <b>Pekerjaan</b>
    <input type="text" name="pekerjaan_wali"placeholder="ex.Petani"value="<?php echo $pekerjaan_wali;?>">
    <br>
    <br>
    <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>