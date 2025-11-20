<div class="container-fluid">
<div class="row">
<?php
require 'admin/template/menu.php';
require 'config/koneksi.php'; // koneksi PGSQL

// ambil id user dari URL
$id = $_GET['id'];

// query ambil data anggota + user + jabatan
$sql = "
    SELECT a.*, u.username, j.jabatan 
    FROM anggota a 
    JOIN \"user\" u ON a.user_id = u.id
    JOIN jabatan j ON a.jabatan_id = j.id
    WHERE a.user_id = $1
";

$result = pg_query_params($koneksi, $sql, [$id]);
$row = pg_fetch_assoc($result);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Anggota</h1>
</div>

<div class="card col-md-6">
<div class="card-header">
Form Edit Anggota
</div>

<div class="card-body">
<form action="function/edit.php?anggota=edit" method="POST">
    <input type="hidden" name="id" value="<?= $row['user_id']; ?>">

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Jabatan</label>
        <select class="form-select" name="jabatan">
            <?php
            $resJ = pg_query($koneksi, "SELECT * FROM jabatan ORDER BY jabatan ASC");
            while ($r = pg_fetch_assoc($resJ)) {
            ?>
                <option value="<?= $r['id']; ?>" <?= $r['id']==$row['jabatan_id']?'selected':''; ?>>
                    <?= $r['jabatan']; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label><br>
        <label><input type="radio" name="jenis_kelamin" value="L" <?= $row['jenis_kelamin']=='L'?'checked':''; ?>> Laki-Laki</label>
        <label><input type="radio" name="jenis_kelamin" value="P" <?= $row['jenis_kelamin']=='P'?'checked':''; ?>> Perempuan</label>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat"><?= $row['alamat']; ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">No Telp</label>
        <input type="text" class="form-control" name="no_telp" value="<?= $row['no_telp']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" value="<?= $row['username']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Password Baru (opsional)</label>
        <input type="password" class="form-control" name="password">
        <small class="text-muted">Kosongkan jika tidak ingin ubah password</small>
    </div>

    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Simpan Perubahan</button>
    <a href="index.php?page=anggota" class="btn btn-secondary"><i class="fa fa-times"></i> Batal</a>
</form>
</div>
</div>
</main>
</div>
</div>
