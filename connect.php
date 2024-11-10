<?php
// Detail koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "anggota_kelompok";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah data dikirimkan melalui metode POST
if (isset($_POST['nama'], $_POST['npm'], $_POST['jk'])) {
    // Mengambil data dari POST
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jk = $_POST['jk'];

    // Buat query untuk menyimpan data
    $sql = "INSERT INTO registration (nama, npm, jk) VALUES ('$nama', '$npm', '$jk')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 

// Mengambil data dari tabel registrasi
$sql = "SELECT nama, npm, jk FROM registration";
$result = $conn->query($sql);

// Tutup koneksi
$conn->close();
?>
