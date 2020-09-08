
  <h3>Edit ikm</h3>
</div>
<?php foreach ($ikm as $a){ ?>
<form action="<?php echo base_url().'admin/update_ikm' ?>" form name="page" id="page" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label>Badan Usaha</label>
    <input type="hidden" name="id_ikm" value="<?php echo $a->id_ikm; ?>">
    <input type="text" name="badan_usaha" class="form-control"  value="<?php echo $a->badan_usaha; ?>">
    <?php echo form_error('badan_usaha'); ?>
  </div>

  <div class="form-group">
    <label>Nama ikm</label>
    <input type="text" name="nama_ikm" class="form-control"  value="<?php echo $a->nama_ikm; ?>">
    <?php echo form_error('nama_ikm'); ?>
  </div>

    <div class="form-group">
      <label>Nama Pemilik</label>
      <input type="text" name="nama_pemilik" class="form-control"  value="<?php echo $a->nama_pemilik; ?>">
      <?php echo form_error('nama_pemilik'); ?>
    </div>

    <div class="form-group">
      <label>Alamat Jalan</label>
      <input type="text" name="jalan" class="form-control"  value="<?php echo $a->jalan; ?>">
      <?php echo form_error('jalan'); ?>
    </div>

    <div class="form-group">
      <label>Alamat Desa</label>
      <input type="text" name="desa" class="form-control"  value="<?php echo $a->desa; ?>">
      <?php echo form_error('desa'); ?>
    </div>

    <div class="form-group">
      <label>Alamat Kecamatan</label>
      <input type="text" name="kecamatan" class="form-control"  value="<?php echo $a->kecamatan; ?>">
      <?php echo form_error('kecamatan'); ?>
    </div>

    <div class="form-group">
      <label>Koordinat Lokasi</label>
      <input type="text" name="lokasi" class="form-control"  value="<?php echo $a->lokasi; ?>">
      <?php echo form_error('lokasi'); ?>
    </div>

    <div class="form-group">
      <label>Telepon</label>
      <input type="text" name="telepon" class="form-control"  value="<?php echo $a->telepon; ?>">
      <?php echo form_error('telepon'); ?>
    </div>

    <div class="form-group">
      <label>Komoditi</label>
      <input type="text" name="komoditi" class="form-control"  value="<?php echo $a->komoditi; ?>">
      <?php echo form_error('komoditi'); ?>
    </div>

    <div class="form-group">
      <label>KBLI</label>
      <input type="text" name="kbli" class="form-control"  value="<?php echo $a->kbli; ?>">
      <?php echo form_error('kbli'); ?>
    </div>

    <div class="form-group">
      <label>Legalitas</label>
      <input type="text" name="legalitas" class="form-control"  value="<?php echo $a->legalitas; ?>">
      <?php echo form_error('legalitas'); ?>
    </div>

    <div class="form-group">
      <label>Jenis Produksi</label>
      <input type="text" name="jenis_produk" class="form-control"  value="<?php echo $a->jenis_produk; ?>">
      <?php echo form_error('jenis_produk'); ?>
    </div>

    <div class="form-group">
      <label>Nilai Investasi</label>
      <input type="text" name="investasi" class="form-control"  value="<?php echo $a->investasi; ?>">
      <?php echo form_error('investasi'); ?>
    </div>

    <div class="form-group">
      <label>Kapasitas Produksi/tahun (Jumlah)</label>
      <input type="text" name="jumlah" class="form-control"  value="<?php echo $a->jumlah; ?>">
      <?php echo form_error('jumlah'); ?>
    </div>

    <div class="form-group">
      <label>Kapasitas Produksi/tahun (Satuan)</label>
      <input type="text" name="satuan" class="form-control"  value="<?php echo $a->satuan; ?>">
      <?php echo form_error('satuan'); ?>
    </div>

    <div class="form-group">
      <label>Nilai Produksi</label>
      <input type="text" name="nilai_produk" class="form-control"  value="<?php echo $a->nilai_produk; ?>">
      <?php echo form_error('nilai_produk'); ?>
    </div>

    <div class="form-group">
      <label>Jumlah Tenaga kerja Pria</label>
      <input type="text" name="tk_l" class="form-control"  value="<?php echo $a->tk_l; ?>">
      <?php echo form_error('tk_l'); ?>
    </div>

    <div class="form-group">
      <label>Jumlah Tenaga Kerja Perempuan</label>
      <input type="text" name="tk_p" class="form-control"  value="<?php echo $a->tk_p; ?>">
      <?php echo form_error('tk_p'); ?>
    </div>

    <div class="form-group">
      <label>Skala</label>
      <input type="skala" name="skala" class="form-control"  value="<?php echo $a->skala; ?>">
      <?php echo form_error('skala'); ?>
    </div>

    <div class="form-group">
      <label>Tahun</label>
      <input type="tahun" name="tahun" class="form-control"  value="<?php echo $a->tahun; ?>">
      <?php echo form_error('tahun'); ?>
    </div>

  <div class="form-group">
    <input type="submit" value="Update" class="btn btn-default">
		<input type="button" value="Kembali" class="btn btn-primary" onclick="window.history.go(-1)">
    <input  type="button" value="Hitung" class="btn btn-success" onclick="data()">
    <input  type="reset" value="ulang" class="btn btn-warning">
  </div>
  </form>
  <?php } ?>

  <script type="text/javascript">
      function data(){
      var investasi         = parseFloat(document.page.investasi.value);
      var tk_l              = parseFloat(document.page.tk_l.value);
      var tk_p              = parseFloat(document.page.tk_p.value);
      var jtk               = (tk_l+tk_p);
      var skala             = "";
      var kua               = "";

      if ((jtk > 20) && (investasi >= 15000000000))
      {
          skala="3";
          kua="Sangat Mantap";
      }
          else if ((jtk <= 20) && (investasi < 15000000000))
          {
              skala="2";
              kua="Cukup";
          }
          else if ((jtk < 19) && (investasi > 1000000000))
          {
              skala="2";
              kua="Cukup";
          }
          else if ((jtk < 19) && (investasi < 1000000000))
          {
              skala="1";
              kua="Kurang";
          }
              else
              {
                  skala="0";
                  kua="Tidak Lulus";
              }
          document.page.skala.value=skala;
          document.page.kua.value=kua;
          }
  </script>
