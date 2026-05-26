<div class="container-fluid" id="container-wrapper">

    <div class="card mt-3 mx-auto shadow-sm" style="width: 450px; border: none; border-radius: 6px; background-color: #ffffff; margin-top: 20px !important;">

        <div class="card-body p-4">

            <p class="text-primary font-weight-bold mb-4" style="font-size: 1.05rem; color: #1565C0;">
                Edit Kelas
            </p>

            <form action="<?= base_url('kelas/update'); ?>" method="POST">

                <div class="form-group mb-3">
                    <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Kode MK</label>
                    <input type="text" class="form-control text-muted" name="kode_mk" value="<?= $kelas['kode_mk']; ?>" style="font-size: 0.95rem; padding: 10px;">
                </div>

                <div class="form-group mb-3">
                    <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">NIDN</label>
                    <input type="text" class="form-control text-muted" name="nidn" value="<?= $kelas['nidn']; ?>" style="font-size: 0.95rem; padding: 10px;">
                </div>

                <div class="form-group mb-3">
                    <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Tahun Ajar</label>
                    <input type="text" class="form-control text-muted" name="tahun_ajar" value="<?= $kelas['tahun_ajar']; ?>" style="font-size: 0.95rem; padding: 10px;">
                </div>

                <div class="form-group mb-4">
                    <label class="text-dark font-weight-bold" style="font-size: 0.95rem; margin-bottom: 5px;">Semester</label>
                    <input type="text" class="form-control text-muted" name="semester" value="<?= $kelas['semester']; ?>" style="font-size: 0.95rem; padding: 10px;">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary px-3 py-1.5 mr-2" style="font-size: 0.9rem; background-color: #3b82f6; border-color: #3b82f6;">
                        Edit Data
                    </button>
                    <a href="<?= base_url('kelas'); ?>" class="btn btn-secondary px-3 py-1.5" style="font-size: 0.9rem; background-color: #5a6268; border-color: #545b62;">
                        Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>