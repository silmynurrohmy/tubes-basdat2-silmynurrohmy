<div class="container-fluid" id="container-wrapper">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    Data Kelas berhasil <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col-lg-12">
            <a href="<?= base_url('kelas/tambah'); ?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data kelas..." name="keyword">
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
                Data Kelas
            </h6>
        </div>

        <div class="table-responsive p-3">
            <table class="table table-sm align-items-center table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ID Kelas</th>
                        <th>Kode MK</th>
                        <th>NIDN</th>
                        <th>Tahun Ajar</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($kelas as $kls): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $kls['id_kelas']; ?></td>
                        <td><?= $kls['kode_mk']; ?></td>
                        <td><?= $kls['nidn']; ?></td>
                        <td><?= $kls['tahun_ajar']; ?></td>
                        <td><?= $kls['semester']; ?></td>
                        <td class="text-nowrap">
                            <a href="<?= base_url('kelas/detail/') . $kls['id_kelas']; ?>" class="btn btn-sm btn-primary">
                                Detail
                            </a>
                            <a href="<?= base_url('kelas/edit/') . $kls['id_kelas']; ?>" class="btn btn-sm btn-success">
                                Edit
                            </a>
                            <a href="<?= base_url('kelas/hapus/') . $kls['id_kelas']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?');">
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