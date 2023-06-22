<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Kontraktor extends MY_Controller
{
	public function index()
	{

		$this->data['about_kontraktor'] = $this->db->get('tbl_about_kontraktor')->row();
		$this->data['layanan'] = $this->db->get('tbl_layanan')->result();
		$this->data['gallery_video'] = $this->db->get('tbl_gallery_video')->result();
		$this->data['portofolio_kontraktor'] = $this->db->get('tbl_portofolio_kontraktor')->result();

		$this->web = 'content/v_kontraktor';
		$this->layout();
	}
}
