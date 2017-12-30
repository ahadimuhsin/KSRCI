<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url()."css/style.css"?>">
</head>
<style media="screen">
    .clearfix {
        overflow: auto;
    }
</style>
<body>
<div class="konten">
    <div class="kepala">
        <div class="lock"></div>
        <h2 class="judul">Edit Status Surat</h2>
    </div>
    <div class="artikel">
        <form  action="<?php echo base_url()."index.php/admin/update_data";?>" method="post"
                  enctype="multipart/form-data">
            <div class="grup">
                <label for="no_surat">No Surat</label>
                <input type="text" name="no_surat" readonly value="<?php echo $no_surat;?>">
            </div>
            <div class="grup">
                <label for="instansi">Nama Instansi</label>
                <input type="text" name="instansi" value="<?php echo $instansi;?>" readonly>
            </div>
            <div class="grup">
                <label for="nama_acara">Nama Acara</label>
                <input type="text" name="nama_acara" readonly value="<?php echo $nama_acara;?>">
            </div>
            <div class="grup">
                <label for="tanggal_acara">Tanggal</label>
                <input type="date" name="tanggal_acara" value="<?php echo $tanggal_acara;?>" readonly>
            </div>
            <div class="grup">
                <label for="tempat_acara">Tempat</label>
                <input type="text" name="tempat_acara" value="<?php echo $tempat_acara;?>" readonly>
            </div>
            <div class="grup">
                <label for="kontak">No Telpon</label>
                <input type="password" name="kontak" value="<?php echo $kontak;?>" readonly>
            </div>
            <div class="aaa">
                <div class="clearfix">
                    <label for="status">Status</label>&nbsp &nbsp
                    <input type="radio" name="status_surat" value="Diterima"> Diterima &nbsp &nbsp
                    <input type="radio" name="status_surat" value="Ditolak"> Ditolak
                </div>
            </div>
            <div class="grup">
                <br> <br> <br> <br>
                <input type="submit" value="Submit">
                <br> <br> <br>
            </div>
    </div>
    </form>
</div>
</body>
</html>
