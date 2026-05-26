<div class="container-fluid" id="container-wrapper">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-4 mt-3 mx-auto shadow-sm" style="width: 450px; border: none; border-radius: 6px; background-color: #ffffff; margin-top: 20px !important;">
                
                <div class="card-body p-4">

                    <p class="text-primary font-weight-bold mb-4" style="font-size: 1.05rem; color: #1565C0;">
                        Tambah Data Mahasiswa
                    </p>

                    <form action="" method="post">

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">NIM</label>
                            <input type="text" name="nim" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="NIM">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Nama</label>
                            <input type="text" name="nama_mahasiswa" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Nama Lengkap">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Program Studi</label>
                            <input type="text" name="program_studi" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Program Studi">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Angkatan">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" style="font-size: 0.95rem; height: auto; padding: 10px;">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Alamat</label>
                            <textarea name="alamat" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Alamat" rows="3"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="tambah" class="btn btn-primary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #3b82f6; border-color: #3b82f6;">
                                Tambah Data
                            </button>
                            <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-secondary px-3 py-1.5" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>