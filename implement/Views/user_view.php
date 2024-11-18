<!-- user_view.php -->
<html>

<body>

    <h1>User Profile</h1>
    <?php foreach ($data as $row): ?>
        <p>user: <?php echo $row['username']; ?></p>
        <p>Nama: <?php echo $row['nama']; ?></p>
        <p>nim: <?php echo $row['nim']; ?></p>
        <p>Alamat: <?php echo $row['alamat']; ?></p>

    <?php endforeach ?>
</body>

</html>