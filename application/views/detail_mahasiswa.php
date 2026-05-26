<div class="container-fluid" id="container-wrapper">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Detail Mahasiswa
                    </h6>
                </div>

                <div class="card-body">

                    <h4 class="mb-3">
                        <?= $mahasiswa['nama_mahasiswa']; ?>
                    </h4>

                    <p>
                        <strong>NIM :</strong><br>
                        <?= $mahasiswa['nim']; ?>
                    </p>

                    <p>
                        <strong>Program Studi :</strong><br>
                        <?= $mahasiswa['program_studi']; ?>
                    </p>

                    <p>
                        <strong>Angkatan :</strong><br>
                        <?= $mahasiswa['angkatan']; ?>
                    </p>

                    <p>
                        <strong>Jenis Kelamin :</strong><br>
                        <?= $mahasiswa['jenis_kelamin']; ?>
                    </p>

                    <p>
                        <strong>Alamat :</strong><br>
                        <?= $mahasiswa['alamat']; ?>
                    </p>

                    <a href="<?= base_url('mahasiswa'); ?>" 
                       class="btn btn-secondary">
                       Kembali
                    </a>

                    <a href="<?= base_url('mahasiswa/edit/') . $mahasiswa['nim']; ?>" 
                       class="btn btn-success">
                       Edit
                    </a>

                </div>

            </div>

        </div>
    </div>

</div>