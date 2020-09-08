<div class="page-header">
  <h3>Penilaian Baru</h3>
</div>
	<link href="<?=base_url()?>assets/css/component-chosen.min.css" rel="stylesheet">

<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>

<form action="<?php echo base_url().'admin/penilaian_ikm_act' ?>" form name="page" id="page" method="post" onsubmit="return false" enctype="multipart/form-data">


          <?php foreach ($ikm as $a) { ?>

        <?php } ?>


      <div class="form-group">
        <label>KBLI</label>
        <input type="text" name="kbli" id="kbli" class="form-control"  value="<?php echo $a->kbli; ?>"readonly>
        <?php echo form_error('kbli'); ?>
      </div>

      <div class="form-group">
        <label>Nama IKM</label>
        <input type="text" name="nama_ikm" id="nama_ikm" class="form-control"  value="<?php echo $a->nama_ikm; ?>"readonly>
        <?php echo form_error('nama_ikm'); ?>
      </div>

        <div class="form-group">
          <label>Nama Pemilik</label>
          <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control"  value="<?php echo $a->nama_pemilik; ?>"readonly>
          <?php echo form_error('nama_pemilik'); ?>
        </div>

        <div class="form-group">
          <label>Komoditi</label>
          <input type="text" name="komoditi" id="komoditi" class="form-control"  value="<?php echo $a->komoditi; ?>"readonly>
          <?php echo form_error('komoditi'); ?>
        </div>

          <div class="form-group">
            <label>lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control"  value="<?php echo $a->lokasi; ?>"readonly>
            <?php echo form_error('lokasi'); ?>
          </div>

          <div class="form-group">
            <label>Provinsi</label>
            <select name="prov" class="form-control">
              <option value="32">Jawa Barat</option>
            </select>
            <?php echo form_error('prov'); ?>
          </div>

          <div class="form-group">
            <label>Kabupaten</label>
            <select name="kab" class="form-control">
              <option value="02">Sukabumi</option>
            </select>
            <?php echo form_error('kab'); ?>
          </div>

          <div class="form-group">
            <label>Kecamatan</label>
            <select name="kec" id="kec" class="form-control chosen-select" onchange="tampilkan()">
              <option value="00">----PILIH------</option>
              <option value="19">Bantargadung</option>
              <option value="42">Bojonggenteng</option>
              <option value="35">Caringin</option>
              <option value="37">Ciambar</option>
              <option value="33">Cibadak</option>
              <option value="05">Cibitung</option>
              <option value="34">Cicantayan</option>
              <option value="38">Cicurug</option>
              <option value="12">Cidadap</option>
              <option value="39">Cidahu</option>
              <option value="10">Cidolog</option>
              <option value="01">Ciemas</option>
              <option value="46">Cikakak</option>
              <option value="22">Cikembar</option>
              <option value="44">Cikidang</option>
              <option value="07">Cimanggu</option>
              <option value="02">Ciracap</option>
              <option value="27">Cireunghas</option>
              <option value="31">Cisaat</option>
              <option value="45">Cisolok</option>
              <option value="13">Curug Kembar</option>
              <option value="24">Geger Bitung</option>
              <option value="32">Gunungguruh</option>
              <option value="06">Jampang Kulon</option>
              <option value="20">Jampang Tengah</option>
              <option value="47">Kabandungan</option>
              <option value="30">Kadudampit</option>
              <option value="43">Kalapa Nunggal</option>
              <option value="08">KaliBunder</option>
              <option value="26">Kebonpedes</option>
              <option value="15">Lengkong</option>
              <option value="36">Nagrak</option>
              <option value="23">Nyalindung</option>
              <option value="14">Pabuaran</option>
              <option value="16">Palabuhan Ratu</option>
              <option value="40">Parakan Salak</option>
              <option value="41">Parung Kuda</option>
              <option value="21">Purabaya</option>
              <option value="11">Sagaranten</option>
              <option value="17">Simpenan</option>
              <option value="29">Sukabumi</option>
              <option value="28">Sukalarang</option>
              <option value="25">Sukaraja</option>
              <option value="04">Surade</option>
              <option value="09">TegalBuleud</option>
              <option value="03">Waluran</option>
              <option value="18">Warungkiara</option>
            </select>
            <?php echo form_error('kec'); ?>
          </div>

          <div class="form-group">
            <label>Desa</label>
            <select name="desa" id="desa" class="form-control">
            </select>
            <?php echo form_error('desa'); ?>
          </div>

    <div class="form-group">
      <label>Suplier</label>
      <select name="suplier" class="form-control">
        <option value="1">1.Tidak Memiliki Supplier tetap, ketergantungan terhadap supplier sangat besar</option>
        <option value="2">2.Tidak Memiliki Supplier tetap, bahan baku tersedia dipasaran. Ketergantungan terhadap supplier cukup besar</option>
        <option value="3">3.Memiliki setidaknya 1 supplier tetap, bahan baku cukup tersedia di pasaran sehingga kecil ketergantungan thd supplier </option>
        <option value="4">4.Memiliki beberapa supplier tetap tapi masih terbatas sehingga masih ada ketergantungan thd supplier</option>
        <option value="5">5.Tidak memerlukan supplier atau memiliki supplier tetap dengan banyak pilihan supplier sehingga hampir tidak ada ketergantungan thd supplier</option>
      </select>
      <?php echo form_error('suplier'); ?>
    </div>

    <div class="form-group">
      <label>Legalitas</label>
      <select name="legal" class="form-control">
        <option value="1">1.Tidak memiliki dokumen legalitas</option>
        <option value="2">2.Memiliki 1 dokumen legalitas</option>
        <option value="3">3.Legalitas Masih Kurang lengkap (baru sekitar 50% dokumen tersedia)</option>
        <option value="4">4.Legalitas hampir lengkap (kurang 1 atau 2 dokumen)</option>
        <option value="5">5.Memiliki legalitas lengkap</option>
      </select>
      <?php echo form_error('legal'); ?>
    </div>

    <div class="form-group">
      <label>Kontinuitas</label>
      <select name="kontinuitas" class="form-control">
        <option value="1">1.produksi tidak menentu, tidak punya pelanggan</option>
        <option value="2">2.produksi tidak menentu, pelanggan masih sedikit dan tidak konstan</option>
        <option value="3">3.produksi stabil/konstan, sedikit pelanggan tetap, lebih banyak pembeli musiman</option>
        <option value="4">4.produksi stabil/konstan, lebih banyak pelanggan tetap daripada pembeli musiman</option>
        <option value="5">5.produksi stabil, cenderung meningkat, sebagian besar pelanggan tetap</option>
      </select>
      <?php echo form_error('kontinuitas'); ?>
    </div>

    <div class="form-group">
      <label>Pangsa Pasar</label>
      <select name="pangsa" class="form-control">
        <option value="1">1.Tidak jelas pangsa pasarnya, tidak menentu</option>
        <option value="2">2.Pangsa pasar kabupaten/kota sukabumi</option>
        <option value="3">3.Pangsa pasar jawa barat, mulai menggunakan e-commerce</option>
        <option value="4">4.Pangsa pasar pulau jawa, atau e-commerce</option>
        <option value="5">5.Pangsa pasar nasional, ada yang dieksport, menggunakan e-commerce</option>
      </select>
      <?php echo form_error('pangsa'); ?>
    </div>

    <div class="form-group">
      <label>Kompetensi</label>
      <select name="kompetensi" class="form-control">
        <option value="1">1.Tidak ada yg bersertifikat</option>
        <option value="2">2.< 25% tenaga kerja bersertifikat</option>
        <option value="3">3.25% < tenaga kerja bersertifikat < 50% </option>
        <option value="4">4.50% < tenaga kerja bersertifikat < 75% </option>
        <option value="5">5.> 75% tenaga kerja bersertifikat</option>
      </select>
      <?php echo form_error('kompetensi'); ?>
    </div>

    <div class="form-group">
      <label>Jumlah Tenaga Kerja</label>
      <select name="jtk" class="form-control">
        <option value="1">1.Tidak ada tenaga kerja tetap/tidak mempunyai tenaga kerja</option>
        <option value="2">2.< 25% tenaga kerja tetap</option>
        <option value="3">3.25% < tenaga kerja tetap < 50% </option>
        <option value="4">4.50% < tenaga kerja tetap < 75% </option>
        <option value="5">5.> 75% tenaga kerja tetap</option>
      </select>
      <?php echo form_error('jtk'); ?>
    </div>

    <div class="form-group">
      <label>Produksi</label>
      <select name="produksi" class="form-control">
        <option value="1">1.Belum menerapkan manajemen produksi</option>
        <option value="2">2.Sudah mulai menerapkan alur proses produksi</option>
        <option value="3">3.Memiliki beberapa SOP dan menerapkan alur proses produksi</option>
        <option value="4">4.Menerapkan manajemen produksi secara lengkap (perencanaan, pengadaan, pengaturaan proses, dan melakukan quality control)</option>
        <option value="5">5.Menerapkan manajemen produksi secara lengkap (perencanaan, pengadaan, pengaturaan proses, dan melakukan quality assurance)</option>
      </select>
      <?php echo form_error('produksi'); ?>
    </div>

    <div class="form-group">
      <label>Adm/Keuangan</label>
      <select name="adm" class="form-control">
        <option value="1">1.Tidak ada pembukuan, belum menerapkan manajemen administrasi-keuangan</option>
        <option value="2">2.Sudah ada pencatatan penjualan dan pembelanjaan secara sederhana, kurang konsisten dalam pelaksanaannya</option>
        <option value="3">3.Memiliki sistem administrasi-keuangan sederhana</option>
        <option value="4">4.Memiliki sistem administrasi-keuangan yang lengkap, laporan tahunan (neraca) tidak selalu dibuat</option>
        <option value="5">5.Memiliki sistem administrasi-keuangan yang lengkap, laporan tahunan (neraca) selalu dibuat</option>
      </select>
      <?php echo form_error('adm'); ?>
    </div>

    <div class="form-group">
      <label>Nilai</label>
      <input type="text" name="nilai" class="form-control"readonly>
      <?php echo form_error('nilai'); ?>
    </div>

    <div class="form-group">
      <label>Level</label>
      <input type="text" name="level" class="form-control"readonly>
      <?php echo form_error('level'); ?>
    </div>

    <div class="form-group">
      <label>Tahun</label>
      <input type="text" name="tahun" class="form-control" value="<?php echo $a->tahun; ?>"readonly>
      <?php echo form_error('tahun'); ?>
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input  type="button" value="Hitung" class="btn btn-success" onclick="data()">
      <input  type="reset" value="ulang" class="btn btn-warning">
    </div>
  </div>
