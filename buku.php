<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Buku Mel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <h1 class="mb-4">Data Buku Mel</h1>
    <a href="add_book.php" class="btn btn-primary mb-3">Tambah Buku</a>
    
    <table class="table table-striped table-bordered align-middle">
      <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Penulis</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sql = "SELECT * FROM buku ORDER BY id_buku DESC";
            $result = $mysqli->query($sql);
            $no = 1;
        ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $row['judul']; ?></td>
              <td><?php echo $row['penulis']; ?></td>
              <td><?php echo $row['penerbit']; ?></td>
              <td><?php echo $row['tahun_terbit']; ?></td>
              <td><?php echo $row['stok']; ?></td>
              <td>
                <button class="btn btn-success btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
            <?php $no++; ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>