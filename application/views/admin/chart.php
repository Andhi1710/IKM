
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url().'admin'?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Charts</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Nilai Investasi</div>
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

        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Nilai Produk</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
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
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Jumlah Tenaga Kerja</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
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
        </div>
<script>
var tahun_investasi =<?php echo $tahun_investasi ?>;
var nilai_investasi =<?php echo $nilai_investasi ?>;
</script>

<script>
var nama_pemilik =<?php echo $nama_pemilik ?>;
var nilai_produk =<?php echo $nilai_produk ?>;
</script>

<script>
var tk_l =<?php echo $sum_jumlah->tk_l;?>;
var tk_p =<?php echo $sum_jumlah->tk_p;?>;
</script>
  </div>
  <!-- /#wrapper -->

</body>

</html>
