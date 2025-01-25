<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_peserta = $_POST['no_peserta'];
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE peserta SET nama='$nama', sekolah='$sekolah', jurusan='$jurusan', no_hp='$no_hp', alamat='$alamat',  WHERE no_peserta=$no_peserta";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form action="" method="post">
    <h1>Daftar Peserta Pelatihan</h1>
    No Peserta: <input type="text" name="no_peserta"><br>
    Nama: <input type="text" name="nama"><br>
    Sekolah: <input type="text" name="sekolah"><br>
    Jurusan : <input type="text" name="jurusan"><br>
    No HP: <input type="text" name="no_hp"><br>
    Alamat: <input type="text" name="alamat"><br>
    <input type="submit" value="Update">
</form>
