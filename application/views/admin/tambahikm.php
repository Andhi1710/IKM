<div class="page-header">
  <h3>ikm Baru</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'admin/tambah_ikm_act' ?>" form name="page" id="page" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label>KBLI</label>
    <input type="text" name="kbli" class="form-control">
    <?php echo form_error('kbli'); ?>
  </div>

  <div class="form-group">
    <label>Badan Usaha</label>
    <input type="text" name="badan_usaha" class="form-control">
    <?php echo form_error('badan_usaha'); ?>
  </div>

  <div class="form-group">
    <label>Nama IKM</label>
    <input type="text" name="nama_ikm" class="form-control">
    <?php echo form_error('nama_ikm'); ?>
  </div>

    <div class="form-group">
      <label>Nama Pemilik</label>
      <input type="text" name="nama_pemilik" class="form-control">
      <?php echo form_error('nama_pemilik'); ?>
    </div>

    <div class="form-group">
      <label>Alamat Jalan</label>
      <input type="text" name="jalan" class="form-control">
      <?php echo form_error('jalan'); ?>
    </div>

    <div class="form-group">
      <label>Alamat Desa</label>
      <input type="text" name="desa" class="form-control">
      <?php echo form_error('desa'); ?>
    </div>

    <div class="form-group">
      <label>Alamat Kecamatan</label>
      <input type="text" name="kecamatan" class="form-control">
      <?php echo form_error('kecamatan'); ?>
    </div>

    <div class="form-group">
      <label>Koordinat Lokasi</label>
      <input type="text" name="lokasi" class="form-control">
      <?php echo form_error('lokasi'); ?>
    </div>

    <div class="form-group">
      <label>Telepon</label>
      <input type="text" name="telepon" class="form-control">
      <?php echo form_error('telepon'); ?>
    </div>

    <div class="form-group">
      <label>Komoditi</label>
      <input type="text" name="komoditi" class="form-control">
      <?php echo form_error('komoditi'); ?>
    </div>

    <div class="form-group">
      <label>Legalitas</label>
      <input type="text" name="legalitas" class="form-control">
      <?php echo form_error('legalitas'); ?>
    </div>

    <div class="form-group">
      <label>Jenis Produksi</label>
      <input type="text" name="jenis_produk" class="form-control">
      <?php echo form_error('jenis_produk'); ?>
    </div>

    <div class="form-group">
      <label>Nilai Investasi</label>
      <input type="text" name="investasi" class="form-control">
      <?php echo form_error('investasi'); ?>
    </div>

    <div class="form-group">
      <label>Kapasitas Produksi/tahun (Jumlah)</label>
      <input type="text" name="jumlah" class="form-control">
      <?php echo form_error('jumlah'); ?>
    </div>

    <div class="form-group">
      <label>Kapasitas Produksi/tahun (Satuan)</label>
      <input type="text" name="satuan" class="form-control">
      <?php echo form_error('satuan'); ?>
    </div>

    <div class="form-group">
      <label>Nilai Produksi</label>
      <input type="text" name="nilai_produk" class="form-control">
      <?php echo form_error('nilai_produk'); ?>
    </div>

    <div class="form-group">
      <label>Jumlah Tenaga kerja Pria</label>
      <input type="text" name="tk_l" class="form-control">
      <?php echo form_error('tk_l'); ?>
    </div>

    <div class="form-group">
      <label>Jumlah Tenaga Kerja Perempuan</label>
      <input type="text" name="tk_p" class="form-control">
      <?php echo form_error('tk_p'); ?>
    </div>

    <div class="form-group">
      <label>Skala</label>
      <input type="text" name="skala" class="form-control"readonly>
      <?php echo form_error('skala'); ?>
    </div>

    <div class="form-group">
      <label>Kualitas Skala</label>
      <input type="text" name="kua" class="form-control"readonly>
      <?php echo form_error('kua'); ?>
    </div>

    <div class="form-group">
      <label>Tahun</label>
      <input type="text" name="tahun" class="form-control">
      <?php echo form_error('tahun'); ?>
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input  type="button" value="Proses Skala" class="btn btn-success" onclick="data()">
      <input  type="reset" value="ulang" class="btn btn-warning">
    </div>
  </div>
</form>

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
