<?php include 'atas.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrasi Asdos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 3</a></li>
                <li class="breadcrumb-item active">Registrasi Asdos</li>
            </ol>
            <h4 style="text-align : center">Form Registrasi Asdos</h4>
    <div class="container">
    <form method="POST" action="hasil_daftar.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan NIM anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_1" class="custom-control-label">Laki-Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Prodi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill[]_2" class="custom-control-label">JAVASCRIPT</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="rwd"> 
        <label for="skill[]_3" class="custom-control-label">RWD</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_5" class="custom-control-label">JAVA</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="phyton"> 
        <label for="skill[]_6" class="custom-control-label">PHYTON</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Bogor</option>
        <option value="depok">Depok</option>
        <option value="temanggung">Jakarta</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
    </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <?php include 'bawah.php'; ?>