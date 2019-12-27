<!DOCTYPE html>
<html>
    <head>
        <title>List Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>

        <h1>List Mahasiswa</h1>
        <a href="<?= base_url() ?>mhs/add">Tambah Mahasiswa</a>

        <div class="row">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mhs as $m) {
                            ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $m->nim ?></td>
                                <td><?= $m->nama ?></td>
                                <td><?= $m->alamat ?></td>
                                <td><?= $m->telepon ?></td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

    </body>
</html>
