<?php

$db = mysqli_connect("localhost", "user", "password", "crud");

// Menampilkan data
$result = mysqli_query($db, "SELECT * FROM siswa");

// Menambah data
if (isset($_POST['submit'])) {
  $nomer = $_POST['nomer'];
  $nama = $_POST['nama'];
  $absen = $_POST['absen'];
  $kelas = $_POST['kelas'];
  $foto = $_POST['foto'];

  mysqli_query($db, "INSERT INTO siswa (nomer, nama, absen, kelas, foto) VALUES ('$nomer', '$nama', '$absen', '$kelas', '$foto')");
  header('location: index.php');
}

// Menghapus data
if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query($db, "DELETE FROM siswa WHERE id=$id");
  header('location: index.php');
}

// Mengupdate data
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $nomer = $_POST['nomer'];
  $nama = $_POST['nama'];
  $absen = $_POST['absen'];
  $kelas = $_POST['kelas'];
  $foto = $_POST['foto'];

  mysqli_query($db, "UPDATE siswa SET nomer='$nomer', nama='$nama', absen='$absen', kelas='$kelas', foto='$foto' WHERE id=$id");
  header('location: index.php');
}

// Mengambil data untuk diedit
$edit_state = false;
$id = 0;
$nomer = '';
$nama = '';
$absen = '';
$kelas = '';
$foto = '';

if (isset($_GET['edit'])) {
  $edit_state = true;
  $id = $_GET['edit'];
  $record = mysqli_query($db, "SELECT * FROM siswa WHERE id=$id");
  $record = mysqli_fetch_array($record);
  $nomer = $record['nomer'
