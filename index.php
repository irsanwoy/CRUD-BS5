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
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> CRUD-BS5 </a>
      </div>
    </nav>
    <!-- judul -->
    <div class="container">
      <h1 class="mt-4">Data Siswa</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data siswa yang telah disimpan di database.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">Create Update Delete</cite>
        </figcaption>
      </figure>
      <a href="kelola.php" type="button" class="btn btn-primary">Tambah Data</a>
      <div class="table-responsive">
        <table class="table align-middle table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>NISN</th>
              <th>Nama Siswa</th>
              <th>Jenis Kelamin</th>
              <th>Foto Siswa</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>112233</td>
              <td>Alexander Kurniawan</td>
              <td>Laki-laki</td>
              <td>
                <img src="img/img1.jpg" style="width: 150px" />
              </td>
              <td>Jl. Kusuma Negara</td>
              <td>
                <a href="kelola.php?ubah=1 type="button" class="btn btn-success btn-sm">
                  Ubah
                </a>
                <a href="kelola.php" type="button" class="btn btn-danger btn-sm">
                  Hapus
                </a>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>112234</td>
              <td>Susanti</td>
              <td>Perempuan</td>
              <td>
                <img src="img/img2.jpg" style="width: 150px" />
              </td>
              <td>Jl. Kusuma Negara</td>
              <td>
                <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
                  Ubah
                </a>
                <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm">
                  Hapus
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
