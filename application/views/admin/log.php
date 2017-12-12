<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KSR</title>
      <link rel="stylesheet" href="<?php echo base_url()."css/framelayout.css"?>">
      <link rel="stylesheet" href="<?php echo base_url()."css/layout.css"?>" type="text/css">
  </head>
  <style media="screen">
  #header h1{
    font-size:20px;
    color:red;
  }
  #header h2{
    font-size:15px;
    color:red;
  }
  body{

  }

  #main {
    text-align: center;
    width:950px;
    margin: auto;
  }
  #main a{
    text-align: left;
    width:950px;
    margin: auto;
  }
  .clearfix {
    overflow: auto;
}
  </style>
  <body>
    <div id="wrap">
      <div id="nav"></div>
      <div id="header">
        <img src="<?php echo base_url();?>image/logo-ksr.png" width="120" height="110">
        <h1>KSR PMI UNIT UNS</h1><h2>Mengabdi dengan Ikhlas, Berkarya Sepenuh Hati</h2>
      </div>
    <div id="nav"></div>
    <div id="main">

        <form target="frmMain" action="<?php echo base_url()."index.php/welcome/aksi_login"?>" method="post">
            <br>
            <strong>Username :</strong>
            <input type="text" name="username" size="45"> <br> <br>
            <strong>Password :</strong>
            <input type="password" name="password" size="45">

      <input type="submit" value="Login"></h3></a>
      <iframe width="690" height="330" frameborder="0"
      scrolling="auto"></iframe>
        </form>
    </div>
    <div id="footer">
        <div class="clearfix">
            <img src="<?php echo base_url();?>image/insta.png" style=" float: left;" width="20" height="20">
            <p style=" float: left;">&nbspinstagram:ksr_uns&nbsp&nbsp</p>
            <img src="<?php echo base_url();?>image/fb.png" style=" float: left;" width="20" height="20">
            <p style=" float: left;">&nbspfacebook:Ksr Uns&nbsp&nbsp&nbsp</p>
            <img src="<?php echo base_url();?>image/twitter.png" style=" float: left;" width="20" height="20">
            <p style=" float: left;">&nbsptwitter:@ksr_uns</p>
        </div>
    </div>
    </div>
  </body>
</html>
