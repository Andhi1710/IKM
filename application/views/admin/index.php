
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url().'admin'?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-database"></i>
              </div>
              <div class="mr-5"><?php echo $this->M_ikm->get_data('ikm')->num_rows(); ?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/ikm' ?>">
              <span class="float-left">IKM yang Terdaftar</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><?php echo $sum_jumlah->investasi;?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/ikm' ?>">
              <span class="float-left">Jumlah Nilai Investasi</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $sum_jumlah->jumlah;?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/ikm' ?>">
              <span class="float-left">Jumlah Kapasitas Produksi</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-life-ring"></i>
              </div>
              <div class="mr-5"><?php echo $sum_jumlah->nilai_produk;?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/ikm' ?>">
              <span class="float-left">Jumlah Nilai Produksi</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-xl-6 col-sm-9 mb-6">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-male"></i>
                </div>
                <div class="mr-6"><?php echo $sum_jumlah->tk_l;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/ikm' ?>">
                <span class="float-left">Jumlah Pekerja Laki - Laki</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-sm-9 mb-6">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-female"></i>
                </div>
                <div class="mr-6"><?php echo $sum_jumlah->tk_p;?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/ikm' ?>">
                <span class="float-left">Jumlah Pekerja Perempuan</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
      </div>

      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-chart-area"></i>
          Nilai Investasi Pertahun</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>

        <div class="card-footer small text-muted"><?php
        $tanggal= mktime(date("m"),date("d"),date("Y"));
        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
        date_default_timezone_set('Asia/Jakarta');
        $jam=date("H:i:s");
        echo "| Pukul : <b>". $jam." "."</b>";
        $a = date ("H");
        ?></div>
      </div>

      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data Table</div>
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
      <td nowrap="nowrap">
        <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/data_ikm/'.$a->kbli; ?>"><span class="fas fa-info"></span></a>
        <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_ikm/'.$a->kbli; ?>"><span class="fas fa-edit"></span></a>
        <a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_ikm/'.$a->kbli; ?>"><span class="fas fa-backspace"></span></a>
      </td>
    </tr>
  <?php } ?>
</tbody>
</table>
          </div>
        </div>
        <div class="card-footer small text-muted"><?php
        $tanggal= mktime(date("m"),date("d"),date("Y"));
        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
        date_default_timezone_set('Asia/Jakarta');
        $jam=date("H:i:s");
        echo "| Pukul : <b>". $jam." "."</b>";
        $a = date ("H");
        ?></div>
      </div>

    </div>
    <!-- /.container-fluid -->
    <script>
    var tahun_investasi =<?php echo $tahun_investasi ?>;
    var nilai_investasi =<?php echo $nilai_investasi ?>;
    	</script>
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © AH 2019</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
