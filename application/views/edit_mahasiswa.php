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
                        Edit Mahasiswa
                    </h6>
                </div>

                <div class="card-body">

                    <form action="" method="post">

                        <input type="hidden" 
                               name="nim" 
                               value="<?= $mahasiswa['nim']; ?>">

                        <div class="form-group">
                            <label>NIM</label>
                            <input 
                                type="text"
                                name="nim"
                                class="form-control"
                                placeholder="Masukkan Nim"
                                value="<?= $mahasiswa['nim']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input 
                                type="text"
                                name="nama_mahasiswa"
                                class="form-control"
                                placeholder="Masukkan nama"
                                value="<?= $mahasiswa['nama_mahasiswa']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Program Studi</label>
                            <input 
                                type="text"
                                name="program_studi"
                                class="form-control"
                                placeholder="Masukkan Program Studi"
                                value="<?= $mahasiswa['program_studi']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Angkatan</label>
                            <input 
                                type="text"
                                name="angkatan"
                                class="form-control"
                                placeholder="Masukkan Angkatan"
                                value="<?= $mahasiswa['angkatan']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>

                            <select class="form-control" 
                                    name="jenis_kelamin">

                                <option value="Laki-laki"
                                <?php if($mahasiswa['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>
                                    Laki-laki
                                </option>

                                <option value="Perempuan"
                                <?php if($mahasiswa['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>
                                    Perempuan
                                </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea 
                                name="alamat"
                                class="form-control"
                                placeholder="Masukkan Alamat"><?= $mahasiswa['alamat']; ?></textarea>
                        </div>

                        <button type="submit" 
                                name="edit" 
                                class="btn btn-primary">
                            Edit Data
                        </button>

                        <a href="<?= base_url('mahasiswa'); ?>" 
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>