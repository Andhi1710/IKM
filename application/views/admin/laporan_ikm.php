<div class="page-header">
  <h3>Data ikm</h3>
</div>
<a class="btn btn-default btn-md" target="_blank" href="<?php echo base_url().'admin/laporan_print_ikm' ?>">
  <span class="fas fa-print"></span>
Print</a>
<a class="btn btn-danger btn-md" target="_blank" href="<?php echo base_url().'admin/laporan_pdf_ikm' ?>">
  <span class="fas fa-file-pdf"></span>
Cetak PDF</a>
<a class="btn btn-success" target="_blank" href="<?php echo base_url().'admin/laporan_excel_ikm' ?>">
  <span class="fas fa-file-excel"></span>
Download EXCEL</a>
<br><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>KBLI</th>
        <th>Badan Usaha</th>
        <th>Nama ikm</th>
        <th>Nama Pemilik</th>
        <th>Alamat Jalan</th>
        <th>Alamat Desa</th>
        <th>Alamat Kecamatan</th>
        <th>koordinat Lokasi</th>
        <th>Telepon</th>
        <th>Nama Komoditi</th>
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
      foreach ($ikm as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->kbli ?></td>
        <td><?php echo $a->badan_usaha ?></td>
        <td><?php echo $a->nama_ikm ?></td>
        <td><?php echo $a->nama_pemilik ?></td>
        <td><?php echo $a->jalan ?></td>
        <td><?php echo $a->desa ?></td>
        <td><?php echo $a->kecamatan ?></td>
        <td><?php echo $a->lokasi ?></td>
        <td><?php echo $a->telepon ?></td>
        <td><?php echo $a->komoditi ?></td>
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
    <?php } ?>
  </tbody>
</table>
</div>
