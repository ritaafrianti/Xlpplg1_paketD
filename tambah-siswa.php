<h5>Halaman Tambah Data siswa.</h5>
<a href="?url=siswa" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-siswa">
    <div class="form-group mb-2">
        <label>NISN</label>
        <input type="number" name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <tabel>NIS</label>
        <input type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <tabel>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value=""> pilih kelas </option>
            <?php
            include'../koneksi.php';
            $kelas = mysqli_query($koneksi,"SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas){
            ?>
            <option value="<?= $data_kelas['id_kelas'] ?>" >?= $data_kelas['nama_kelas']; ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>
    <div class="form-group mb-2">
        <label>SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value=""> pilih SPP </option>
            <?php
            include'../koneksi.php';
            $spp = mysqli_query($koneksi,"SELECT*FROM spp ORDER BY id_spp ASC");
            foreach($kelas as $data_spp){
            ?>
            <option value="<?= $data_spp['id_spp'] ?>"> <?= $data_spp['tahun']; ?> | <?= $data_spp['nominal']; ?> </option>
            <?php } ?> 
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>