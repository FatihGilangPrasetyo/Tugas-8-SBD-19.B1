<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_8</title>
</head>
<body>
   <div class="container">
      <center><h1>Sistem Perpustakaan</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM anggota';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Anggota</h3>
         <table>
          <tr>
            <th>id_anggota</th>
            <th>kode_anggota</th>
            <th>nama_anggota</th>
            <th>jk_anggota</th>
            <th>jurusan_anggota</th>
            <th>no_telp_anggota</th>
            <th>alamat_anggota</th>


         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_anggota'];?></td>
               <td><?= $row['kode_anggota'];?></td>
               <td><?= $row['nama_anggota'];?></td>
               <td><?= $row['jk_anggota'];?></td>
               <td><?= $row['jurusan_anggota'];?></td>
               <td><?= $row['no_telp_anggota'];?></td>
               <td><?= $row['alamat_anggota'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM buku';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel Buku</h3>
         <table>
          <tr>
            <th>id_buku</th>
            <th>kode_buku</th>
            <th>judul_buku</th>
            <th>penulis_buku</th>
            <th>penerbit_buku</th>
            <th>tahun_penerbit</th>
            <th>stok</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_buku'];?></td>
               <td><?= $row['kode_buku'];?></td>
               <td><?= $row['judul_buku'];?></td>
               <td><?= $row['penulis_buku'];?></td>
               <td><?= $row['penerbit_buku'];?></td>
               <td><?= $row['tahun_penerbit'];?></td>
               <td><?= $row['stok'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM peminjaman';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Peminjaman</h3>
         <table>
          <tr>
            <th>id_peminjaman</th>
            <th>tanggal_pinjam</th>
            <th>tanggal_kembali</th>
            <th>id_buku</th>
            <th>id_anggota</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_peminjaman'];?></td>
               <td><?= $row['tanggal_pinjam'];?></td>
               <td><?= $row['tanggal_kembali'];?></td>
               <td><?= $row['id_buku'];?></td>
               <td><?= $row['id_anggota'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
        
      </div>
   </div>
</body>
</html>
</html>