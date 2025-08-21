<?php 
include 'koneksi.php'; 

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit();
}

$data = $koneksi->query("SELECT * FROM db_bale WHERE id_hewan=$id")->fetch_assoc();

if (!$data) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['simpan'])) {
    $nama_hewan = $koneksi->real_escape_string($_POST['nama_hewan']);
    $jenis_hewan = $koneksi->real_escape_string($_POST['jenis_hewan']);
    $asal = $koneksi->real_escape_string($_POST['asal']);
    $jumlah = (int) $_POST['jumlah'];

    $query = "UPDATE db_bale SET 
                nama_hewan='$nama_hewan', 
                jenis_hewan='$jenis_hewan', 
                asal='$asal',
                jumlah=$jumlah
              WHERE id_hewan=$id";

    if ($koneksi->query($query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger mt-3'>Gagal update: " . $koneksi->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Data Hewan</h2>
    <form method="post">
        <div class="mb-3">
          <label for="nama_hewan" class="form-label">Nama Hewan</label>
          <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" required value="<?= htmlspecialchars($data['nama_hewan']) ?>">
        </div>
        <div class="mb-3">
          <label for="jenis_hewan" class="form-label">Jenis Hewan</label>
          <input type="text" name="jenis_hewan" id="jenis_hewan" class="form-control" required value="<?= htmlspecialchars($data['jenis_hewan']) ?>">
        </div>
        <div class="mb-3">
          <label for="asal" class="form-label">Asal</label>
          <input type="text" name="asal" id="asal" class="form-control" required value="<?= htmlspecialchars($data['asal']) ?>">
        </div>
        <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input type="number" name="jumlah" id="jumlah" class="form-control" required value="<?= htmlspecialchars($data['jumlah']) ?>">
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
