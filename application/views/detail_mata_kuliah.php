<div class="container-fluid" id="container-wrapper">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Detail Mata Kuliah
                    </h6>
                </div>

                <div class="card-body">

                    <h4 class="mb-3">
                        <?= $mata_kuliah['nama_mk']; ?>
                    </h4>

                    <p>
                        <strong>Kode Mata Kuliah :</strong><br>
                        <?= $mata_kuliah['kode_mk']; ?>
                    </p>

                    <p>
                        <strong>SKS :</strong><br>
                        <?= $mata_kuliah['sks']; ?>
                    </p>



                    <a href="<?= base_url('mata_kuliah'); ?>" 
                       class="btn btn-secondary">
                       Kembali
                    </a>

                    <a href="<?= base_url('mata_kuliah/edit/') . $mata_kuliah['kode_mk']; ?>" 
                       class="btn btn-success">
                       Edit
                    </a>

                </div>

            </div>

        </div>
    </div>

</div>