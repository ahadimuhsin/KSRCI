<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KSR</title>
    <link rel="stylesheet" href="<?php echo base_url()."css/layout.css"?>" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url()."css/framelayout.css"?>">
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
  #log{
    padding:15px 10px;
    background:transparent;
    float: right;
  }
  #main {
    text-align: center;
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
      <div id="log">
        <a href="<?php echo base_url()."/index.php/welcome/logout"?>"><h3><input type="submit" value="Logout"></h3></a>
      </div>
      <div id="header">
        <img src="<?php echo base_url();?>image/logo-ksr.png" width="120" height="110">
        <h1>KSR PMI UNIT UNS</h1><h2>Mengabdi dengan Ikhlas, Berkarya Sepenuh Hati</h2>
      </div>
        <h4 align="left">Hai, <?php echo $this->session->userdata('user_name');?></h4>
    <div id="nav"></div>
    <div id="main">

      <iframe width="600" height="600" frameborder="10" name="frmMain"
       src="<?php echo base_url()."index.php/admin/isitabel"?>"> </iframe>
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
