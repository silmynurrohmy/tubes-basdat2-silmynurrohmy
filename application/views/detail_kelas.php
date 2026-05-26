<div class="container-fluid" id="container-wrapper">

    <div class="card mt-3 mx-auto shadow-sm" style="width: 400px; border: none; border-radius: 6px; background-color: #ffffff; margin-top: 15px !important;">

        <div class="card-body p-4">

            <p class="text-primary font-weight-bold mb-3" style="font-size: 1rem; color: #1565C0;">
                Detail Mata Kuliah
            </p>

            <h2 class="mb-4" style="color: #424242; font-weight: 500; font-size: 1.8rem;">
                <?= $kelas['kode_mk']; ?>
            </h2>

            <div class="mb-3">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">Kode Mata Kuliah :</span>
                <span class="text-muted" style="font-size: 0.95rem;"><?= $kelas['nidn']; ?></span>
            </div>

            <div class="mb-4">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">SKS :</span>
                <span class="text-muted" style="font-size: 0.95rem;"><?= $kelas['semester']; ?></span>
            </div>

            <div class="mt-4">
                <a href="<?= base_url('kelas'); ?>" class="btn btn-secondary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                    Kembali
                </a>
                <a href="<?= base_url('kelas/edit/') . $kelas['id_kelas']; ?>" class="btn btn-success px-3 py-1.5" style="font-size: 0.9rem;">
                    Edit
                </a>
            </div>

        </div>

    </div>

</div>