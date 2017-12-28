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
<table id="customers">
  <tr>
    <th>No.Surat</th>
    <th>Nama Instansi</th>
    <th>Nama Acara</th>
      <th>Tanggal</th>
      <th>Tempat</th>
      <th>Lampiran</th>
      <th>Kontak</th>
      <th>Status</th>
  </tr>
    <?php foreach ($data as $surat) {?>
  <tr>
    <td><?php echo $surat['no_surat'];?></td>
      <td><?php echo $surat['instansi'];?></td>
      <td><?php echo $surat['nama_acara'];?></td>
      <td><?php echo $surat['tanggal_acara'];?></td>
      <td><?php echo $surat['tempat_acara'];?></td>
      <td><?php echo $surat['url_lampiran'];?></td>
      <td><?php echo $surat['kontak'];?></td>
      <td><?php echo $surat['status_surat'];?></td>
      <td><a href="<?php echo base_url()."index.php/admin/editt/"
              .$surat['no_surat'];?>">Edit</td>
  </tr> <?php } ?>

</table>
</body>
</html>
