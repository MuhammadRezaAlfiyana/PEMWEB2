<?php include 'atas.php'; ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Total Harga</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Week 2</li>
                <li class="breadcrumb-item"><a href="belanja.php">belanja Online</a></li>
                <li class="breadcrumb-item active">Total Harga</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                <?php
                // tangkap input form
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                // array harga produk

                $harga = [
                    'TV' => 4200000,
                    'Kulkas' => 3100000,
                    'Mesin Cuci' => 3000000
                ];

                // hitung total harga (jumlah * harga produk)
                $total = $jumlah * $harga[$produk];

                // format rupiah
                $total = number_format($total);

                echo "Nama Customer: $customer";
                echo "<br> Produk: $produk";
                echo "<br> Jumlah Beli: $jumlah";
                echo "<br> Total Belanja: Rp $total";
                ?>
                </div>
            </div>
        </div>
    </main>
    <?php include 'bawah.php'; ?>
</div>

</html>
