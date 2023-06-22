<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Developer extends MY_Controller
{
	public function index()
	{

		$param = @$_GET['search'];

		$this->load->library('pagination');
		$jml = $this->db->count_all('tbl_tipe_rumah');
		$config['base_url'] = base_url() . 'news/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 2;
		$config['full_tag_open'] = '<center><ul class="pagination ">';
		$config['full_tag_close'] = '</ul></center>';
		$config['cur_tag_open'] = '<li class="page-item page-link active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item page-link">';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item page-link">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item page-link">';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li class="page-item page-link">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item page-link">';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);

		$this->db->order_by('created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);
		$this->db->like('tipe', $param);
		$type = $this->db->get('tbl_tipe_rumah');

		$this->data['type'] = $type;
		$this->data['pagination'] = $this->pagination->create_links();

		$this->data['about_developer'] = $this->db->get('tbl_about_developer')->row();
		$this->data['portofolio_dev'] = $this->db->get('tbl_portofolio_developer')->result();
		$this->data['service_developer'] = $this->db->get('tbl_service_developer')->result();
		$this->data['gallery_video'] = $this->db->get('tbl_gallery_video')->result();

		$this->web = 'content/v_developer';
		$this->layout();
	}
}
