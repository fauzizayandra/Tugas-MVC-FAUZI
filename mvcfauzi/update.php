<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM tugas WHERE id = $id");
    $row = $result->fetch_assoc();
    ?>
    <h1>Edit Tugas</h1>
    <form method="POST">
        <label>Nama Tugas:</label><br>
        <input type="text" name="nama_tugas" value="<?php echo $row['nama_tugas']; ?>" required><br><br>
        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"><?php echo $row['deskripsi']; ?></textarea><br><br>
        <label>Tanggal Deadline:</label><br>
        <input type="date" name="tanggal_deadline" value="<?php echo $row['tanggal_deadline']; ?>" required><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama_tugas = $_POST['nama_tugas'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal_deadline = $_POST['tanggal_deadline'];

        $sql = "UPDATE tugas SET nama_tugas = '$nama_tugas', deskripsi = '$deskripsi', tanggal_deadline = '$tanggal_deadline' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Tugas berhasil diupdate!";
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
