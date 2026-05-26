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
                        Tambah Data Mata Kuliah
                    </p>

                    <form action="" method="post">

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Kode Mata Kuliah</label>
                            <input type="text" name="kode_mata_kuliah" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Kode Mata Kuliah">
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Nama Mata Kuliah</label>
                            <input type="text" name="name_mata_kuliah" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Mata Kuliah">
                        </div>

                        <div class="form-group mb-4">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">SKS</label>
                            <input type="text" name="sks" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Jumlah SKS">
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="tambah" class="btn btn-primary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #3b82f6; border-color: #3b82f6;">
                                Tambah Data
                            </button>
                            <a href="<?= base_url('mata_kuliah'); ?>" class="btn btn-secondary px-3 py-1.5" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>