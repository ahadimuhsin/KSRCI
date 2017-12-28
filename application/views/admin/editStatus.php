<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="framelayout.css">
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<br>
<form target="frmMain" action="<?php echo base_url()."";?>" method="post"
      enctype="multipart/form-data">
    <strong>No Surat:</strong>
    <input type="text" name="no_surat" size="45" value="<?php echo $no_surat;?>" readonly><br><br>
    <strong>Nama Instansi:</strong>
    <input type="text" name="instansi" size="45"  value="<?php echo $instansi;?>" readonly><br><br>
    <strong>Nama Acara:</strong>
    <input type="text" name="acara" size="45" value="<?php echo $acara;?>" readonly> <br><br>
    <strong>Tanggal:</strong>
    <input type="date" name="tanggal" size="45" value="<?php echo $tanggal;?>" readonly><br><br>
    <strong>Tempat:</strong>
    <input type="text" name="tempat" size="45" value="<?php echo $tempat;?>" readonly><br><br>
    <strong>Nomor Telpon :</strong>
    <input type="text" name="telepon" size="45" value="<?php echo $kontak;?>" readonly><br><br>
    <strong>Status:</strong>
    <div>
        <input type="radio" id="status1" name="status_surat"
               value="diterima">
        <label for="status1">Diterima</label>
        <input type="radio" id="status2" name="status_surat"
               value="ditolak">
        <label for="status2">Ditolak</label>
    </div>
    <input type="submit" name="userSubmit" value="Submit">

    </form>

</body>
</html>