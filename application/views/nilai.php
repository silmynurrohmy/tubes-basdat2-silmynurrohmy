<div class="container-fluid" id="container-wrapper">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    Data Nilai berhasil <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col-lg-12">
            <a href="<?= base_url('nilai/tambah'); ?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
    </div>
     <!-- form cari -->
    <div class="row mb-3">
        <div class="col-lg-6">

            <form action="" method="POST">

                <div class="input-group">

                    <input type="text"
                           class="form-control"
                           placeholder="Cari data nilai..."
                           name="keyword">

                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            Cari
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

    <style>
        th, td {
            white-space: nowrap;
            vertical-align: middle !important;
        }
    </style>

    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Nilai
            </h6>
        </div>

        <div class="table-responsive p-3">
            <table class="table table-sm align-items-center table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>ID Kelas</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Akhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data_nilai as $n): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $n['nim']; ?></td>
                        <td><?= $n['id_kelas']; ?></td>
                        <td><?= $n['nilai_tugas']; ?></td>
                        <td><?= $n['nilai_uts']; ?></td>
                        <td><?= $n['nilai_uas']; ?></td>
                        <td><strong><?= $n['nilai_akhir']; ?></strong></td>
                        <td class="text-nowrap">
                            <a href="<?= base_url('nilai/detail/') . $n['id_nilai']; ?>" class="btn btn-sm btn-primary">
                                Detail
                            </a>
                            <a href="<?= base_url('nilai/edit/') . $n['id_nilai']; ?>" class="btn btn-sm btn-success">
                                Edit
                            </a>
                            <a href="<?= base_url('nilai/hapus/') . $n['id_nilai']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?');">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>