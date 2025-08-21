<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama_hewan'];
  $jenis = $_POST['jenis_hewan'];
  $asal = $_POST['asal'];
  $jumlah = $_POST['jumlah'];

  $query = "INSERT INTO db_bale (nama_hewan, jenis_hewan, asal, jumlah)
            VALUES ('$nama', '$jenis', '$asal', '$jumlah')";

  if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit();  
  } else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Hewan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Tambah Data Hewan</h2>
  <form method="post" action="">
    <div class="mb-3">
      <label for="nama_hewan" class="form-label">Nama Hewan</label>
      <input type="text" name="nama_hewan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="jenis_hewan" class="form-label">Jenis Hewan</label>
      <input type="text" name="jenis_hewan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="asal" class="form-label">Asal</label>
      <input type="text" name="asal" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" name="jumlah" class="form-control" required>
    </div>
    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</body>
</html>
