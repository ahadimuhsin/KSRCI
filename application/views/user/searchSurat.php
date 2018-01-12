<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KSR</title>
    <link href="<?php echo base_url()."css/bootstrap.css"?>" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/DT_bootstrap.css"?>">
    <link rel="stylesheet" href="<?php echo base_url()."css/layout.css"?>" type="text/css">
<script src="<?php echo base_url()."js/jquery.js"?>" type="text/javascript"></script>
<script src="<?php echo base_url()."js/bootstrap.js"?>" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."js/jquery.dataTables.js"?>"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url()."js/DT_bootstrap.js"?>"></script>
</head>
<style>
    body {margin:0;}

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .active {
        background-color: #4CAF50;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
        .container{
            width: 800px;

        }

    }
</style>
<body>
<div id="wrap">
    <div id="nav"></div>
    <div id="log">
        <a href="<?php echo base_url()."index.php/welcome/loginpage"?>"><h3><img width="50" height="50" src="<?php echo base_url()."image/login.png"?>" alt="Ikon Login" value="Login"></h3></a>
    </div>
    <div id="header">
        <img src="<?php echo base_url();?>image/logo-ksr.png" width="120" height="110">
        <h1>KSR PMI UNIT UNS</h1><h2>Mengabdi dengan Ikhlas, Berkarya Sepenuh Hati</h2>
    </div>
    <div class="topnav" id="nav">
        <a href="<?php echo base_url()."index.php/welcome"?>" >Home</a>
        <a href="<?php echo base_url()."index.php/welcome/lihatSurat"?>" class="active">Lihat Surat</a>
    </div>
<!--    <div class="konten">-->
            <div class="row-fluid">
                <div class="span12">
                    <div class="container">
                       <br>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                            <tr>
                                <th align="center">No Surat</th>
                                <th align="center">Nama Instansi</th>
                                <th align="center">Nama Acara</th>
                                <th align="center">Tanggal</th>
                                <th align="center">Tempat</th>
                                <th align="center">Kontak</th>
                                <th align="center">Lampiran</th>
                                <th align="center">Status Konfirmasi</th>
                            </tr>
                            </thead>
                            <?php foreach ($data as $surat) {?>
                                <tr>
                                    <td><?php echo $surat['no_surat'];?></td>
                                    <td><?php echo $surat['instansi'];?></td>
                                    <td><?php echo $surat['nama_acara'];?></td>
                                    <td><?php echo $surat['tanggal_acara'];?></td>
                                    <td><?php echo $surat['tempat_acara'];?></td>
                                    <td><?php echo $surat['kontak'];?></td>
                                    <td><?php echo $surat['url_lampiran'];?></td>
                                    <td><?php echo $surat['status_surat'];?></td>
                                </tr> <?php } ?>

                        </table>


<!--            </div>-->
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
            </div>
</body>
</html>
