<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo $_SESSION['csrf_token']; ?>">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWlbVjI6M7F0dOJIsKxApQpbqyi7RrhN7udi9RwhKMPWblH0GPsHg5gR" crossorigin="anonymous">

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <title>Data Anggota</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php" style="color:#fff;">CRUD Dengan Ajax</a>
  </nav>

  <div class="container">
    <h2 align="center" style="margin:30px;">Data Anggota</h2>

    <!-- Tambahkan di dalam index.php pada bagian <form> -->
<form method="post" class="form-data" id="form-data">
  <div class="row">
    <!-- Kolom Nama -->
    <div class="col-sm-9">
      <div class="form-group">
        <label>Nama:</label>
        <input type="hidden" name="id" id="id">
        <input type="text" name="nama" id="nama" class="form-control" required="true">
        <!-- Tempat munculnya pesan error untuk nama -->
        <p class="text-danger" id="err_nama"></p>
      </div>
    </div>

    <!-- Kolom Jenis Kelamin -->
    <div class="col-sm-3">
      <div class="form-group">
        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-laki
        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
        <!-- Tempat munculnya pesan error untuk jenis kelamin -->
        <p class="text-danger" id="err_jenis_kelamin"></p>
      </div>
    </div>
  </div>

  <!-- Kolom Alamat -->
  <div class="form-group">
    <label>Alamat:</label>
    <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
    <!-- Tempat munculnya pesan error untuk alamat -->
    <p class="text-danger" id="err_alamat"></p>
  </div>

  <!-- Kolom Nomor Telepon -->
  <div class="form-group">
    <label>No Telepon:</label>
    <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
    <!-- Tempat munculnya pesan error untuk no telepon -->
    <p class="text-danger" id="err_no_telp"></p>
  </div>

  <!-- Tombol Simpan -->
  <div class="form-group">
    <button type="button" name="simpan" id="simpan" class="btn btn-primary">
      <i class="fa fa-save"></i> Simpan
    </button>
  </div>
</form>


    <div class="data"></div>

    <div class="text-center">
      &copy; <?php echo date('Y'); ?> | Copyright:
      <a href="https://google.com/">Desain Dan Pemrograman Web</a>
    </div>
  </div>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function () {
    $('.data').load('data.php');

    $.ajaxSetup({
      headers: {
        'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
      }
    });

    // ===== SCRIPT TAMBAHAN DARI GAMBAR =====
    $("#simpan").click(function () {
      var data = $(".form-data").serialize();
      var jenkel1 = document.getElementById("jenkel1").value;
      var jenkel2 = document.getElementById("jenkel2").value;
      var nama = document.getElementById("nama").value;
      var alamat = document.getElementById("alamat").value;
      var no_telp = document.getElementById("no_telp").value;

      // Validasi Nama
      if (nama == "") {
        document.getElementById("err_nama").innerHTML = "Nama harus diisi!";
      } else {
        document.getElementById("err_nama").innerHTML = "";
      }

      // Validasi Alamat
      if (alamat == "") {
        document.getElementById("err_alamat").innerHTML = "Alamat harus diisi!";
      } else {
        document.getElementById("err_alamat").innerHTML = "";
      }

      // Validasi Jenis Kelamin
      if (
        document.getElementById("jenkel1").checked == false &&
        document.getElementById("jenkel2").checked == false
      ) {
        document.getElementById("err_jenis_kelamin").innerHTML =
          "Jenis kelamin harus dipilih!";
      } else {
        document.getElementById("err_jenis_kelamin").innerHTML = "";
      }

      // Validasi Nomor Telepon
      if (no_telp == "") {
        document.getElementById("err_no_telp").innerHTML =
          "Nomor telepon harus diisi!";
      } else {
        document.getElementById("err_no_telp").innerHTML = "";
      }

      // Kalau semua field sudah diisi
      if (
        nama != "" &&
        alamat != "" &&
        (document.getElementById("jenkel1").checked == true ||
          document.getElementById("jenkel2").checked == true) &&
        no_telp != ""
      ) {
        $.ajax({
          type: "POST",
          url: "form_action.php", // file yang akan dipanggil untuk menyimpan data
          data: data,
          success: function () {
            $(".data").load("data.php"); // reload data setelah tambah
            document.getElementById("form-data").reset(); // reset form
          },
          error: function (response) {
            console.log(response.responseText);
          },
        });
      }
    });
    // ===== AKHIR SCRIPT TAMBAHAN =====
  });
</script>


</body>
</html>
