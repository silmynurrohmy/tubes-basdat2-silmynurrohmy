<div class="container-fluid" id="container-wrapper">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Edit Dosen
                    </h6>
                </div>

                <div class="card-body">

                    <form action="" method="post">

                        <input type="hidden" 
                               name="nidn" 
                               value="<?= $dosen['nidn']; ?>">

                        <div class="form-group">
                            <label>Nidn</label>
                            <input 
                                type="text"
                                name="nidn"
                                class="form-control"
                                placeholder="Masukkan NIDN"
                                value="<?= $dosen['nidn']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input 
                                type="text"
                                name="nama_dosen"
                                class="form-control"
                                placeholder="Masukkan Nama"
                                value="<?= $dosen['nama_dosen']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Program Studi</label>
                            <input 
                                type="text"
                                name="program_studi"
                                class="form-control"
                                placeholder="Masukkan Program Studi"
                                value="<?= $dosen['program_studi']; ?>">
                        </div>

                          <div class="form-group">
                            <label>Jabatan</label>
                            <input 
                                type="text"
                                name="jabatan"
                                class="form-control"
                                placeholder="Masukkan Jabatan"
                                value="<?= $dosen['jabatan']; ?>">
                        </div>
                        <button type="submit" 
                                name="edit" 
                                class="btn btn-primary">
                            Edit Data
                        </button>

                        <a href="<?= base_url('dosen'); ?>" 
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>