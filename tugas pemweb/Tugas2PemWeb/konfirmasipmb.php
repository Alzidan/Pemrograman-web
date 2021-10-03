<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title></title>
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
      <form action="konfirmasipmb.php" method="POST">
      <h3 class="mt-5 text-start">PENDAFTARAN ONLINE</h3>
      <div class="row">
        <div class="col-md-12">
          <label>Jalur penerimaan mahasiswa baru</label>
          <select class="form-select" name="jalur">
            <option selected>PIlih jalur penerimaan</option>
            <option value="T2 2022/2023 RATA RATA RAPOR">T2 2022/2023 RATA RATA RAPOR</option>
            <option value="T2 2022/2023 UJIAN SARING MASUK">T2 2022/2023 UJIAN SARING MASUK</option>
            <option value="T2 2022/2023 PERINGKAT KELAS">T2 2022/2023 PERINGKAT KELAS</option>
          </select>
        </div>
        <div class="col-md-12">
          <label>Nama lengkap</label>
          <input name="name" placeholder="Nama lengkap" type="text" class="form-control">
        </div>
      </div>
      <!-- akhir row 1 -->
      <div class="row mt-3">
        <div class="col-md-6">
          <label>Tempat Tanggal lahir</label>
          <input name="ttl" placeholder="TTL" type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Nomor Induk Kependudukan</label>
          <input name="Nik" placeholder="Nik" type="text" class="form-control">
        </div>
      </div>
      <!-- akhir row 2 -->
      <div class="row mt-3">
        <div class="col-md-4">
          <label>Jenis kelamin</label>
          <select class="form-select" name="jeniskelamin">
            <option selected>Pilih jenis kelamin</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
        <div class="col-md-4">
          <label>Agama</label>
          <select class="form-select" name="agama">
            <option selected>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
          </select>
        </div>
        <div class="col-md-4">
          <label>Status</label>
          <select name="Status" class="form-select">
            <option selected>Pilih Status</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
          </select>
        </div>
      </div>    
      <!-- AKHIR ROW 3 -->
      <div class="row mt-3">
        <div class="col-md-12">
          <label>Alamat</label>
          <textarea name="alamat" placeholder="alamat" class="form-control"></textarea>
        </div>
      </div>
      <!-- AKHIR DARI ROW 4 -->
      <div class="row mt-3">
        <div class="col-md-12">
          <label>kodepos</label>
          <input name="kodepos" placeholder="Kode Pos" type="text" class="form-control">
        </div>
        <div class="col-md-12">
          <label>Email</label>
          <input name="email" placeholder="Email" type="email" class="form-control">
        </div>
        <div class="col-md-12">
          <label>Nomor_handphone</label>
          <input name="nomor_handphone" placeholder="Nomor handphone" type="text" class="form-control">
        </div>
      </div>
      <!-- AKHIR DARI ROW 5 -->
      <h3 class="mt-5 text-start">DATA SEKOLAH ASAL CALON MAHASISWA</h3>
      <div class="row mt-3">
        <div class="col-md-12">
          <label>Asal_Sekolah</label>
          <input name="asal_sekolah" placeholder="Asal Sekolah" type="text" class="form-control">
        </div>
        <div class="col-md-12">
          <label>Tahun_Lulus</label>
          <input name="Tahun_Lulus" placeholder="Tahun Lulus" type="text" class="form-control">
        </div>
      </div>
      <!-- AKHIR DARI ROW 5 -->
      <h3 class="mt-5 text-start">DATA ORANG TUA CALON MAHASISWA</h3>
      <div class="row mt-3">
        <div class="col-md-12">
          <label>Nama_Ayah</label>
          <input name="Nama_Ayah" placeholder="Nama Ayah" type="text" class="form-control">
        </div>
        <div class="col-md-12">
          <label>Nama_Ibu</label>
          <input name="Nama_Ibu" placeholder="Nama Ibu" type="text" class="form-control">
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
        <div class="col-md-12 mt-1 mb-2">
          <label for="">kodepos</label>
          <input name="kodepos" type="text" class="form-control mt-2" name="kodeposortu" placeholder="Kode Pos">
        </div>
        <div class="col-md-12 mt-2 mb-2">
          <label for="">Email</label>
          <input type="email" class="form-control mt-2" name="emailortu" placeholder="Email">
        </div>
      </div>
      <!-- akhir dari row 8 -->
      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pendidikan_Terakhir_Ayah</label>
          <select name="pendidikanterakhirayah" class="form-select mt-2">
            <option selected="">Pilih</option>
            <option value="tidak tamat">A - Tidak Tamat SD</option>
            <option value="Tamat SD"  >B - Tamat SD</option>
            <option value="Tamat SMP" >C - Tamat SMP</option>
            <option value="Tamat SMA" >D - Tamat SMA</option>
            <option value="Diploma  " >E - Diploma (D1/D2)</option>
            <option value="Sarjana   ">F - Sarjana (D3)</option>
            <option value="Sarjana      ">G - Sarjana (D4/S1)</option>
            <option value="Pascasarjana ">H - Pascasarjana (S2)</option>
            <option value="Doktoral     ">I - Doktoral (S3)</option>
          </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pendidikan_Terakhir_Ibu</label>
          <select name="pendidikanterakhiribu" class="form-select mt-2">
            <option selected="">Pilih</option>
            <option value="Tidak Tamat" >A - Tidak Tamat SD</option>
            <option value="Tamat SD"    >B - Tamat SD</option>
            <option value="Tamat SMP"   >C - Tamat SMP</option>
            <option value="Tamat SMA"   >D - Tamat SMA</option>
            <option value="Diploma"     >E - Diploma (D1/D2)</option>
            <option value="Sarjana"     >F - Sarjana (D3)</option>
            <option value="Sarjana"     >G - Sarjana (D4/S1)</option>
            <option value="Pascasarjana">H - Pascasarjana (S2)</option>
            <option value="Doktoral"    >I - Doktoral (S3)</option>
          </select>
        </div>
      </div>
      <!-- akhir dari row 9 -->
      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">StatusAyah</label>
          <select name="statusayah" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">StatusIbu</label>
          <select name="statusibu" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">PekerjaanAyah</label>
          <input type="text" name="pekerjaanayah" class="form-control mt-2" placeholder="pekerjaan ayah">
        </div>
        <div class="col-md-6 mb-2">
          <label for="">PekerjaanIbu</label>
          <input type="text" name="pekerjaanibu" class="form-control mt-2" placeholder="pekerjaan ibu">
        </div>
      </div>

      <h3 class="mt-5 border-bottom border-2 pb-3 text-start">Peminatan Program Studi</h3>

      <div class="row mt-4">
        <div class="col-md-12 mb-2">
          <label for="">PilihanProgramStudi1</label>
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
        <div class="col-md-12 mb-2">
          <label for="">PilihanProgramStudi2</label>
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
          <label for="">SumberInformasi</label>
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
          <label for="">PilihanGelombang</label>
          <select name="gelombang" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Gelombang 1">Gelombang 1</option>
            <option value="Gelombang 2">Gelombang 2</option>
            <option value="Gelombang 3">Gelombang 3</option>
            <option value="Gelombang 4">Gelombang 4</option>
        </select>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
          <button class="btn-outline-dark" name="tombol">Submit</button>
        </div>
      </div>
    <!-- AKHIR DARI CONTAINER JANGAN DIPINDAHIN -->  
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
