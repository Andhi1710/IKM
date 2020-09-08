<style>
body {
  background-color: #F8F8F8;
}
div.cont {
  width: 450px;
  padding: 10px 80px 30px;
  background-color: white;
  margin: 20px auto;
  box-shadow: 1px 0px 10px, -1px 0px 10px ;
}
h1 {
  text-align: center;
  font-family: Cambria, "Times New Roman", serif;
}
table {
  border-collapse:collapse;
  border-spacing:0;
  border:1px black solid;
  width:100%
}
th, td {
  padding:8px 15px;
  border:1px black solid;
}
td:first-child {
  background-color: #F2F2F2;
}
img {
  width: 80%;
  display: block;
  margin: 0px auto;
  margin-bottom: 15px;
  box-shadow: 1px 0px 5px, -1px 0px 5px #FFF;
}
  </style>
<?php echo base_url().'admin/lihat_ikm' ?>
<?php
foreach ($ikm as $a) {
?>
<div class="cont">
			<h2>Data ikm</h2>
      <p id="tanggal"><?php echo date("d M Y"); ?></p>
			<table>
			<tr>
			  <td>Badan Usaha</td>
			  <td><?php echo $a->badan_usaha ?></td>
			</tr>
			<tr>
			  <td>Nama ikm</td>
			  <td><?php echo $a->nama_ikm ?></td>
			</tr>
			<tr>
			  <td>Nama Pemilik</td>
			  <td><?php echo $a->nama_pemilik ?></td>
			</tr>
			<tr>
			  <td>Jalan</td>
			  <td><?php echo $a->jalan ?></td>
			</tr>
			<tr>
			  <td>Desa</td>
			  <td><?php echo $a->desa ?></td>
			</tr>
			<tr>
			  <td>Kecamatan</td>
			  <td><?php echo $a->kecamatan ?></td>
			</tr>
			<tr>
			  <td>Koordinat Lokasi</td>
			  <td><?php echo $a->lokasi ?></td>
			</tr>
			<tr>
			  <td>Nomor Telepon</td>
			  <td><?php echo $a->telepon ?></td>
			</tr>
			<tr>
			  <td>Nama Komoditi</td>
			  <td><?php echo $a->komoditi ?></td>
			</tr>
      <tr>
        <td>KBLI</td>
        <td><?php echo $a->kbli ?></td>
      </tr>
      <tr>
        <td>Legalitas</td>
        <td><?php echo $a->legalitas ?></td>
      </tr>
      <tr>
        <td>Jenis Produksi</td>
        <td><?php echo $a->jenis_produk ?></td>
      </tr>
      <tr>
        <td>Nilai Investasi</td>
        <td><?php echo $a->investasi ?></td>
      </tr>
      <tr>
        <td>Kapasitas Produksi (Jumlah)</td>
        <td><?php echo $a->jumlah ?></td>
      </tr>
      <tr>
        <td>kapasitas Produksi (Satuan)</td>
        <td><?php echo $a->satuan ?></td>
      </tr>
      <tr>
        <td>Nilai Produksi</td>
        <td><?php echo $a->nilai_produk ?></td>
      </tr>
      <tr>
        <td>Tenaga Kerja Laki - Laki</td>
        <td><?php echo $a->tk_l ?></td>
      </tr>
      <tr>
        <td>Tenaga Kerja Perempuan</td>
        <td><?php echo $a->tk_p ?></td>
      </tr>
      <tr>
        <td>Skala</td>
        <td><?php echo $a->skala ?></td>
      </tr>
      <tr>
        <td>Tahun</td>
        <td><?php echo $a->tahun ?></td>
      </tr>
			</table>
      <br>
  <script type="text/javascript"> window.print();</script>
</div>
			<div class="clearfix"> </div>
		</div>
	</div>
  <?php } ?>
