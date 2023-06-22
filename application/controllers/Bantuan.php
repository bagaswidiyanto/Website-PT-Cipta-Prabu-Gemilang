<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $pekerjaan = $this->input->post('pekerjaan');
        $deskripsi = $this->input->post('deskripsi');

        $this->db->query("INSERT INTO tbl_bantuan (nama,telp,pekerjaan,deskripsi) VALUES ('" . $nama . "','" . $telp . "','" . $pekerjaan . "','" . $deskripsi . "') ");

        $this->load->helper('url');
    }
}
