<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM tugas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Tugas berhasil dihapus!";
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
