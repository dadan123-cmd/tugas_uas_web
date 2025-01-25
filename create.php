<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO users (nama, sekolah, jurusan, no_hp, alamat) VALUES ('$nama', '$sekolah', '$jurusan', '$no_hp', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<<form action="" method="post"> 
    <h1>Daftar Peserta Pelatihan</h1> 
    Nama: <input type="text" name="nama"><br> 
    Sekolah: <input type="text" name="sekolah"><br> 
    Jurusan : <input type="text" name="jurusan"><br>
    No HP: <input type="text" name="no_hp"><br>
    Alamat: <input type="text" name="alamat"><br>     
    <input type="submit" value="Submit"> 
</form>
