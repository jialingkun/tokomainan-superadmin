<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_manajemen_barang extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function lihat_barang() {
		$query = $this->db->get('barang');

		if($query->num_rows() > 0) {
			return $query->result_array();
		}
	}

	public function tambah_data($input) {
		$this->db->insert('barang', $input);
	}

	public function edit_barang($id_barang, $nama_kolom, $nilai_baru) {
		$this->db->set($nama_kolom, $nilai_baru);
		$this->db->where('id_barang', $id_barang);
		$this->db->update('barang');
	}

	public function hapus_barang($id_barang) {
		$this->db->where('id_barang', $id_barang);
		$this->db->delete('barang');
	}
	
	public function daftar_kategori($keyword) {
		$this->db->select('kategori');
		$this->db->from('barang');
		$this->db->like('kategori', $keyword);
		$this->db->group_by('kategori');
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			return $query->result_array();
		}
	}

	public function daftar_fungsi($keyword) {
		$this->db->select('fungsi');
		$this->db->from('barang');
		$this->db->like('fungsi', $keyword);
		$this->db->group_by('fungsi');
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			return $query->result_array();
		}
	}
}
?>