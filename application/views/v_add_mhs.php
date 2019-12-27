<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h1>Tambah Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6">

                <form action="<?= base_url() ?>mhs/prosesTambah" method="post">
                    <div class="form-group">
                        <label>NIM <?php echo form_error('nim'); ?> </label>
                        <input type="text" name="nim" class="form-control">
                        <small class="form-text text-muted">Nim mahasiswa.</small>
                    </div>
                    <div class="form-group">
                        <label>Nama <?php echo form_error('nama'); ?> </label>
                        <input type="text" name="nama" class="form-control">
                        <small class="form-text text-muted">Nama mahasiswa.</small>
                    </div>
                    <div class="form-group">
                        <label>Alamat <?php echo form_error('alamat'); ?> </label>
                        <input type="text" name="alamat" class="form-control">
                        <small class="form-text text-muted">Alamat mahasiswa.</small>
                    </div>
                    <div class="form-group">
                        <label>Telepon <?php echo form_error('telepon'); ?> </label>
                        <input type="text" name="telepon" class="form-control">
                        <small class="form-text text-muted">Telepon mahasiswa.</small>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                </form>

            </div>
        </div>
    </body>
</html>
