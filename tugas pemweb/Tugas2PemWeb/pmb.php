<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Pendaftaran</a>

          </div>
        </div>
      </div>
    </nav>
  
    <div class="container">
      <form action="" method="POST">
      <h3 class="mt-5 text-center">PENDAFTARAN ONLINE</h3>
      <div class="row">
        <div class="col-md-6">
          <label>Jalur penerimaan mahasiswa baru</label>
          <select class="form-select">
            <option selected>PIlih jalur penerimaan</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-md-6">
          <label>Nama lengkap</label>
          <input name="name" placeholder="Nama lengkap" type="text" class="form-control">
        </div>
      </div>
      <!-- akhir row 1 -->
      <div class="row mt-3">
        <div class="col-md-6">
          <label>Tempat Tanggal lahir</label>
          <input placeholder="TTL" type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Nomor Induk Kependudukan</label>
          <input nik="Nik" placeholder="Nik" type="text" class="form-control">
        </div>
      </div>
      <!-- akhir row 2 -->
      <div class="row mt-3">
        <div class="col-md-4">
          <label>Jenis kelamin</label>
          <select class="form-select">
            <option selected>PIlih jenis kelamin</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
        <div class="col-md-4">
          <label>Agama</label>
          <select class="form-select">
            <option selected>Pilih Agama</option>
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Hindu</option>
          </select>
        </div>
        <div class="col-md-4">
          <label>Status</label>
          <select name="Status" class="form-select">
            <option selected>Pilih Status</option>
            <option value="1">Belum Menikah</option>
            <option value="2">Menikah</option>
          </select>
        </div>
      </div>    
      <!-- AKHIR ROW 3 -->
      <div class="row mt-3">
        <div class="col-md-12">
          <label>Alamat</label>
          <textarea placeholder="alamat" class="form-control"></textarea>
        </div>
      </div>
      <!-- AKHIR DARI ROW 4 -->
      <div class="row mt-3">
        <div class="col-md-4">
          <label>Kode Pos</label>
          <input placeholder="Kode Pos" type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label>Email</label>
          <input name="email" placeholder="Email" type="email" class="form-control">
        </div>
        <div class="col-md-4">
          <label>Nomor handphone</label>
          <input name="nomor handphone" placeholder="Nomor handphone" type="text" class="form-control">
        </div>
      </div>
      <!-- AKHIR DARI ROW 5 -->
      <h3 class="mt-5 text-center">DATA SEKOLAH ASAL CALON MAHASISWA</h3>
      <div class="row mt-3">
        <div class="col-md-6">
          <label>Asal Sekolah</label>
          <input name="asal sekolah" placeholder="Asal Sekolah" type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Tahun Lulus</label>
          <input name="Tahun Lulus" placeholder="Tahun Lulus" type="text" class="form-control">
        </div>
      </div>
      <!-- AKHIR DARI ROW 5 -->
      <h3 class="mt-5 text-center">DATA ORANG TUA CALON MAHASISWA</h3>
      <div class="row mt-3">
        <div class="col-md-6">
          <label>Nama Ayah</label>
          <input name="Nama Ayah" placeholder="Nama Ayah" type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Nama Ibu</label>
          <input name="Nama Ibu" placeholder="Nama Ibu" type="text" class="form-control">
        </div>
      </div>
      <!-- akhir dari row 6 -->
      <div class="row mt-3">
        <div class="col-md-12">
          <label>Alamat</label>
          <textarea placeholder="Alamat" class="form-control"></textarea>
        </div>
      </div>
      <!-- akhir dari row 7 -->
      <div class="row mt-3">
        <div class="col-md-6 mt-4 mb-2">
          <label for="">Kode Pos <span class="text-danger">*</span></label>
          <input type="text" class="form-control mt-2" name="kodeposortu" placeholder="Kode Pos">
        </div>
        <div class="col-md-6 mt-4 mb-2">
          <label for="">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control mt-2" name="emailortu" placeholder="email address">
        </div>
      </div>
      <!-- akhir dari row 8 -->
      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pendidikan Terakhir Ayah <span class="text-danger">*</span></label>
          <select name="pendidikanterakhirayah" class="form-select mt-2">
            <option selected="">Pilih</option>
            <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
            <option value="B - Tamat SD">B - Tamat SD</option>
            <option value="C - Tamat SMP">C - Tamat SMP</option>
            <option value="D - Tamat SMA">D - Tamat SMA</option>
            <option value="E - Diploma (D1/D2)">E - Diploma (D1/D2)</option>
            <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
            <option value="G - Sarjana (D4/S1)">G - Sarjana (D4/S1)</option>
            <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
            <option value="I - Doktoral (S3)">I - Doktoral (S3)</option>
          </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pendidikan Terakhir Ibu <span class="text-danger">*</span></label>
          <select name="pendidikanterakhiribu" class="form-select mt-2">
            <option selected="">Pilih</option>
            <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
            <option value="B - Tamat SD">B - Tamat SD</option>
            <option value="C - Tamat SMP">C - Tamat SMP</option>
            <option value="D - Tamat SMA">D - Tamat SMA</option>
            <option value="E - Diploma (D1/D2)">E - Diploma (D1/D2)</option>
            <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
            <option value="G - Sarjana (D4/S1)">G - Sarjana (D4/S1)</option>
            <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
            <option value="I - Doktoral (S3)">I - Doktoral (S3)</option>
          </select>
        </div>
      </div>
      <!-- akhir dari row 9 -->
      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Status Ayah <span class="text-danger">*</span></label>
          <select name="statusayah" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Status Ibu <span class="text-danger">*</span></label>
          <select name="statusibu" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pekerjaan Ayah <span class="text-danger">*</span></label>
          <input type="text" name="pekerjaanayah" class="form-control mt-2" placeholder="pekerjaan ayah">
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pekerjaan Ibu <span class="text-danger">*</span></label>
          <input type="text" name="pekerjaanibu" class="form-control mt-2" placeholder="pekerjaan ibu">
        </div>
      </div>

      <h3 class="mt-5 border-bottom border-2 pb-3 text-center">Peminatan Program Studi</h3>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pilihan Program Studi 1 <span class="text-danger">*</span></label>
          <select name="prodi1" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Komunikasi">Komunikasi</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
        </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pilihan Program Studi 2 <span class="text-danger">*</span></label>
          <select name="prodi2" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Komunikasi">Komunikasi</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
        </select>
        </div>
        <div class="col-12 mt-3 mb-2">
          <label for="">Sumber Informasi</label>
          <div class="form-check form-check-inline mt-2">
            <select name="info" id="" class="form-select mt-2">
              <option selected>Pilih Sumber</option>
              <option value="Internet">Internet</option>
              <option value="Majalah">Majalah</option>
              <option value="Brosur">Brosur</option>
              <option value="Radio">Radio</option>
              <option value="Spanduk">Spanduk</option>
              <option value="Orang Tua">Orang Tua</option>
              <option value="Teman">Teman</option>
              <option value="Pameran">Pameran</option>
              <option value="Pihak Sekolah">Pihak Sekolah</option>
              <option value="Lainnya">Lainnya ...</option>
            </select>
          </div>
        </div>

      <h3 class="mt-5 border-bottom border-2 pb-3 text-center">Ujian Saringan Masuk</h3>

      <div class="row mt-4">
        <div class="col-12 mb-2">
          <label for="">Pilihan Gelombang <span class="text-danger">*</span></label>
          <select name="gelombang" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Gelombang a">Gelombang 1</option>
            <option value="Gelombang b">Gelombang 2</option>
            <option value="Gelombang c">Gelombang 3</option>
            <option value="Gelombang d">Gelombang 4</option>
        </select>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
          <button class="btn-outline-dark">Submit</button>
        </div>
      </div>
    <!-- AKHIR DARI CONTAINER JANGAN DIPINDAHIN -->  
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>