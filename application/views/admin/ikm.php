<div class="page-header">
  <h3>Data IKM</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_ikm'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> IKM Baru</a>
<br><br>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data IKM</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
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
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($ikm as $a) {
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
        <td nowrap="nowrap">
          <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/data_ikm/'.$a->id_ikm; ?>"><span class="fas fa-info"></span></a>
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_ikm/'.$a->id_ikm; ?>"><span class="fas fa-edit"></span></a>
          <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_ikm/'.$a->id_ikm; ?>"><span class="fas fa-trash"></span></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
