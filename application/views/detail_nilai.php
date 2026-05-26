<div class="container-fluid" id="container-wrapper">

    <div class="card mt-3 mx-auto shadow-sm" style="width: 400px; border: none; border-radius: 6px; background-color: #ffffff; margin-top: 20px !important;">

        <div class="card-body p-4">

            <p class="text-primary font-weight-bold mb-3" style="font-size: 1rem; color: #1565C0;">
                Detail Nilai Mahasiswa
            </p>

            <h2 class="mb-4" style="color: #424242; font-weight: 500; font-size: 1.8rem;">
                <?= $nilai['nim']; ?>
            </h2>

            <div class="mb-3">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">ID Kelas :</span>
                <span class="text-muted" style="font-size: 0.95rem;"><?= $nilai['id_kelas']; ?></span>
            </div>

            <div class="mb-3">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">Nilai Tugas :</span>
                <span class="text-muted" style="font-size: 0.95rem;"><?= $nilai['nilai_tugas']; ?></span>
            </div>

            <div class="mb-3">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">Nilai UTS :</span>
                <span class="text-muted" style="font-size: 0.95rem;"><?= $nilai['nilai_uts']; ?></span>
            </div>

            <div class="mb-3">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">Nilai UAS :</span>
                <span class="text-muted" style="font-size: 0.95rem;"><?= $nilai['nilai_uas']; ?></span>
            </div>

            <div class="mb-4">
                <span class="text-dark d-block font-weight-bold" style="font-size: 0.95rem; margin-bottom: 2px;">Nilai Akhir :</span>
                <span class="text-dark font-weight-bold" style="font-size: 1.1rem; color: #2e7d32;"><?= $nilai['nilai_akhir']; ?></span>
            </div>

            <div class="mt-4">
                <a href="<?= base_url('nilai'); ?>" class="btn btn-secondary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                    Kembali
                </a>
                <a href="<?= base_url('nilai/edit/') . $nilai['id_nilai']; ?>" class="btn btn-success px-3 py-1.5" style="font-size: 0.9rem; background-color: #28a745; border-color: #218838;">
                    Edit
                </a>
            </div>

        </div>

    </div>

</div>