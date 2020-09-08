<div class="page-header">
  <h3>Data ikm</h3>
</div>
<a class="btn btn-default btn-md" target="_blank" href="<?php echo base_url().'admin/laporan_print_nilai' ?>">
  <span class="fas fa-print"></span>
Print</a>
<a class="btn btn-danger btn-md" target="_blank" href="<?php echo base_url().'admin/laporan_pdf_nilai' ?>">
  <span class="fas fa-file-pdf"></span>
Cetak PDF</a>
<a class="btn btn-success" target="_blank" href="<?php echo base_url().'admin/laporan_excel_nilai' ?>">
  <span class="fas fa-file-excel"></span>
Download EXCEL</a>
<br><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
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
        <th>Level</th>
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
        <td><?php echo $a->level ?></td>
        <td><?php echo $a->nilai ?></td>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
