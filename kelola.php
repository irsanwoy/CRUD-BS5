<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>belajar_crud</title>
  </head>

  <body>
    <!-- nav -->
    <nav class="navbar navbar-light bg-light mb-5 ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> CRUD-BS5 </a>
      </div>
    </nav>
    <div class="container">
     <form method="POST" action="proses.php">
     <div class="mb-3 row">
        <label for="nisn" class="col-sm-2 col-form-label"
          >NISN</label
        >
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nisn" placeholder="Ex : 112234" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">
          Nama Siswa
        </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Ex : Alexander" />
        </div>
      </div>
      <div class="mb-3 row mt-3">
        <label for="jkel" class="col-sm-2 col-form-label">
          Jenis Kelamin
        </label>
        <div class="col-sm-10">
          <select id="jkel" class="form-select">
            <option selected>Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto Siswa</label>
        <input class="form-control" type="file" id="foto">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat lengkap</label>
        <textarea class="form-control" id="alamat" rows="3"></textarea>
      </div>
    <div class="mb-3 row mt-4">
      <?php if(isset($_GET['ubah'])){ ?>
      <div class="col">
        <button type="submit" name="aksi" value="edit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      <?php } else { ?>
      <div class="col-3">
        <button type="submit" name="aksi" value="add" class="btn btn-primary">Tambahkan</button>
      </div>
      <?php } ?>
      <div class="col3 mt-3">
        <a href="index.php" class="btn btn-danger">Batal</a>
      </div>
    </div>
     </form>
    </div>
  </body>
</html>
