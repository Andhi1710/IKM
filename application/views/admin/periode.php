<form method="post">
			<label>FILTER TAHUN</label>
			<select name="filter" id=filter>
	      <option value="2018">Tahun Terlama</option>
				<option value="2022">Tahun Terbaru</option>
	    </select>
			<input type="submit" value="FILTER" name="cek" class="btn btn-primary btn-xs">
		</form>
<table class="table table-bordered table-striped table-responsive">
	<thead class="thead-light">
		<tr>
      <th>No</th>
      <th>Badan Usaha</th>
      <th>Nama IKM</th>
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
		$kosong = count($ikm) == 0 ? '<tr><td colspan="11" class="text-center">Tidak ada data</td></tr>' : '';
		echo $kosong;
			$i=1;
			foreach($ikm as $a) :
		?>
			<tr>
        <td><?php echo $i++; ?></td>
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
		<?php $i++; endforeach;?>
	</tbody>
</table>
