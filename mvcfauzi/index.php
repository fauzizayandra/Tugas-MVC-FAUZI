<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Tugas Sekolah</title>
</head>
<body>
    <h1>Daftar Tugas</h1>
    <a href="create.php">Tambah Tugas Baru</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Tugas</th>
                <th>Deskripsi</th>
                <th>Tanggal Deadline</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM tugas");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama_tugas']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['tanggal_deadline']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
