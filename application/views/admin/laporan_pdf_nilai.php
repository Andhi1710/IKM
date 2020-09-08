<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <style type="text/css">
 .table-data{
   width: 100%;
   border-collapse: collapse;
  }

  .table-data tr th,
  .table-data tr td{
   border:1px solid black;
   font-size: 10pt;
  }
 </style>

 <center><h3>Laporan Data ikm</h3></center>
<br>
<br>
 <table class="table-data">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Provinsi</th>
      <th>Kode Kabupaten</th>
      <th>Kode Kecamatan</th>
      <th>Kode Desa</th>
      <th>KBLI</th>
      <th>Nama IKM</th>
      <th>Nama Pemilik</th>
      <th>Nama Komoditi</th>
      <th>koordinat Lokasi</th>
      <th>Nilai</th>
      <th>Level</th>
      <th>Tahun</th>
      <th>Nilai</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $no = 1;
   foreach ($nilai_ikm as $a) {
   ?>
   <tr>
     <td><?php echo $no++; ?></td>
     <td><?php echo $a->prov ?></td>
     <td><?php echo $a->kab ?></td>
     <td><?php echo $a->kec ?></td>
     <td><?php echo $a->desa ?></td>
     <td><?php echo $a->kbli ?></td>
     <td><?php echo $a->nama_ikm ?></td>
     <td><?php echo $a->nama_pemilik ?></td>
     <td><?php echo $a->komoditi ?></td>
     <td><?php echo $a->lokasi ?></td>
     <td><?php echo $a->nilai ?></td>
     <td><?php echo $a->level ?></td>
     <td><?php echo $a->tahun ?></td>
     </td>
   </tr>
 <?php } ?>
 </tbody>
</table>
<br>
<br>
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
?>
</body>
</html>
