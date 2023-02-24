<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Ubah Data Mahasiswa
            </div>
        <div class="card-body">
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="">
                </div>
                <div class="form-group">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" value="">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                        <option value="Informatika">Informatika</option>
                        <option value="Arsitektur">Arsitektur</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Ilmu Pendidikan">Ilmu Pendidikan</option>
                    </select>
                </div><br>
                <button type="submit" name="ubah" class="btn btn-primary
                float-right">Ubah Data</button>
            </form>

        </div>
    </div>

        </div>
    </div>


</div>