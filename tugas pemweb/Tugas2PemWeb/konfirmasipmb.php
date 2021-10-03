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


    <?php 

        $jalur = $namalengkap = $ttl = $Nik = $jeniskelamin = $agama = $status =
        $Alamat = $kodepos = $Tahun_lulus = $Nama_Ayah = $Nama_Ibu = $Alamat = $kodepos =
        $Email = $Pendidikan_Terakhir_Ayah = $Pendidikan_Terakhir_Ibu = $StatusAyah =
        $StatusIbu = $PekerjaanAyah = $PekerjaanIbu = $PilihanProgramStudi1 = $PilihanProgramStudi2
        = $SumberInformasi = $PilihanGelombang ="";

        if (isset($_POST['tombol'])) {
        $jalur = $_POST["jalur"];
        $namalengkap = $_POST["name"];
        $ttl = $_POST["ttl"];
        $Nik = $_POST["Nik"];
        $jeniskelamin = $_POST["jeniskelamin"];
        $agama = $_POST["agama"];
        $status = $_POST["Status"];
        $Alamat = $_POST["alamat"];
        $kodepos = $_POST["kodepos"];
        $Email = $_POST["email"];
        $nomor_handphone = $_POST["nomor_handphone"];
        $Asal_Sekolah = $_POST["asal_sekolah"];
        $Tahun_lulus = $_POST["Tahun_Lulus"];
        $Nama_Ayah = $_POST["Nama_Ayah"];
        $Nama_Ibu = $_POST["Nama_Ibu"];
        $Alamat = $_POST["alamat"];
        $kodepos = $_POST["kodepos"];
        $Email = $_POST["emailortu"];
        $Pendidikan_Terakhir_Ayah = $_POST["pendidikanterakhirayah"];
        $Pendidikan_Terakhir_Ibu = $_POST["pendidikanterakhiribu"];
        $StatusAyah = $_POST["statusayah"];
        $StatusIbu = $_POST["statusibu"];
        $PekerjaanAyah = $_POST["pekerjaanayah"];
        $PekerjaanIbu = $_POST["pekerjaanibu"];
        $PilihanProgramStudi1 = $_POST["prodi1"];
        $PilihanProgramStudi2 = $_POST["prodi2"];
        $SumberInformasi = $_POST["info"];
        $PilihanGelombang = $_POST["gelombang"];
        
        echo "<p>Jalur Penerimaan : " . $jalur . "</p>";
        echo "<p>Nama Lengkap : " . $namalengkap . "</p>";
        echo "<p>Tempat tanggal lahir : " . $ttl . "</p>";
        echo "<p>Nik : " . $Nik . "</p>";
        echo "<p>jenis kelamin : " . $jeniskelamin . "</p>";
        echo "<p>status : " . $status . "</p>";
        echo "<p>Alamat : " . $Alamat . "</p>";
        echo "<p>kodepos : " . $kodepos . "</p>";
        echo "<p>nomor_handphone : " . $nomor_handphone . "</p>";
        echo "<p>asal_Sekolah : " . $Asal_Sekolah . "</p>";
        echo "<p>Tahun_lulus : " . $Tahun_lulus . "</p>";
        echo "<p>Nama_Ayah : " . $Nama_Ayah . "</p>";
        echo "<p>Nama_Ibu : " . $Nama_Ibu . "</p>";
        echo "<p>Alamat : " . $Alamat . "</p>";
        echo "<p>kodepos : " . $kodepos . "</p>";
        echo "<p>emailortu : " . $Email . "</p>";
        echo "<p>pendidikanterakhirayah : " . $Pendidikan_Terakhir_Ayah . "</p>";
        echo "<p>pendidikanterakhiribu : " . $Pendidikan_Terakhir_Ibu . "</p>";
        echo "<p>statusayah : " . $StatusAyah . "</p>";
        echo "<p>statusibu : " . $StatusIbu . "</p>";
        echo "<p>prodi1 : " . $PilihanProgramStudi1 . "</p>";
        echo "<p>prodi2 : " . $PilihanProgramStudi2 . "</p>";
        echo "<p>info : " . $SumberInformasi . "</p>";
        echo "<p>gelombang : " . $PilihanGelombang . "</p>";
         }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
