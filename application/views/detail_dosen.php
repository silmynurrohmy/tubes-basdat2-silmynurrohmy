<div class="container-fluid" id="container-wrapper">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Detail Dosen
                    </h6>
                </div>

                <div class="card-body">

                    <h4 class="mb-3">
                        <?= $dosen['nama_dosen']; ?>
                    </h4>

                    <p>
                        <strong>NIDN :</strong><br>
                        <?= $dosen['nidn']; ?>
                    </p>

                    <p>
                        <strong>Program Studi :</strong><br>
                        <?= $dosen['program_studi']; ?>
                    </p>

                    <p>
                        <strong>Jabatan :</strong><br>
                        <?= $dosen['jabatan']; ?>
                    </p>


                    <a href="<?= base_url('dosen'); ?>" 
                       class="btn btn-secondary">
                       Kembali
                    </a>

                    <a href="<?= base_url('dosen/edit/') . $dosen['nidn']; ?>" 
                       class="btn btn-success">
                       Edit
                    </a>

                </div>

            </div>

        </div>
    </div>

</div>