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
                        Edit Nilai
                    </p>

                    <form action="" method="post">

                        <input type="hidden" name="id_nilai" value="<?= $nilai['id_nilai']; ?>">

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">NIM</label>
                            <input type="text" name="nim" class="form-control text-muted" style="font-size: 0.95rem; padding: 10px;" value="<?= $nilai['nim']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">ID Kelas</label>
                            <input type="text" name="id_kelas" class="form-control text-muted" style="font-size: 0.95rem; padding: 10px;" value="<?= $nilai['id_kelas']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Nilai Tugas</label>
                            <input type="text" name="nilai_tugas" class="form-control text-muted" style="font-size: 0.95rem; padding: 10px;" value="<?= $nilai['nilai_tugas']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Nilai UTS</label>
                            <input type="text" name="nilai_uts" class="form-control text-muted" style="font-size: 0.95rem; padding: 10px;" value="<?= $nilai['nilai_uts']; ?>">
                        </div>

                        <div class="form-group mb-4">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Nilai UAS</label>
                            <input type="text" name="nilai_uas" class="form-control text-muted" style="font-size: 0.95rem; padding: 10px;" value="<?= $nilai['nilai_uas']; ?>">
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="edit" class="btn btn-primary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #3b82f6; border-color: #3b82f6;">
                                Edit Data
                            </button>
                            <a href="<?= base_url('nilai'); ?>" class="btn btn-secondary px-3 py-1.5" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>