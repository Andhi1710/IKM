<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //cek Login
    if($this->session->userdata('status') != "login"){
      redirect(base_url().'welcome?pesan=belumlogin');
    }
  }

  function index(){
    $data['ikm'] = $this->db->query("select * from ikm order by id_ikm desc limit 10")->result();

    $data['sum_jumlah'] = $this->M_ikm->get_sum();
    $tahun_sekarang = date('Y') - 5 ;
    $tahun_investasi = $this->db->limit(5)->select('tahun')->where('tahun >',$tahun_sekarang)->get('ikm')->result();
    $nilai_investasi = $this->db->limit(5)->select('investasi')->where('tahun >',$tahun_sekarang)->get('ikm')->result();

    foreach($tahun_investasi as $v) {
      $data['tahun_investasi'][] = $v->tahun;
    }
    foreach($nilai_investasi as $v) {
      $data['nilai_investasi'][] = $v->investasi;
    }

    $data['tahun_investasi']= json_encode($data['tahun_investasi']);
    $data['nilai_investasi']= json_encode($data['nilai_investasi']);
    $this->load->view('admin/header');
    $this->load->view('admin/index',$data);
    $this->load->view('admin/footer');
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'welcome?pesan=logout');
  }

  function ganti_password(){
    $data['admin'] = $this->M_ikm->get_data('admin')->result();

    $this->load->view('admin/header');
    $this->load->view('admin/ganti_password');
    $this->load->view('admin/footer');
  }

  function ganti_password_act(){
    $pass_baru = $this->input->post('pass_baru');
    $ulang_pass = $this->input->post('ulang_pass');

    $this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
    $this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');
    if($this->form_validation->run() != false){
      $data = array('password' =>md5($pass_baru));
      $where = array('id_admin' => $this->session->userdata('id_ikm'));
      $this->M_ikm->update_data('admin',$data,$where);
      redirect(base_url().'admin/ganti_password?pesan=berhasil');
    }else{
      $this->load->view('admin/header');
      $this->load->view('admin/ganti_password');
      $this->load->view('admin/footer');
    }
    }

    function ikm(){
      $data['ikm'] = $this->M_ikm->get_data('ikm')->result();
      $this->load->view('admin/header');
      $this->load->view('admin/ikm',$data);
      $this->load->view('admin/footer');
    }

    function nilai_ikm(){
      $data['nilai_ikm'] = $this->M_ikm->get_data('nilai_ikm')->result();
      $this->load->view('admin/header');
      $this->load->view('admin/nilai_ikm',$data);
      $this->load->view('admin/footer');
    }

    function tambah_ikm(){
      $this->load->view('admin/header');
      $this->load->view('admin/tambahikm');
      $this->load->view('admin/footer');
    }

    function penilaian_ikm(){
      $data['ikm'] = $this->M_ikm->get_data('ikm')->result();

      $this->load->view('admin/header');
      $this->load->view('admin/penilaianikm',$data);
      $this->load->view('admin/footer');
    }

    function tambah_ikm_act(){
      $kbli = $this->input->post('kbli');
      $badan_usaha = $this->input->post('badan_usaha');
      $nama_ikm = $this->input->post('nama_ikm');
      $nama_pemilik = $this->input->post('nama_pemilik');
      $jalan = $this->input->post('jalan');
      $desa = $this->input->post('desa');
      $kecamatan = $this->input->post('kecamatan');
      $lokasi = $this->input->post('lokasi');
      $telepon = $this->input->post('telepon');
      $komoditi = $this->input->post('komoditi');
      $legalitas = $this->input->post('legalitas');
      $jenis_produk = $this->input->post('jenis_produk');
      $investasi = $this->input->post('investasi');
      $jumlah = $this->input->post('jumlah');
      $satuan = $this->input->post('satuan');
      $nilai_produk = $this->input->post('nilai_produk');
      $tk_l = $this->input->post('tk_l');
      $tk_p = $this->input->post('tk_p');
      $skala = $this->input->post('skala');
      $tahun = $this->input->post('tahun');
      $this->form_validation->set_rules('nama_ikm','nama_ikm','required');
      $this->form_validation->set_rules('nama_pemilik','nama_pemilik','required');
      $this->form_validation->set_rules('telepon','telepon','required');
      if($this->form_validation->run() != false){
          $data = array(
            'kbli' => $kbli,
            'badan_usaha' => $badan_usaha,
            'nama_ikm' => $nama_ikm,
            'nama_pemilik' => $nama_pemilik,
            'jalan' => $jalan,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'lokasi' => $lokasi,
            'telepon' => $telepon,
            'komoditi' => $komoditi,
            'legalitas' => $legalitas,
            'jenis_produk' => $jenis_produk,
            'investasi' => $investasi,
            'jumlah' => $jumlah,
            'satuan' => $satuan,
            'nilai_produk' => $nilai_produk,
            'tk_l' => $tk_l,
            'tk_p' => $tk_p,
            'skala' => $skala,
            'tahun' => $tahun,
          );
          $this->M_ikm->insert_data($data,'ikm');
          redirect(base_url().'admin/ikm');
        }else{
          $this->load->view('admin/header');
          $this->load->view('admin/tambahikm');
          $this->load->view('admin/footer');
        }
      }

      function penilaian_ikm_act(){
        $prov = $this->input->post('prov');
        $kab = $this->input->post('kab');
        $kec = $this->input->post('kec');
        $desa = $this->input->post('desa');
        $kbli = $this->input->post('kbli');
        $nama_ikm = $this->input->post('nama_ikm');
        $nama_pemilik = $this->input->post('nama_pemilik');
        $komoditi = $this->input->post('komoditi');
        $lokasi = $this->input->post('lokasi');
        $suplier = $this->input->post('suplier');
        $legal = $this->input->post('legal');
        $kontinuitas = $this->input->post('kontinuitas');
        $pangsa = $this->input->post('pangsa');
        $kompetensi = $this->input->post('kompetensi');
        $jtk = $this->input->post('jtk');
        $produksi = $this->input->post('produksi');
        $adm = $this->input->post('adm');
        $nilai = $this->input->post('nilai');
        $level = $this->input->post('level');
        $tahun = $this->input->post('tahun');
        $this->form_validation->set_rules('nilai','nilai','required');
        if($this->form_validation->run() != false){
            $data = array(
              'prov' => $prov,
              'kab' => $kab,
              'kec' => $kec,
              'desa' => $desa,
              'kbli' => $kbli,
              'nama_ikm' => $nama_ikm,
              'nama_pemilik' => $nama_pemilik,
              'komoditi' => $komoditi,
              'lokasi' => $lokasi,
              'suplier' => $suplier,
              'legal' => $legal,
              'kontinuitas' => $kontinuitas,
              'pangsa' => $pangsa,
              'kompetensi' => $kompetensi,
              'jtk' => $jtk,
              'produksi' => $produksi,
              'adm' => $adm,
              'nilai' => $nilai,
              'level' => $level,
              'tahun' => $tahun,
            );
            $this->M_ikm->insert_data($data,'nilai_ikm');
            redirect(base_url().'admin/nilai_ikm');
          }else{
              $where = array('id_ikm' =>$id_ikm);
              $data['ikm'] = $this->db->query("select * from ikm where id_ikm='$id_ikm'")->result();
              $this->load->view('admin/header');
              $this->load->view('admin/penilaianikm',$data);
              $this->load->view('admin/footer');
          }
        }

      function data_ikm($id_ikm){
        $where = array('id_ikm' =>$id_ikm);
        $data['ikm'] = $this->db->query("select * from ikm where id_ikm='$id_ikm'")->result();

        $this->load->view('admin/header');
        $this->load->view('admin/dataikm',$data);
        $this->load->view('admin/footer');
      }

      function lihat_ikm(){
        $kbli = $this->input->post('kbli');
        $badan_usaha = $this->input->post('badan_usaha');
        $nama_ikm = $this->input->post('nama_ikm');
        $nama_pemilik = $this->input->post('nama_pemilik');
        $jalan = $this->input->post('jalan');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $lokasi = $this->input->post('lokasi');
        $telepon = $this->input->post('telepon');
        $komoditi = $this->input->post('komoditi');
        $legalitas = $this->input->post('legalitas');
        $jenis_produk = $this->input->post('jenis_produk');
        $investasi = $this->input->post('investasi');
        $jumlah = $this->input->post('jumlah');
        $satuan = $this->input->post('satuan');
        $nilai_produk = $this->input->post('nilai_produk');
        $tk_l = $this->input->post('tk_l');
        $tk_p = $this->input->post('tk_p');
        $skala = $this->input->post('skala');
        $tahun = $this->input->post('tahun');

        if($this->form_validation->run() != false){
            $where = array('id_ikm' => $id_ikm);
            $data = array(
              'kbli' => $kbli,
              'badan_usaha' => $badan_usaha,
              'nama_ikm' => $nama_ikm,
              'nama_pemilik' => $nama_pemilik,
              'jalan' => $jalan,
              'desa' => $desa,
              'kecamatan' => $kecamatan,
              'lokasi' => $lokasi,
              'telepon' => $telepon,
              'komoditi' => $komoditi,
              'legalitas' => $legalitas,
              'jenis_produk' => $jenis_produk,
              'investasi' => $investasi,
              'jumlah' => $jumlah,
              'satuan' => $satuan,
              'nilai_produk' => $nilai_produk,
              'tk_l' => $tk_l,
              'tk_p' => $tk_p,
              'skala' => $skala,
              'tahun' => $tahun,
            );

            $this->M_ikm->get_data('ikm',$data,$where);
            redirect(base_url().'admin/ikm');
          } else{
              $where = array('id_ikm'=>$id_ikm);
              $data['ikm'] = $this->db->query("select * from ikm where id_ikm='$id_ikm'")->result();
              $this->load->view('admin/header');
              $this->load->view('admin/dataikm',$data);
              $this->load->view('admin/footer');
          }
      }

      function edit_ikm($id_ikm){
        $where = array('id_ikm' => $id_ikm);
        $data['ikm'] = $this->db->query("select * from ikm where id_ikm='$id_ikm'")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/editikm',$data);
        $this->load->view('admin/footer');
      }

      function edit_penilaian($id_ikm){
        $where = array('id_ikm' =>$id_ikm);
        $data['nilai_ikm'] = $this->db->query("select * from nilai_ikm where id_ikm='$id_ikm'")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/editpenilaian',$data);
        $this->load->view('admin/footer');
      }

     function update_penilaian(){
      $kbli = $this->input->post('kbli');
      $nama_ikm = $this->input->post('nama_ikm');
      $nama_pemilik = $this->input->post('nama_pemilik');
      $komoditi = $this->input->post('komoditi');
      $lokasi = $this->input->post('lokasi');
      $prov = $this->input->post('prov');
      $kab = $this->input->post('kab');
      $kec = $this->input->post('kec');
      $desa = $this->input->post('desa');
      $skala = $this->input->post('skala');
      $level = $this->input->post('level');
      $suplier = $this->input->post('suplier');
      $legal = $this->input->post('legal');
      $kontinuitas = $this->input->post('kontinuitas');
      $pangsa = $this->input->post('pangsa');
      $kompetensi = $this->input->post('kompetensi');
      $jtk = $this->input->post('jtk');
      $produksi = $this->input->post('produksi');
      $adm = $this->input->post('adm');
      $nilai = $this->input->post('nilai');
      $ket = $this->input->post('ket');
      $this->form_validation->set_rules('nama_ikm','nama_ikm','required');
      $this->form_validation->set_rules('kbli','kbli','required');
      if($this->form_validation->run() != false){
        $where = array('id_ikm' => $id_ikm);
          $data = array(
            'kbli' => $kbli,
            'nama_ikm' => $nama_ikm,
            'nama_pemilik' => $nama_pemilik,
            'komoditi' => $komoditi,
            'lokasi' => $lokasi,
            'prov' => $prov,
            'kab' => $kab,
            'kec' => $kec,
            'desa' => $desa,
            'skala' => $skala,
            'level' => $level,
            'suplier' => $suplier,
            'legal' => $legal,
            'kontinuitas' => $kontinuitas,
            'pangsa' => $pangsa,
            'kompetensi' => $kompetensi,
            'jtk' => $jtk,
            'produksi' => $produksi,
            'adm' => $adm,
            'nilai' => $nilai,
            'ket' => $ket,
          );

          $this->M_ikm->update_data('nilai_ikm',$data,$where);
          redirect(base_url().'admin/nilai_ikm');
        } else{
            $where = array('id_ikm' =>$id_ikm);
            $data['nilai_ikm'] = $this->db->query("select * from nilai_ikm where id_ikm='$id_ikm'")->result();
            $this->load->view('admin/header');
            $this->load->view('admin/editpenilaian',$data);
            $this->load->view('admin/footer');
        }
      }

      function update_ikm(){
        $kbli = $this->input->post('kbli');
        $badan_usaha = $this->input->post('badan_usaha');
        $nama_ikm = $this->input->post('nama_ikm');
        $nama_pemilik = $this->input->post('nama_pemilik');
        $jalan = $this->input->post('jalan');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $lokasi = $this->input->post('lokasi');
        $telepon = $this->input->post('telepon');
        $komoditi = $this->input->post('komoditi');
        $kbli = $this->input->post('kbli');
        $legalitas = $this->input->post('legalitas');
        $jenis_produk = $this->input->post('jenis_produk');
        $investasi = $this->input->post('investasi');
        $jumlah = $this->input->post('jumlah');
        $satuan = $this->input->post('satuan');
        $nilai_produk = $this->input->post('nilai_produk');
        $tk_l = $this->input->post('tk_l');
        $tk_p = $this->input->post('tk_p');
        $skala = $this->input->post('skala');
        $tahun = $this->input->post('tahun');
        $this->form_validation->set_rules('nama_ikm','nama_ikm','required');
        $this->form_validation->set_rules('nama_pemilik','nama_pemilik','required');
        $this->form_validation->set_rules('telepon','telepon','required');

        if($this->form_validation->run() != false){
            $where = array('id_ikm' => $id_ikm);
            $data = array(
              'badan_usaha' => $badan_usaha,
              'nama_ikm' => $nama_ikm,
              'nama_pemilik' => $nama_pemilik,
              'jalan' => $jalan,
              'desa' => $desa,
              'kecamatan' => $kecamatan,
              'lokasi' => $lokasi,
              'telepon' => $telepon,
              'komoditi' => $komoditi,
              'kbli' => $kbli,
              'legalitas' => $legalitas,
              'jenis_produk' => $jenis_produk,
              'investasi' => $investasi,
              'jumlah' => $jumlah,
              'satuan' => $satuan,
              'nilai_produk' => $nilai_produk,
              'tk_l' => $tk_l,
              'tk_p' => $tk_p,
              'skala' => $skala,
              'tahun' => $tahun,
            );

            $this->M_ikm->update_data('ikm',$data,$where);
            redirect(base_url().'admin/ikm');
          } else{
              $where = array('id_ikm' =>$id_ikm);
              $data['ikm'] = $this->db->query("select * from ikm where id_ikm='$id_ikm'")->result();
              $this->load->view('admin/header');
              $this->load->view('admin/editikm',$data);
              $this->load->view('admin/footer');
          }
      }

      function hapus_ikm($id_ikm){
            $where = array('id_ikm' => $id_ikm);
            $this->M_ikm->delete_data($where,'ikm');
            redirect(base_url().'admin/ikm');
          }

             function hapus_penilaian($id_ikm){
                $where = array('id_ikm' => $id_ikm);
                $this->M_ikm->delete_data($where,'nilai_ikm');
                redirect(base_url().'admin/nilai_ikm');
              }

              function chart(){
                $data['ikm'] = $this->M_ikm->get_data('ikm')->result();
                $tahun_sekarang = date('Y') - 5 ;
                $tahun_investasi = $this->db->limit(5)->select('tahun')->where('tahun >',$tahun_sekarang)->get('ikm')->result();
                $nilai_investasi = $this->db->limit(5)->select('investasi')->where('tahun >',$tahun_sekarang)->get('ikm')->result();

                $nama_pemilik = $this->db->limit(5)->select('nama_pemilik')->get('ikm')->result();
                $nilai_produk = $this->db->limit(5)->select('nilai_produk')->get('ikm')->result();

                foreach($tahun_investasi as $v) {
                  $data['tahun_investasi'][] = $v->tahun;
                }
                foreach($nilai_investasi as $v) {
                  $data['nilai_investasi'][] = $v->investasi;
                }

                foreach($nama_pemilik as $v) {
                  $data['nama_pemilik'][] = $v->nama_pemilik;
                }
                foreach($nilai_produk as $v) {
                  $data['nilai_produk'][] = $v->nilai_produk;
                }

                $data['tahun_investasi']= json_encode($data['tahun_investasi']);
                $data['nilai_investasi']= json_encode($data['nilai_investasi']);

                $data['nama_pemilik']= json_encode($data['nama_pemilik']);
                $data['nilai_produk']= json_encode($data['nilai_produk']);

                $data['sum_jumlah'] = $this->M_ikm->get_sum();
                $this->load->view('admin/header');
                $this->load->view('admin/chart',$data);
                $this->load->view('admin/footer');
              }

              function periode()
              {
                $ikm = $this->input->post('filter');
                if(isset($_POST['cek']) == 2018 && $ikm == 2018){
			        	$data['ikm'] = $this->M_ikm->getone();
              } elseif (isset($_POST['cek']) == 2022 && $ikm == 2022) {
			         	$data['ikm'] = $this->M_ikm->getfive();
			          } else {
			         	$data['ikm'] = $this->M_ikm->getAll();
			          }
                $this->load->view('admin/header');
                $this->load->view('admin/periode',$data);
                $this->load->view('admin/footer');
              }

        Function cetak_laporan_ikm(){
          $data['ikm'] = $this->M_ikm->get_data('ikm')->result();
          $this->load->view('admin/header');
          $this->load->view('admin/laporan_ikm', $data);
          $this->load->view('admin/footer');
        }

        Function cetak_nilai_ikm(){
          $data['nilai_ikm'] = $this->M_ikm->get_data('nilai_ikm')->result();
          $this->load->view('admin/header');
          $this->load->view('admin/laporan_nilai', $data);
          $this->load->view('admin/footer');
        }

        function laporan_print_ikm(){
          $data['ikm'] = $this->M_ikm->get_data('ikm')->result();
          $this->load->view('admin/laporan_print_ikm',$data);
        }

        function laporan_print_nilai(){
          $data['nilai_ikm'] = $this->M_ikm->get_data('nilai_ikm')->result();
          $this->load->view('admin/laporan_print_nilai',$data);
        }

        function laporan_excel_ikm(){
          $data['ikm'] = $this->M_ikm->get_data('ikm')->result();
          $this->load->view('admin/laporan_excel_ikm',$data);
        }

        function laporan_excel_nilai(){
          $data['nilai_ikm'] = $this->M_ikm->get_data('nilai_ikm')->result();
          $this->load->view('admin/laporan_excel_nilai',$data);
        }

        function laporan_pdf_ikm(){
          $this->load->library('dompdf_gen');

          $data['ikm'] = $this->M_ikm->get_data('ikm')->result();

          $this->load->view('admin/laporan_pdf_ikm', $data);

         $paper_size  = 'A4'; // ukuran kertas
         $orientation = 'landscape'; //tipe format kertas potrait atau landscape
         $html = $this->output->get_output();

         $this->dompdf->set_paper($paper_size, $orientation);
         //Convert to PDF
         $this->dompdf->load_html($html);
         $this->dompdf->render();
         $this->dompdf->stream("laporan_data_ikm.pdf", array('Attachment'=>0));
         // nama file pdf yang di hasilkan
        }

        function laporan_pdf_nilai(){
          $this->load->library('dompdf_gen');

          $data['nilai_ikm'] = $this->M_ikm->get_data('nilai_ikm')->result();

          $this->load->view('admin/laporan_pdf_nilai', $data);

         $paper_size  = 'A4'; // ukuran kertas
         $orientation = 'landscape'; //tipe format kertas potrait atau landscape
         $html = $this->output->get_output();

         $this->dompdf->set_paper($paper_size, $orientation);
         //Convert to PDF
         $this->dompdf->load_html($html);
         $this->dompdf->render();
         $this->dompdf->stream("laporan_data_nilai.pdf", array('Attachment'=>0));
         // nama file pdf yang di hasilkan
        }

}
