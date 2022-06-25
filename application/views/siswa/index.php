<!DOCTYPE html>
<html>

<head>
  <title>CRUD Codeigniter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/css/bootstrap-theme.css') ?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/css/elegant-icons-style.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css') ?>" rel="stylesheet" />
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <hr>
  <a href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a><br><br>
  <table border="1" cellpadding="7">
    <tr>
      <th>Nim</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    if (!empty($siswa)) { // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
      foreach ($siswa as $data) {
        echo "<tr>
          <td>" . $data->nim . "</td>
          <td>" . $data->nama . "</td>
          <td>" . $data->tgl_lahir . "</td>
          <td>" . $data->jenis_kelamin . "</td>
          <td>" . $data->telp . "</td>
          <td>" . $data->alamat . "</td>
          <td><a href='" . base_url("siswa/ubah/" . $data->nim) . "'>Ubah</a></td>
          <td><a href='" . base_url("siswa/hapus/" . $data->nim) . "'>Hapus</a></td>
          </tr>";
      }
    } else { // Jika data siswa kosong
      echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
    }
    ?>
  </table>
  <br>
</body>

</html>