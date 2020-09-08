
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Import Controller
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Import extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Import_model', 'import');
    }

    // upload xlsx|xls file
    public function index() {
        $data['page'] = 'import';
        $data['title'] = 'Import XLSX | TechArise';
        $this->load->view('import/index', $data);
    }
    // import excel data
    public function save() {
        $this->load->library('Excel');

        if ($this->input->post('importfile')) {
            $path = ROOT_UPLOAD_IMPORT_PATH;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls|jpg|png';
            $config['remove_spaces'] = TRUE;
            $this->upload->initialize($config);
            $this->load->library('Excel', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }

            if (!empty($data['upload_data']['file_name'])) {
                $import_xls_file = $data['upload_data']['file_name'];
            } else {
                $import_xls_file = 0;
            }
            $inputFileName = $path . $import_xls_file;
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                        . '": ' . $e->getMessage());
            }
            $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

            $arrayCount = count($allDataInSheet);
            $flag = 0;
            $createArray = array('kbli', 'badan_usaha', 'nama_perusahaan', 'nama_pemilik', 'jalan', 'desa', 'kecamatan', 'lokasi', 'telepon', 'komoditi', 'legalitas', 'jenis_produk', 'investasi', 'jumlah', 'satuan', 'nilai_produk', 'tk_l', 'tk_p');
            $makeArray = array('kbli' => 'kbli', 'badan_usaha' => 'badan_usaha', 'nama_perusahaan' => 'nama_perusahaan', 'nama_pemilik'=>'nama_pemilik', 'jalan'=>'jalan', 'desa'=>'desa', 'kecamatan'=>'kecamatan', 'lokasi'=>'lokasi', 'telepon'=>'telepon',
            'komoditi'=>'komoditi', 'legalitas'=>'legalitas', 'jenis_produk'=>'jenis_produk', 'investasi'=>'investasi', 'jumlah'=>'jumlah', 'satuan'=>'satuan', 'nilai_produk'=>'nilai_produk', 'tk_l'=>'tk_l', 'tk_p'=>'tk_p');
            $SheetDataKey = array();
            foreach ($allDataInSheet as $dataInSheet) {
                foreach ($dataInSheet as $key => $value) {
                    if (in_array(trim($value), $createArray)) {
                        $value = preg_replace('/\s+/', '', $value);
                        $SheetDataKey[trim($value)] = $key;
                    } else {

                    }
                }
            }
            $data = array_diff_key($makeArray, $SheetDataKey);

            if (empty($data)) {
                $flag = 1;
            }
            if ($flag == 1) {
                for ($i = 2; $i <= $arrayCount; $i++) {
                    $addresses = array();
                    $kbli = $SheetDataKey['kbli'];
                    $badan_usaha = $SheetDataKey['badan_usaha'];
                    $nama_perusahaan = $SheetDataKey['nama_perusahaan'];
                    $nama_pemilik = $SheetDataKey['nama_pemilik'];
                    $jalan = $SheetDataKey['jalan'];
                    $desa = $SheetDataKey['desa'];
                    $kecamatan = $SheetDataKey['kecamatan'];
                    $lokasi = $SheetDataKey['lokasi'];
                    $telepon = $SheetDataKey['telepon'];
                    $komoditi = $SheetDataKey['komoditi'];
                    $legalitas = $SheetDataKey['legalitas'];
                    $jenis_produk = $SheetDataKey['jenis_produk'];
                    $investasi = $SheetDataKey['investasi'];
                    $jumlah = $SheetDataKey['jumlah'];
                    $satuan = $SheetDataKey['satuan'];
                    $nilai_produk = $SheetDataKey['nilai_produk'];
                    $tk_l = $SheetDataKey['tk_l'];
                    $tk_p = $SheetDataKey['tk_p'];
                    $kbli = filter_var(trim($allDataInSheet[$i][$kbli]), FILTER_SANITIZE_STRING);
                    $badan_usaha = filter_var(trim($allDataInSheet[$i][$badan_usaha]), FILTER_SANITIZE_STRING);
                    $nama_perusahaan = filter_var(trim($allDataInSheet[$i][$nama_perusahaan]), FILTER_SANITIZE_EMAIL);
                    $nama_pemilik = filter_var(trim($allDataInSheet[$i][$nama_pemilik]), FILTER_SANITIZE_STRING);
                    $jalan = filter_var(trim($allDataInSheet[$i][$jalan]), FILTER_SANITIZE_STRING);
                    $desa = filter_var(trim($allDataInSheet[$i][$desa]), FILTER_SANITIZE_STRING);
                    $kecamatan = filter_var(trim($allDataInSheet[$i][$kecamatan]), FILTER_SANITIZE_STRING);
                    $lokasi = filter_var(trim($allDataInSheet[$i][$lokasi]), FILTER_SANITIZE_EMAIL);
                    $telepon = filter_var(trim($allDataInSheet[$i][$telepon]), FILTER_SANITIZE_STRING);
                    $komoditi = filter_var(trim($allDataInSheet[$i][$komoditi]), FILTER_SANITIZE_STRING);
                    $legalitas = filter_var(trim($allDataInSheet[$i][$legalitas]), FILTER_SANITIZE_STRING);
                    $jenis_produk = filter_var(trim($allDataInSheet[$i][$jenis_produk]), FILTER_SANITIZE_STRING);
                    $investasi = filter_var(trim($allDataInSheet[$i][$investasi]), FILTER_SANITIZE_EMAIL);
                    $jumlah = filter_var(trim($allDataInSheet[$i][$jumlah]), FILTER_SANITIZE_STRING);
                    $satuan = filter_var(trim($allDataInSheet[$i][$satuan]), FILTER_SANITIZE_STRING);
                    $nilai_produk = filter_var(trim($allDataInSheet[$i][$nilai_produk]), FILTER_SANITIZE_STRING);
                    $tk_l = filter_var(trim($allDataInSheet[$i][$tk_l]), FILTER_SANITIZE_STRING);
                    $tk_p = filter_var(trim($allDataInSheet[$i][$tk_p]), FILTER_SANITIZE_STRING);
                    $fetchData[] = array('kbli' => $kbli, 'badan_usaha' => $badan_usaha, 'nama_perusahaan' => $nama_perusahaan, 'nama_pemilik'=>$nama_pemilik, 'jalan'=>$jalan, 'desa'=>$desa, 'kecamatan'=>$kecamatan, 'lokasi'=>$lokasi, 'telepon'=>$telepon,
                    'komoditi'=>$komoditi, 'legalitas'=>$legalitas, 'jenis_produk'=>$jenis_produk, 'investasi'=>$investasi, 'jumlah'=>$jumlah, 'satuan'=>$satuan, 'nilai_produk'=>$nilai_produk, 'tk_l'=>$tk_l, 'tk_p'=>$tk_p);
                }
                $data['employeeInfo'] = $fetchData;
                $this->import->setBatchImport($fetchData);
                $this->import->importData();
            } else {
                echo "Please import correct file";
            }
        }
        $this->load->view('admin/laporan_perusahaan', $data);

    }
}
?>
