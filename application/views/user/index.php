<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KSR</title>
    <link rel="stylesheet" href="<?php echo base_url()."css/layout.css"?>" type="text/css">

  </head>
  <style>

  </style>
  <body>
    <div id="wrap">
      <div id="nav"></div>
      <div id="log">
      <a href="<?php echo base_url()."index.php/welcome/loginpage"?>"><h3><input type="submit" value="Login"></h3></a>
      </div>
      <div id="header">
        <img src="<?php echo base_url();?>image/logo-ksr.png" width="120" height="110">
        <h1>KSR PMI UNIT UNS</h1><h2>Mengabdi dengan Ikhlas, Berkarya Sepenuh Hati</h2>
      </div>
    <div id="nav"></div>
    <div id="main" style="background: #fff">
        <form action="<?php echo base_url()."index.php/welcome/tambah";?>" method="post"
              enctype="multipart/form-data">
            <strong>No Surat:</strong>
            <input type="text" name="no_surat" size="45" placeholder="Masukkan Nomor Surat" required><br><br>
            <strong>Nama Instansi:</strong>
            <input type="text" name="instansi" size="45" placeholder="Masukkan Nama Instansi" required><br><br>
            <strong>Nama Acara:</strong>
            <input type="text" name="acara" size="45" placeholder="Masukkan Nama Acara" required> <br><br>
            <strong>Tanggal:</strong>
            <input type="date" name="tanggal" size="45" placeholder="Format dd/mm/yyyy" required><br><br>
            <strong>Tempat:</strong>
            <input type="text" name="tempat" size="45" placeholder="Masukkan Nama Tempat" required><br><br>
            <strong>Nomor Telpon :</strong>
            <input type="text" name="telepon" size="45" placeholder="Masukkan Nomor Telepon yang Dapat Dihubungi" required><br><br>
            <input type="file" name="file" value="Upload File" required> <br> <br>
            <input type="submit" name="userSubmit" value="Submit">
        </form>
    </div>
    <div id="footer">
      <div class="clearfix">
          <a href="https://www.instagram.com/ksr_uns/" target="_blank">
              <img src="<?php echo base_url();?>image/insta.png" style=" float: left;" width="20" height="20">
          <p style=" float: left;">&nbspinstagram:ksr_uns&nbsp&nbsp</p></a>
          <a href="https://www.facebook.com/ksr.uns" target="_blank">
              <img src="<?php echo base_url();?>image/fb.png" style=" float: left;" width="20" height="20">
              <p style=" float: left;">&nbspfacebook:Ksr Uns&nbsp&nbsp&nbsp</p></a>
          <a href="https://twitter.com/ksr_uns" target="_blank"> <img src="<?php echo base_url();?>image/twitter.png" style=" float: left;" width="20" height="20">
              <p style=" float: left;">&nbsptwitter:@ksr_uns</p></a>
      </div>
    </div>
    </div>
  </body>
</html>
