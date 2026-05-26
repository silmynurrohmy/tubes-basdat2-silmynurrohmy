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
                        Tambah Data Kelas
                    </p>

                    <form action="" method="post">

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Mata Kuliah</label>
                            <select name="kode_mk" class="form-control" style="font-size: 0.95rem; height: auto; padding: 10px;">
                                <option value="">-- Pilih Mata Kuliah --</option>
                                <?php foreach($matkul as $mk): ?>
                                    <option value="<?= $mk['kode_mk']; ?>">
                                        <?= $mk['kode_mk']; ?> - <?= $mk['nama_mk']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Dosen (NIDN)</label>
                            <select name="nidn" class="form-control" style="font-size: 0.95rem; height: auto; padding: 10px;">
                                <option value="">-- Pilih NIDN --</option>
                                <?php foreach($dosen as $dsn): ?>
                                    <option value="<?= $dsn['nidn']; ?>">
                                        <?= $dsn['nidn']; ?> - <?= $dsn['nama_dosen']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Tahun Ajar</label>
                            <input type="text" name="tahun_ajar" class="form-control" style="font-size: 0.95rem; padding: 10px;" placeholder="Tahun Ajar">
                        </div>

                        <div class="form-group mb-4">
                            <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Semester</label>
                            <select name="semester" class="form-control" style="font-size: 0.95rem; height: auto; padding: 10px;">
                                <option value="">-- Pilih Semester --</option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="tambah" class="btn btn-primary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #3b82f6; border-color: #3b82f6;">
                                Tambah Data
                            </button>
                            <a href="<?= base_url('kelas'); ?>" class="btn btn-secondary px-3 py-1.5" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>