<div class="container-fluid" id="container-wrapper">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    Data Mahasiswa berhasil <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col-lg-12">
            <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text"
                           class="form-control"
                           placeholder="Cari data mahasiswa..."
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
            font-size: 14px; /* Ukuran huruf asli bawaan template */
        }

        .table td, .table th {
            padding: .55rem 0.75rem; /* Padding nyaman bawaan template */
        }

        /* Mengunci card table agar menciut pas seukuran isi kolomnya */
        .fit-card {
            display: inline-block;
            min-width: 50%;
            max-width: 100%;
        }
    </style>

    <div class="card mb-4 fit-card">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Mahasiswa
            </h6>
        </div>

        <div class="table-responsive p-2">

            <table class="table table-sm table-hover" style="width: auto !important;">

                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Angkatan</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $no = 1; ?>
                    <?php foreach($mahasiswa as $mhs): ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['nama_mahasiswa']; ?></td>
                        <td><?= $mhs['program_studi']; ?></td>
                        <td><?= $mhs['angkatan']; ?></td>
                        <td><?= $mhs['jenis_kelamin']; ?></td>
                        <td><?= $mhs['alamat']; ?></td>

                        <td class="text-nowrap">
                            <a href="<?= base_url('mahasiswa/detail/') . $mhs['nim']; ?>"
                               class="btn btn-sm btn-primary">
                               Detail
                            </a>

                            <a href="<?= base_url('mahasiswa/edit/') . $mhs['nim']; ?>"
                               class="btn btn-sm btn-success">
                               Edit
                            </a>

                            <a href="<?= base_url('mahasiswa/hapus/') . $mhs['nim']; ?>"
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