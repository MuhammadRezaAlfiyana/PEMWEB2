<?php include 'atas.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Form Nilai</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 2</a></li>
                <li class="breadcrumb-item active">Form Nilai</li>
            </ol>
            <div class="container">
            <form method="POST" action="hasil.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan nama anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-dasar Pemrograman</option>
        <option value="PW">Pemrograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai uts</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Masukan nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai uas</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Masukan nilai uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">Nilai praktikum</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="Masukan nilai praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="data berhasil disimpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
        </div>
    </main>
<?php include 'bawah.php'; ?>