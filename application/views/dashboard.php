<?php
/** @var int $jumlah_mahasiswa */
/** @var int $jumlah_dosen */
/** @var int $jumlah_mk */
/** @var int $jumlah_kelas */
/** @var int $jumlah_nilai */
?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Charts</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                    <div style="width:100%; height:300px; position:relative;" class="mt-3">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar" style="position: relative; height: 260px;">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie" style="position: relative; height: 260px;">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>

<script>
var ctx = document.getElementById("myAreaChart");
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Mahasiswa', 'Dosen', 'Mata Kuliah', 'Kelas', 'Nilai'],
        datasets: [{
            label: 'Jumlah Data',
            data: [
                <?php echo isset($jumlah_mahasiswa) ? $jumlah_mahasiswa : 0; ?>,
                <?php echo isset($jumlah_dosen) ? $jumlah_dosen : 0; ?>,
                <?php echo isset($jumlah_mk) ? $jumlah_mk : 0; ?>,
                <?php echo isset($jumlah_kelas) ? $jumlah_kelas : 0; ?>,
                <?php echo isset($jumlah_nilai) ? $jumlah_nilai : 0; ?>
            ],
            backgroundColor: 'rgba(59, 130, 246, 0.15)',
            borderColor: '#1565C0',
            pointBackgroundColor: '#1565C0',
            pointBorderColor: '#ffffff',
            pointHoverBackgroundColor: '#ffffff',
            pointHoverBorderColor: '#1565C0',
            borderWidth: 3,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        }
    }
});

var ctx2 = document.getElementById("myBarChart");
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Mahasiswa', 'Dosen', 'Mata Kuliah', 'Kelas', 'Nilai'],
        datasets: [{
            label: 'Jumlah',
            data: [
                <?php echo isset($jumlah_mahasiswa) ? $jumlah_mahasiswa : 0; ?>,
                <?php echo isset($jumlah_dosen) ? $jumlah_dosen : 0; ?>,
                <?php echo isset($jumlah_mk) ? $jumlah_mk : 0; ?>,
                <?php echo isset($jumlah_kelas) ? $jumlah_kelas : 0; ?>,
                <?php echo isset($jumlah_nilai) ? $jumlah_nilai : 0; ?>
            ],
            backgroundColor: [
                '#1565C0',
                '#2196F3',
                '#00BCD4',
                '#4FC3F7',
                '#90CAF9'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        }
    }
});

var ctx3 = document.getElementById("myPieChart");
new Chart(ctx3, {
    type: 'doughnut',
    data: {
        labels: ['Mahasiswa', 'Dosen', 'Mata Kuliah', 'Kelas', 'Nilai'],
        datasets: [{
            data: [
                <?php echo isset($jumlah_mahasiswa) ? $jumlah_mahasiswa : 0; ?>,
                <?php echo isset($jumlah_dosen) ? $jumlah_dosen : 0; ?>,
                <?php echo isset($jumlah_mk) ? $jumlah_mk : 0; ?>,
                <?php echo isset($jumlah_kelas) ? $jumlah_kelas : 0; ?>,
                <?php echo isset($jumlah_nilai) ? $jumlah_nilai : 0; ?>
            ],
            backgroundColor: [
                '#1565C0',
                '#2196F3',
                '#00BCD4',
                '#4FC3F7',
                '#90CAF9'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
            labels: { boxWidth: 12 }
        }
    }
});
</script>