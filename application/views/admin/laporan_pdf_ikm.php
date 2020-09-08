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
     <th>Badan Usaha</th>
     <th>Nama ikm</th>
     <th>Nama Pemilik</th>
     <th>Alamat Jalan</th>
     <th>Alamat Desa</th>
     <th>Alamat Kecamatan</th>
     <th>koordinat Lokasi</th>
     <th>Telepon</th>
     <th>Nama Komoditi</th>
     <th>KBLI</th>
     <th>Legalitas</th>
     <th>Jenis Produksi</th>
     <th>Nilai Investasi</th>
     <th>Kapasitas Produksi (Jumlah)</th>
     <th>kapasitas Produksi (Satuan)</th>
     <th>Nilai Produksi</th>
     <th>Jumlah Tenaga Kerja Laki - Laki</th>
     <th>Jumlah Tenaga Kerja Perempuan</th>
     <th>Skala</th>
     <th>Tahun</th>
   </tr>
  </thead>
  <tbody>
   <?php
   $no = 1;
   foreach($ikm as $a){
   ?>
   <tr>
     <td><?php echo $no++; ?></td>
     <td><?php echo $a->badan_usaha ?></td>
     <td><?php echo $a->nama_ikm ?></td>
     <td><?php echo $a->nama_pemilik ?></td>
     <td><?php echo $a->jalan ?></td>
     <td><?php echo $a->desa ?></td>
     <td><?php echo $a->kecamatan ?></td>
     <td><?php echo $a->lokasi ?></td>
     <td><?php echo $a->telepon ?></td>
     <td><?php echo $a->komoditi ?></td>
     <td><?php echo $a->kbli ?></td>
     <td><?php echo $a->legalitas ?></td>
     <td><?php echo $a->jenis_produk ?></td>
     <td><?php echo $a->investasi ?></td>
     <td><?php echo $a->jumlah ?></td>
     <td><?php echo $a->satuan ?></td>
     <td><?php echo $a->nilai_produk ?></td>
     <td><?php echo $a->tk_l ?></td>
     <td><?php echo $a->tk_p ?></td>
     <td><?php echo $a->skala ?></td>
     <td><?php echo $a->tahun ?></td>
   </tr>
   <?php
  }
  ?>
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
