<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_ikm extends CI_Model
{
  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  function get_data($table){
    return $this->db->get($table);
  }

  function insert_data($data,$table){
    $this->db->insert($table,$data);
  }

  function update_data($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function getAll()
  		{
  			return $this->db->get('ikm')->result();
  		}

  		public function getone()
  		{
  			$this->db->order_by('tahun', 'asc');
  			return $this->db->get('ikm')->result();
  		}

  		public function getfive()
  		{
  			$this->db->order_by('tahun', 'desc');
  			return $this->db->get('ikm')->result();
  		}

  public function find($where,$table){
	//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id_ikm', $where)
						  ->limit(1)
						  ->get($table);
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

  function get_sum()
  {
    $this->db->select_sum('investasi');
    $this->db->select_sum('jumlah');
    $this->db->select_sum('nilai_produk');
    $this->db->select_sum('tk_l');
    $this->db->select_sum('tk_p');
    $this->db->from('ikm');
    return $this->db->get('')->row();
  }

  public function kosongkan_data($table){
		return $this->db->truncate($table);
	}

}
 ?>
