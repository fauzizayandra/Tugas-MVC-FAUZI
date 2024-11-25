<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas Baru</title>
</head>
<body>
    <h1>Tambah Tugas Baru</h1>
    <form method="POST">
        <label>Nama Tugas:</label><br>
        <input type="text" name="nama_tugas" required><br><br>
        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>
        <label>Tanggal Deadline:</label><br>
        <input type="date" name="tanggal_deadline" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama_tugas = $_POST['nama_tugas'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal_deadline = $_POST['tanggal_deadline'];

        $sql = "INSERT INTO tugas (nama_tugas, deskripsi, tanggal_deadline) 
                VALUES ('$nama_tugas', '$deskripsi', '$tanggal_deadline')";
        if ($conn->query($sql) === TRUE) {
            echo "Tugas berhasil ditambahkan!";
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
