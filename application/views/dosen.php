<div class="container-fluid" id="container-wrapper">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    Data Dosen berhasil <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- tombol tambah -->
    <div class="row mb-3">
        <div class="col-lg-12">

            <a href="<?= base_url('dosen/tambah'); ?>" class="btn btn-primary">
                Tambah Data
            </a>

        </div>
    </div>

    <!-- pencarian -->
    <div class="row mb-3">
        <div class="col-lg-6">

            <form action="" method="POST">

                <div class="input-group">

                    <input type="text"
                           class="form-control"
                           placeholder="Cari data dosen..."
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

    <!-- style biar rapih -->
    <style>
        th, td{
            white-space: nowrap;
            vertical-align: middle !important;
            font-size: 14px;
        }

        .table td, .table th{
            padding: .55rem;
        }
    </style>

    <!-- tabel -->
    <div class="card mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Dosen
            </h6>
        </div>

        <div class="table-responsive p-2">

            <table class="table table-sm table-hover">

                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Program Studi</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $no = 1; ?>
                    <?php foreach($dosen as $dsn): ?>

                    <tr>

                        <td><?= $no++; ?></td>
                        <td><?= $dsn['nidn']; ?></td>
                        <td><?= $dsn['nama_dosen']; ?></td>
                        <td><?= $dsn['program_studi']; ?></td>
                        <td><?= $dsn['jabatan']; ?></td>

                        <td class="text-nowrap">

                            <a href="<?= base_url('dosen/detail/') . $dsn['nidn']; ?>"
                               class="btn btn-sm btn-primary">
                               Detail
                            </a>

                            <a href="<?= base_url('dosen/edit/') . $dsn['nidn']; ?>"
                               class="btn btn-sm btn-success">
                               Edit
                            </a>

                            <a href="<?= base_url('dosen/hapus/') . $dsn['nidn']; ?>"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin?');">
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