</form>

<script type="text/javascript">
    function data(){
    var suplier         = parseFloat(document.page.suplier.value);
    var legal           = parseFloat(document.page.legal.value);
    var kontinuitas     = parseFloat(document.page.kontinuitas.value);
    var pangsa          = parseFloat(document.page.pangsa.value);
    var kompetensi      = parseFloat(document.page.kompetensi.value);
    var jtk             = parseFloat(document.page.jtk.value);
    var produksi        = parseFloat(document.page.produksi.value);
    var adm             = parseFloat(document.page.adm.value);
    var hasil           = "";
    var level           = "";
    var na = (0.15*suplier)+(0.05*legal)+(0.12*kontinuitas)+(0.35*pangsa)+(0.18*kompetensi)+(0.05*jtk)+(0.03*produksi)+(0.07*adm);
        if ((na >= 4) && (na <=5))
        {
            level="4";
            ket="sangat Mantap";
        }
            else if ((na > 3) && (na<4))
            {
                level="3";
                ket="Mantap";
            }
            else if ((na >= 2) && (na<3))
            {
                level="2";
                ket="cukup";
            }
            else if ((na >= 1) && (na<2))
            {
                level="1";
                ket="kurang mantap";
            }
                else
                {
                    level="0";
                    ket="Tidak Lulus";
                }
            document.page.nilai.value=na;
            document.page.level.value=level;
        }
