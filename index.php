<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome (untuk ikon, opsional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Data Hewan</title>
  </head>
  <body class="container mt-5">

    <h1 class="mb-4">Data Hewan</h1>
    <a href="tambah.php" class="btn btn-success mb-3">Tambah</a>
    
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Hewan</th>
          <th>Jenis Hewan</th>
          <th>Asal</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include "koneksi.php";
          $sqlt = mysqli_query($koneksi, "SELECT * FROM db_bale");
          $no = 1;

          while($dat = mysqli_fetch_array($sqlt)) {
        ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $dat['nama_hewan']; ?></td>
          <td><?= $dat['jenis_hewan']; ?></td>
          <td><?= $dat['asal']; ?></td>
          <td><?= $dat['jumlah']; ?></td>
          <td>
            <!-- Tombol Edit -->
               <a href="edit.php?id=<?= $dat['id_hewan'] ?>" class="btn btn-warning btn-sm">
   <i class="fas fa-edit"></i> Edit
</a> 
                            
             <!-- Tombol Hapus -->
            <a href="hapus.php?id=<?= $dat['id_hewan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
              <i class="fas fa-trash-alt"></i> Hapus
            </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
