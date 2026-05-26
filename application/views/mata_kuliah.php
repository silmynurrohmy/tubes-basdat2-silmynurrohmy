<div class="container-fluid" id="container-wrapper">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    Data Mata Kuliah berhasil <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col-lg-12">
            <a href="<?= base_url('mata_kuliah/tambah'); ?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data mata kuliah..." name="keyword">
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
        th, td{
            white-space: nowrap;
            vertical-align: middle !important;
            font-size: 14px;
        }
        .table td, .table th{
            padding: .55rem;
        }
    </style>

    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Mata Kuliah
            </h6>
        </div>

        <div class="table-responsive p-2">
            <table class="table table-sm table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($mata_kuliah as $mk): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mk['kode_mk']; ?></td>
                        <td><?= $mk['nama_mk']; ?></td>
                        <td><?= $mk['sks']; ?></td>
                        <td class="text-nowrap">
                            <a href="<?= base_url('mata_kuliah/detail/') . $mk['kode_mk']; ?>" class="btn btn-sm btn-primary">
                                Detail
                            </a>
                            <a href="<?= base_url('mata_kuliah/edit/') . $mk['kode_mk']; ?>" class="btn btn-sm btn-success">
                                Edit
                            </a>
                            <a href="<?= base_url('mata_kuliah/hapus/') . $mk['kode_mk']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?');">
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