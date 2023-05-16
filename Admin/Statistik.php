<?php
include("../core/url.php");
include("../core/header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>SMK Assyafi'iyyah 01 Jakarta</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/D2.jpg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  
  <?php navbar("stat");?>
  <canvas id="siswaChart" style="width: 300px; height:300;"></canvas>

    <?php
    // Data statistik calon siswa baru
    $labels = ['SMP A', 'SMP B', 'SMP C', 'SMP D'];
    $data = [80, 65, 75, 90];

    // Konversi data ke format JSON
    $labels_json = json_encode($labels);
    $data_json = json_encode($data);
    ?>

    <script>
        // Mendapatkan elemen canvas
        var ctx = document.getElementById('siswaChart').getContext('2d');

        // Membuat grafik batang
        var siswaChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $labels_json; ?>,
                datasets: [{
                    label: 'Jumlah Calon Siswa Baru',
                    data: <?php echo $data_json; ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio:true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>
<?php
include('../core/footer.php');


?>
</html>