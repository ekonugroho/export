<style> .str{ mso-number-format:\@; } </style>
<h2>CALON MAHASISWA</h2>
<table border="1">
    <tr><th>NO</th><th>NOMOR PRODI</th><th>NOMOR PENDAFTAR</th><th>NAMA</th><th>NO KK</th><th>NIK</th>
    <th>NISN</th>
    <th>TEMPAT LAHIR MAHASISWA</th>
    <th>TANGGAL LAHIR MAHASISWA</th>
    <th>JENIS KELAMIN</th>
    <th>AGAMA</th>
    <th>ALAMAT RUMAH</th>
    <th>DUSUN</th>
    <th>RT/RW</th>
    <th>DESA</th>
    <th>KECAMATAN</th>
    <th>KABUPATEN</th>
    <th>PROVINSI</th>
    <th>KODE POS</th>
    <th>EMAIL AKTIF</th>
    <th>NOMOR HP MAHASISWA</th>
    <th>NOMOR HP ORANGTUA</th>
    <th>PIHAK YANG BISA DIHUBUNGI</th>

    <th>NOMOR IJAZAH</th>
    <th>NOMOR SKHUN</th>
    <th>ASAL SEKOLAH</th>
    <th>ALAMAT SEKOLAH</th>
    <th>JURUSAN</th>
    <th>TAHUN LULUS</th> 

    <th>NAMA AYAH KANDUNG</th> 
    <th>TEMPAT LAHIR AYAH</th> 
    <th>TANGGAL LAHIR AYAH</th> 
    <th>NAMA IBU KANDUNG</th> 
    <th>TEMPAT LAHIR IBU</th>
    <th>TANGGAL LAHIR IBU</th> 
    <th>PENDIDIKAN TERAKHIR AYAH</th>
    <th>PENDIDIKAN TERAKHIR IBU</th>
    <th>PEKERJAAN AYAH</th>
    <th>PEKERJAAN IBU</th>
    <th>NOMER HP AYAH/IBU</th>
    <th>PENGHASILAN AYAH</th>
    <th>PENGHASILAN IBU</th>
       
    </tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from data_pendaftar");
    $no=1;
    foreach ($mahasiswa as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['pemilihan_prodi']."</td>
            <td>".$row['id_pendaftaran_jalur_seleksi']."</td>
            <td>".$row['nama_calon_mahasiswa']."</td>
            <td>".$row['nomer_kartu_keluarga']."</td>
            <td class='str'>".$row['nomer_induk_kependudukan']."</td>
            <td>".$row['nomor_induk_siswa_nasional']."</td>
            <td>".$row['tempat_lahir_mahasiswa']."</td>
            <td>".$row['tanggal_lahir_mahasiswa']."</td>
            <td>".$row['jenis_kelamin']."</td>
            <td>".$row['agama']."</td>
            <td>".$row['alamat_rumah']."</td>
            <td>".$row['dusun']."</td>
            <td>".$row['rt_rw']."</td>
            <td>".$row['desa']."</td>
            <td>".$row['kecamatan']."</td>
            <td>".$row['kabupaten']."</td>
            <td>".$row['provinsi']."</td>
            <td>".$row['kodepos']."</td>
            <td>".$row['email_aktif']."</td>
            <td>".$row['nomor_hp']."</td>
            <td>".$row['nomor_hp_wali']."</td>
            <td>".$row['bs_dihubungi']."</td>
            <td>".$row['nomor_ijazah']."</td>
            <td>".$row['nomor_skhun']."</td>
            <td>".$row['asal_sekolah']."</td>
            <td>".$row['alamat_sekolah']."</td>
            <td>".$row['jurusan']."</td>
            <td>".$row['tahun_lulus']."</td>
            <td>".$row['nama_ayah_kandung']."</td>
            <td>".$row['tempat_lahir_ayah']."</td>
            <td>".$row['tanggal_lahir_ayah']."</td>
            <td>".$row['nama_ibu_kandung']."</td>
            <td>".$row['tempat_lahir_ibu']."</td>
            <td>".$row['tanggal_lahir_ibu']."</td>
            <td>".$row['pdd_ayah']."</td>
            <td>".$row['pdd_ibu']."</td>
            <td>".$row['pkj_ayah']."</td>
            <td>".$row['pkj_ibu']."</td>
            <td>".$row['hp_ayahibu']."</td>
            <td>".$row['gaji_ayah']."</td>
            <td>".$row['gaji_ibu']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>
