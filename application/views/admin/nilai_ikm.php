<div class="page-header">
  <h3>Data Nilai IKM</h3>
</div>
<a href="<?php echo base_url().'admin/penilaian_ikm'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Penilaian Baru</a>
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
        <th>Pilihan</th>
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
        <td nowrap="nowrap">
          <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/data_ikm/'.$a->id_ikm; ?>"><span class="fas fa-info"></span></a>
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_penilaian/'.$a->id_ikm; ?>"><span class="fas fa-edit"></span></a>
          <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_penilaian/'.$a->id_ikm; ?>"><span class="fas fa-trash"></span></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
