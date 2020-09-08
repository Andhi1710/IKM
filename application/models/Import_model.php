<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Import Model
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Import_model extends CI_Model {

    private $_batchImport;

    public function setBatchImport($batchImport) {
        $this->_batchImport = $batchImport;
    }

    // save data
    public function importData() {
        $data = $this->_batchImport;
        $this->db->insert_batch('perusahaan', $data);
    }
    // get employee list
    public function employeeList() {
        $this->db->select(array('a.kbli', 'a.badan_usaha', 'a.nama_perusahaan', 'a.nama_pemilik', 'a.jalan', 'a.desa', 'a.kecamatan', 'a.lokasi', 'a.telepon', 'a.komoditi', 'a.legalitas', 'a.jenis_produk', 'a.investasi', 'a.jumlah', 'a.satuan', 'a.nilai_produk', 'a.tk_l', 'a.tk_p'));
        $this->db->from('perusahaan as a');
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>
