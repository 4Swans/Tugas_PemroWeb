<?php include 'connect.php'; ?>  <!-- Menghubungkan dengan file connect.php untuk mendapatkan data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Registrasi</title>
    <link rel="stylesheet" href="member.css">  <!-- Menghubungkan dengan file CSS -->
</head>
<body>
<nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><img src="./images/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#menu">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#product">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#gallary">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="member.php">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class= "nav-link" href="registration.html">Register</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    <div class="table-container">
        <h2>Data Registrasi Anggota</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Memeriksa apakah ada data yang ditemukan
                if ($result->num_rows > 0) {
                    // Menampilkan data dalam bentuk baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["npm"] . "</td>";
                        echo "<td>" . ($row["jk"] == "L" ? "Laki-laki" : "Perempuan") . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
