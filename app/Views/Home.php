<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    home
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- Bagian header, seperti judul, logo, dan menu navigasi bisa ditempatkan di sini -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">ApaAjaAda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url("/"); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url("/input"); ?>">Input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Pesan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Konten utama dari halaman Anda akan ditempatkan di sini -->
    <div class="container">
      <div class="row">
        <?php
        foreach ($produk as $item) {
          $nama = $item['nama'];
          $harga = $item['harga'];
          $deskripsi = $item['deskripsi'];
        ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1547155011-8f5abb216d6a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="<?php echo $nama; ?> " style="max-width: 100%; max-height: 200px;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nama; ?></h5>
                <p class="card-text">Harga: Rp.<?php echo $harga; ?></p>
                <p class="card-text">Deskripsi: <?php echo $deskripsi; ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </main>

  <footer style="text-align: center; position: relative; bottom: 0; width: 100%;">
    <p>&copy; 2023 ApaAjaAda. Hak Cipta Dilindungi Undang-Undang.</p>
  </footer>
</body>

</html>