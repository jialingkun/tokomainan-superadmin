<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_manajemen_pelanggan extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function manajemen_pelanggan() {
        $this->load->view('v_manajemen_pelanggan');
    }

    public function lihat_pelanggan() {
        $this->load->model('m_manajemen_pelanggan');

        $data = $this->m_manajemen_pelanggan->lihat_pelanggan();
        if($data == '') echo json_encode('no data');
        else echo json_encode($data);
    }

    public function tambah_pelanggan() {
        $input = array(
            'id_pelanggan'      => $this->input->post('id_pelanggan'),
            'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
            'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
            'telepon_pelanggan' => $this->input->post('telepon_pelanggan'),
            'maks_utang'        => $this->input->post('maks_utang'),
            'level'             => $this->input->post('level')
        );

        $this->load->model('m_manajemen_pelanggan');

        $this->m_manajemen_pelanggan->tambah_pelanggan($input);
    }

    public function edit_pelanggan() {
        $id_pelanggan = $this->input->post('id_pelanggan');
        $nama_kolom = $this->input->post('nama_kolom');
        $nilai_baru = $this->input->post('nilai_baru');

        $this->load->model('m_manajemen_pelanggan');

        $this->m_manajemen_pelanggan->edit_pelanggan($id_pelanggan, $nama_kolom, $nilai_baru);
    }

    public function hapus_pelanggan() {
        $id_pelanggan = $this->input->post('id_pelanggan');

        $this->load->model('m_manajemen_pelanggan');

        $this->m_manajemen_pelanggan->hapus_pelanggan($id_pelanggan);
    }
}
?>