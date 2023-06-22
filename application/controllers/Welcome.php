<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();

		$this->data['portofolio_developer'] = $this->db->select('*')->order_by('id', 'DESC')->limit(5)->get('tbl_portofolio_developer')->result();
		$this->data['service'] = $this->db->get('tbl_service')->result();
		$this->data['about_developer'] = $this->db->get('tbl_about_developer')->row();
		$this->data['about_kontraktor'] = $this->db->get('tbl_about_kontraktor')->row();
		$this->data['about_perdagangan'] = $this->db->get('tbl_about_perdagangan')->row();
		$this->data['about_company'] 	= $this->db->get_where('tbl_about_profile', array('id' => 1))->row();

		$this->db->select('*');
		$this->db->from('tbl_posts');
		$this->db->order_by('created_date', 'desc');
		$this->db->limit(5);
		$news = $this->db->get();
		$this->data['news'] = $news->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}
