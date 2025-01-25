<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_peserta = $_POST['no_peserta'];

    $sql = "DELETE FROM peserta WHERE no_peserta=$no_peserta";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form action="" method="post">
    <h1>Daftar Peserta Pelatihan</h1>
    No Peserta: <input type="text" name="no_peserta"><br>
    <input type="submit" value="Delete">
</form>
