<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_manajemen_kasir extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function lihat_kasir() {
        $this->db->select('kasir.id_kasir, kasir.password_kasir, kasir.id_toko, toko.nama_toko');
        $this->db->from('kasir');
        $this->db->join('toko', 'kasir.id_toko = toko.id_toko');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function tambah_kasir($input) {
        $this->db->insert('kasir', $input);
    }

    public function edit_kasir($id_kasir, $nama_kolom, $nilai_baru) {
        $this->db->set($nama_kolom, $nilai_baru);
        $this->db->where('id_kasir', $id_kasir);
        $this->db->update('kasir');
    }

    public function hapus_kasir($id_kasir) {
        $this->db->where('id_kasir', $id_kasir);
        $this->db->delete('kasir');
    }
}
?>