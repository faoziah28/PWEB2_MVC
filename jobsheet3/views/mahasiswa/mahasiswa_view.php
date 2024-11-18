<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

// Instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$dataMhs = $mahasiswaController->getAllMahasiswa();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($dataMhs as $row) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><a href="mahasiswa_detail_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></a></td>
                    <td><a href="../prodi/program_studi_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['prodi']; ?></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>