<?php include 'atas.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja Online</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('assets/img/bg image.jpg');
      background-size: cover;
      color: black;
    }
    .form-container {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .btn-submit {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-submit:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="form-container">
          <h2 class="text-center mb-4">FORM BELANJA ONLINE</h2>
          <h4 class="text-center mb-4">Rzaa</h4>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
              <label for="customer">Customer:</label>
              <input type="text" class="form-control" id="customer" name="customer">
            </div>
            <div class="form-group">
              <label>Produk Pilihan:</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="produk" id="produk1" value="TV">
                <label class="form-check-label" for="produk1">TV</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="produk" id="produk2" value="Kulkas">
                <label class="form-check-label" for="produk2">Kulkas</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="produk" id="produk3" value="Mesin Cuci">
                <label class="form-check-label" for="produk3">Mesin Cuci</label>
              </div>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah Beli:</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
            <button type="submit" class="btn btn-primary btn-submit btn-block" name="proses">Simpan</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-6">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $customer = $_POST["customer"];
          $produk = $_POST["produk"];
          $jumlah = $_POST["jumlah"];
          $harga_produk = 0;
          
          if ($produk == "TV") {
            $harga_produk = 10000;
          } elseif ($produk == "Kulkas") {
            $harga_produk = 15000;
          } elseif ($produk == "Mesin Cuci") {
            $harga_produk = 20000;
          }

          $total_harga = $harga_produk * $jumlah;
          
          echo "<div class='form-container'>";
          echo "<h2 class='text-center mb-4'>Hasil:</h2>";
          echo "<p><strong>Customer:</strong> $customer</p>";
          echo "<p><strong>Produk Pilihan:</strong> $produk</p>";
          echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
          echo "<p><strong>Total Belanja:</strong> Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
          echo "</div>";
        } else {
          echo "<p class='text-center'>Silakan isi formulir di atas.</p>";
        }
        ?>
      </div>
    </div>
  </div>
  <?php include 'bawah.php'; ?>
</body>
</html>