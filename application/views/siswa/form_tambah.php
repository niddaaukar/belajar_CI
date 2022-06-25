<html>

<head>
  <title>Form Tambah - CRUD Codeigniter</title>
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
  <h1>Form Tambah Data Mahasiswa</h1>
  <hr>
  <!-- Menampilkan Error jika validasi tidak valid -->
  <div style="color: red;"><?php echo validation_errors(); ?></div>
  <?php echo form_open("siswa/tambah"); ?>
  <table cellpadding="8">
    <tr>
      <td>Nim</td>
      <td><input type="text" name="input_nim" value="<?php echo set_value('input_nim'); ?>"></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><input type="text" name="input_tgl_lahir" value="<?php echo set_value('input_tgl_lahir'); ?>"></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>
        <input type="radio" name="input_jenis_kelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
        <input type="radio" name="input_jenis_kelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
      </td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp'); ?>"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
    </tr>
  </table>

  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
  <?php echo form_close(); ?>
</body>

</html>