</script>

<script>
function tampilkan(){
  var daerah=document.getElementById("page").kec.value;
  if (daerah=="01")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cibenda</option><option value='02'>Ciwaru</option><option value='03'>Tamanjaya</option><option value='04'>Mekarjaya</option><option value='05'>Ciemas</option><option value='06'>Girimukti</option><option value='07'>Mandrajaya</option><option value='08'>Mekarsakti</option>";
  }
  else if (daerah=="02")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Gunungbatu</option><option value='02'>Cikangkung</option><option value='03'>Purwasedar</option><option value='04'>Ciracap</option><option value='05'>Pasirpanjang</option><option value='06'>Mekarsari</option><option value='07'>Pangumbahan</option><option value='08'>Ujung Genteng</option>";
  }
  else if (daerah=="03")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Caringin Nunggal</option><option value='02'>Waluran</option><option value='03'>Sukamukti</option><option value='04'>Mekarmukti</option><option value='05'>Waluran Mandiri</option>";
  }
  else if (daerah=="04")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Pasiripis</option><option value='02'>Bumiwangi</option><option value='03'>Cipeundeuy</option><option value='04'>Gunung Sungging</option><option value='05'>Citanglar</option><option value='06'>Jagamukti</option><option value='07'>Swakarya</option><option value='08'>Kadaleman</option><option value='09'>Warnasari</option><option value='10'>Sirnasari</option><option value='11'>Sukatani</option>";
  }
  else if (daerah=="05")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cidahu</option><option value='02'>Cibitung</option><option value='03'>Banyuwangi</option><option value='04'>Cibodas</option><option value='05'>Banyumurni</option><option value='06'>Talagamurni</option>";
  }
  else if (daerah=="06")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Ciparay</option><option value='02'>Bojong Genteng</option><option value='03'>Bojongsari</option><option value='04'>Mekarjaya</option><option value='05'>Nagraksari</option><option value='06'>Jampang Kulon</option><option value='07'>Tanjung</option><option value='08'>Padajaya</option><option value='09'>Cikarang</option><option value='10'>Karanganyar</option>";
  }
  else if (daerah=="07")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Boregah Indah</option><option value='02'>Cimanggu</option><option value='03'>Sukamaju</option><option value='04'>Sukajadi</option><option value='05'>Karangmekar</option><option value='06'>Sukamanah</option>";
  }
  else if (daerah=="08")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cimahpar</option><option value='02'>Sekarsari</option><option value='03'>Kalibunder</option><option value='04'>Sukaluyu</option><option value='05'>Bojong</option><option value='06'>Balekembang</option><option value='07'>Mekarwangi</option>";
  }
  else if (daerah=="09")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Sumberjaya</option><option value='02'>Buniasih</option><option value='03'>Tegalbuleud</option><option value='04'>Calincing</option><option value='05'>Rambay</option><option value='06'>Nagela</option><option value='07'>Bangbayang</option><option value='08'>Sirnamekar</option>";
  }
  else if (daerah=="10")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cidolog</option><option value='02'>Mekarjaya</option><option value='03'>Cikarang</option><option value='04'>Cipamingkis</option><option value='05'>Tegallega</option>";
  }
  else if (daerah=="11")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Sinar Bentang</option><option value='02'>Gunung Bentang</option><option value='03'>Pasanggrahan</option><option value='04'>Curugluhur</option><option value='06'>Datarnangka</option><option value='07'>Sagarnaten</option><option value='08'>Margaluyu</option><option value='09'>Cibitung</option><option value='10'>Hegarmanah</option><option value='11'>Cibaregbeg</option><option value='12'>Puncakmanggis</option>";
  }
  else if (daerah=="12")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Hegarmulya</option><option value='02'>Cidadap</option><option value='03'>Padasenang</option><option value='04'>Banjarsari</option>";
  }
  else if (daerah=="13")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cimenteng</option><option value='02'>Curug Kembar</option><option value='03'>Tanjungsari</option><option value='04'>Sindangraja</option><option value='05'>Mekartanjung</option><option value='06'>Bojongtugu</option>";
  }
  else if (daerah=="14")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Sukajaya</option><option value='02'>Ciwalat</option><option value='03'>Pabuaran</option><option value='04'>Cibadak</option><option value='05'>Sirnasari</option><option value='06'>Bantarsari</option><option value='07'>Lembursawah</option>";
  }
  else if (daerah=="15")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Langkapjaya</option><option value='02'>Cilangkap</option><option value='03'>Lengkong</option><option value='04'>Tegalega</option><option value='05'>Neglasari</option>";
  }
  else if (daerah=="16")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Citarik</option><option value='02'>Pelabuhanratu</option><option value='03'>Citepus</option><option value='04'>Cibodas</option><option value='05'>Bumiwangi</option><option value='06'>Cikadu</option><option value='07'>Pasirsuren</option><option value='08'>Tonjong</option>";
  }
  else if (daerah=="17")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cihaur</option><option value='02'>Kertajaya</option><option value='03'>Loji</option><option value='04'>Cidadap</option><option value='05'>Cibuntu</option><option value='06'>Mekarasih</option>";
  }
  else if (daerah=="18")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Hegarmanah</option><option value='02'>Bantarkalong</option><option value='03'>Sirnajaya</option><option value='04'>Bojongkerta</option><option value='05'>Ubrug</option><option value='06'>Girijaya</option><option value='07'>Warungkiara</option><option value='08'>Sukaharja</option><option value='09'>Tarisi</option><option value='10'>Darmaraja</option>";
  }
  else if (daerah=="19")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Bantargebang</option><option value='02'>Bojonggaling</option><option value='03'>Bantargadung</option><option value='04'>Mangunjaya</option><option value='05'>Limusnunggal</option><option value='06'>Buanajaya</option><option value='07'>Boyongsari</option>";
  }
  else if (daerah=="20")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Bantarpanjang</option><option value='02'>Bojongtipar</option><option value='03'>Cijulang</option><option value='04'>Nangerang</option><option value='05'>Bojong Jengkol</option><option value='06'>Bantar Agung</option><option value='07'>Jampang Tengah</option><option value='08'>Panumbangan</option><option value='09'>Sindangresmi</option><option value='10'>Tanjungsari</option><option value='11'>Padabeunghar</option>";
  }
  else if (daerah=="21")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Neglasari</option><option value='02'>Cicukang</option><option value='03'>Margaluyu</option><option value='04'>Purabaya</option><option value='05'>Pagelaran</option><option value='06'>Citamiang</option><option value='07'>Cimerang</option>";
  }
  else if (daerah=="22")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Sukamaju</option><option value='02'>Cibatu</option><option value='03'>Parakanlima</option><option value='04'>Kertaraharja</option><option value='05'>Bojong</option><option value='06'>Bojongkembar</option><option value='07'>Cikembar</option><option value='08'>Cimanggu</option><option value='09'>Sukamulya</option>";
  }
  else if (daerah=="23")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cisitu</option><option value='02'>Nyalindung</option><option value='03'>Kertaangsana</option><option value='04'>Mekarsari</option><option value='05'>Bojongkalong</option><option value='06'>Bojongsari</option><option value='07'>Sukamaju</option><option value='08'>Wangunreja</option><option value='09'>Neglasari</option><option value='10'>Cijangkar</option>";
  }
  else if (daerah=="24")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Ciengang</option><option value='02'>Sukamanah</option><option value='03'>Gegerbitung</option><option value='04'>Cijuray</option><option value='05'>Karangjaya</option><option value='06'>Buniwangi</option><option value='07'>Caringin</option>";
  }
  else if (daerah=="25")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Selawangi</option><option value='02'>Pasirhalang</option><option value='03'>Sukaraja</option><option value='04'>Sukamekar</option><option value='05'>Cisarua</option><option value='06'>Limbangan</option><option value='07'>Langensari</option><option value='08'>Selaawi</option><option value='09'>Margaluyu</option>";
  }
  else if (daerah=="26")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Sasagaran</option><option value='02'>Jambenenggang</option><option value='03'>Cikaret</option><option value='04'>Kebonpedes</option><option value='05'>Bojongsawah</option>";
  }
  else if (daerah=="27")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Cipurut</option><option value='02'>Cireunghas</option><option value='03'>Bencoy</option><option value='04'>Cikurutug</option><option value='05'>Tegalpanjang</option>";
  }
  else if (daerah=="28")
  {
        document.getElementById("desa").innerHTML="<option value='01'>Semplak</option><option value='02'>Prianganjaya</option><option value='03'>Titisan</option><option value='04'>Cimangkok</option><option value='05'>Sukalarang</option><option value='06'>Sukamaju</option>";
  }
    else  if (daerah=="29")
    {
        document.getElementById("desa").innerHTML="<option value='01'>Parungseah</option><option value='02'>Wamasari</option><option value='03'>Sukajaya</option><option value='04'>Sudajaya Girang</option><option value='05'>Karawang</option><option value='06'>Perbawati</option>";
    }
    else if (daerah=="30")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Muaradua</option><option value='02'>Citamiang</option><option value='03'>Cikahuripan</option><option value='04'>Sukamanis</option><option value='05'>Kadudampit</option><option value='06'>Gedepangrang</option><option value='07'>Sukamaju</option><option value='08'>Cipetir</option><option value='09'>Undrus Binangun</option>";
    }
    else if (daerah=="31")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Padaasih</option><option value='02'>Cisaat</option><option value='03'>Babakan</option><option value='04'>Sukamantri</option><option value='05'>Sukamanah</option><option value='06'>Nagrak</option><option value='07'>Cibatu</option><option value='08'>Cibolang Kaler</option><option value='09'>Kutasirna</option><option value='10'>Selajambe</option><option value='11'>Sukasari</option><option value='12'>Gunungjaya</option><option value='13'>Sukaresmi</option>";
    }
    else if (daerah=="32")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Sirnaresmi</option><option value='02'>Kebonmanggu</option><option value='03'>Gunungguruh</option><option value='04'>Cikujang</option><option value='05'>Cibentang</option><option value='06'>Cibolang</option><option value='07'>Mangkalaya</option>";
    }
    else if (daerah=="33")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Neglasari</option><option value='02'>Tenjojaya</option><option value='03'>Sekarwangi</option><option value='04'>Batununggal</option><option value='05'>Karangtengah</option><option value='06'>Cibadak</option><option value='07'>Warnajati</option><option value='08'>Sukasirna</option><option value='09'>Pamuruyan</option><option value='10'>Ciheulang Tonggoh</option>";
    }
    else if (daerah=="34")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Hegarmanah</option><option value='02'>Cicantayan</option><option value='03'>Cimahi</option><option value='04'>Cisande</option><option value='05'>Cijalingan</option><option value='06'>Lembursawah</option><option value='07'>Sukadamai</option>";
    }
    else if (daerah=="35")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Cijengkol</option><option value='02'>Mekarjaya</option><option value='03'>Talaga</option><option value='04'>Caringin Kulon</option><option value='05'>Caringin Wetan</option><option value='06'>Seuseupan</option><option value='07'>Sukamulya</option><option value='08'>Cikembang</option><option value='09'>Pasirdatar Indah</option>";
    }
    else if (daerah=="36")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Cisarua</option><option value='02'>Balekembang</option><option value='03'>Nagrak Selatan</option><option value='04'>Nagrak Utara</option><option value='05'>Kalaparea</option><option value='06'>Darmareja</option><option value='07'>Girijaya</option><option value='08'>Babakanpanjang</option><option value='09'>Pawenang</option><option value='10'>Cihanyawar</option>";
    }
    else if (daerah=="37")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Munjul</option><option value='02'>Ciambar</option><option value='03'>Ginanjar</option><option value='04'>Wangunjaya</option><option value='05'>Cibunarjaya</option>";
    }
    else if (daerah=="38")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Mekarsari</option><option value='02'>Nyangkowek</option><option value='03'>Purwasari</option><option value='04'>Caringin</option><option value='05'>Bangbayang</option><option value='06'>Cisaat</option><option value='07'>Tenjolaya</option><option value='08'>Pasawahan</option><option value='09'>Cicurug</option><option value='10'>Nanggerang</option><option value='11'>Tenjoayu</option><option value='12'>Benda</option><option value='13'>Kutajaya</option>";
    }
    else if (daerah=="39")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Pondok Kaso Tengah</option><option value='02'>Pasirdoton</option><option value='03'>Pondok Kaso Tonggoh</option><option value='04'>Babakan Pari</option><option value='05'>Tangkil</option><option value='06'>Jayabakti</option><option value='07'>Cidahu</option><option value='08'>Girijaya</option>";
    }
    else if (daerah=="40")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Sukatani</option><option value='02'>Sukakersa</option><option value='03'>Bojonglongok</option><option value='04'>Bojongasih</option><option value='05'>Lebaksari</option><option value='06'>Parakansalak</option>";
    }
    else if (daerah=="41")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Palasari Hilir</option><option value='02'>Sunda Wenang</option><option value='03'>Parung Kuda</option><option value='04'>Langensari</option><option value='05'>Bojong Kokosan</option><option value='06'>Kompa</option><option value='07'>Pondok Kaso Landeuh</option><option value='08'>Babakanjaya</option>";
    }
    else if (daerah=="42")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Berekah</option><option value='02'>Bojonggenteng</option><option value='03'>Bojonggaling</option><option value='04'>Cibodas</option><option value='05'>Cipanengah</option>";
    }
    else if (daerah=="43")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Walangsari</option><option value='02'>Palasari Girang</option><option value='03'>Kalapanunggal</option><option value='04'>Kadununggal</option><option value='05'>Makasari</option><option value='06'>Gunung Endut</option><option value='07'>Pulosari</option>";
    }
    else if (daerah=="44")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Sampora</option><option value='02'>Cijambe</option><option value='03'>Cikiray</option><option value='04'>Mekarnangka</option><option value='05'>Cikidang</option><option value='06'>Gunung Malang</option><option value='07'>Nangka Koneng</option><option value='08'>Pangkalan</option><option value='09'>Bumisari</option><option value='010'>Cicareuh</option><option value='11'>Tamansari</option><option value='12'>Cikarae Thoyibah</option>";
    }
    else if (daerah=="45")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Pasirbaru</option><option value='02'>Cikahuripan</option><option value='03'>Cisolok</option><option value='04'>Karangpapak</option><option value='05'>Sirnaresmi</option><option value='06'>Cicadas</option><option value='07'>Cikelat</option><option value='08'>Gunung Kramat</option><option value='09'>Gunung Tanjung</option><option value='10'>Caringin</option><option value='11'>Sukarame</option>";
    }
    else if (daerah=="46")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Cimaja</option><option value='02'>Cikakak</option><option value='03'>Sukamaju</option><option value='04'>Cileungsing</option><option value='05'>Ridogalih</option><option value='06'>Margalaksana</option><option value='07'>Sirnarasa</option><option value='08'>Gandasoli</option>";
    }
    else if (daerah=="47")
    {
          document.getElementById("desa").innerHTML="<option value='01'>Mekarjaya</option><option value='02'>Tugubandung</option><option value='03'>Kabandungan</option><option value='04'>Cipeuteuy</option><option value='05'>Cihamerang</option><option value='06'>Cianaga</option>";
    }
      else if (daerah=="00")
      {
        document.getElementById("desa").innerHTML="<option value='00'>Tidak ada tempat yang dipilih</option>";
      }
}
</script>
