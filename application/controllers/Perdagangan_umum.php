<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Perdagangan_umum extends MY_Controller
{
	public function index()
	{

		$this->data['about_perdagangan'] = $this->db->get('tbl_about_perdagangan')->row();
		$this->data['slider_perdagangan'] = $this->db->get('tbl_slider_image_perdagangan')->result();
		$this->data['service_developer'] = $this->db->get('tbl_service_developer')->result();

		$this->web = 'content/v_perdagangan_umum';
		$this->layout();
	}
}
