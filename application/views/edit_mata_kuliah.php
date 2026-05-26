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
                        Edit Mata Kuliah 
                    </h6>
                </div>

                <div class="card-body">

                    <form action="" method="post">

                        <input type="hidden" 
                               name="kode_mk" 
                               value="<?= $mata_kuliah['kode_mk']; ?>">

                        <div class="form-group">
                            <label>Nama Mata Kuliah</label>
                            <input 
                                type="text"
                                name="nama_mk"
                                class="form-control"
                                placeholder="Masukkan Nama Mata Kuliah"
                                value="<?= $mata_kuliah['nama_mk']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Kode</label>
                            <input 
                                type="text"
                                name="kode_mk"
                                class="form-control"
                                placeholder="Masukkan Kode"
                                value="<?= $mata_kuliah['kode_mk']; ?>">
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input 
                                type="text"
                                name="sks"
                                class="form-control"
                                placeholder="Masukkan Jumlah SKS"
                                value="<?= $mata_kuliah['sks']; ?>">
                        </div>

                        <button type="submit" 
                                name="edit" 
                                class="btn btn-primary">
                            Edit Data
                        </button>

                        <a href="<?= base_url('mata_kuliah'); ?>" 
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>