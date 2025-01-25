<?php
include 'config.php';

$sql = "SELECT no_peserta, nama, sekolah, jurusan, no_hp, alamat FROM peserta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "No Peserta: " . $row["no_peserta"]. " - Nama: " . $row["nama"]. " - Sekolah: " . $row["sekolah"]. " - jurusan" $row["jurusan"]. "  - No HP: " . $row["no_hp"]. " - Alamat: " . $row["alamat"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
