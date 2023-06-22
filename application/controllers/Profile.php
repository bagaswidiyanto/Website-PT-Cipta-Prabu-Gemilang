<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Profile extends MY_Controller
{
	public function index()
	{
		$this->data['slider'] 			= $this->db->get('tbl_hero_profile_slider')->result();
		$this->data['slider_visi'] 			= $this->db->get('tbl_slider_visi')->result();

		$this->data['about_company'] 	= $this->db->get_where('tbl_about_profile', array('id' => 1))->row();
		$this->data['visi'] 			= $this->db->get_where('tbl_about_profile', array('id' => 2))->row();
		$this->data['misi'] 			= $this->db->get_where('tbl_about_profile', array('id' => 3))->row();


		$this->web = 'content/v_profile';
		$this->layout();
	}
}
