<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class News extends MY_Controller
{
	public function index()
	{

		$param = @$_GET['search'];

		$this->load->library('pagination');
		$jml = $this->db->count_all('tbl_posts');
		$config['base_url'] = base_url() . 'news/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 6;
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
		$this->db->like('title', $param);
		$news = $this->db->get('tbl_posts');

		$this->data['news'] = $news;
		$this->data['pagination'] = $this->pagination->create_links();
		$this->data['hero_slider'] = $this->db->get('tbl_hero_news_slider')->result();
		$this->data['about_news'] = $this->db->get('tbl_about_news')->row();

		$this->web = 'content/v_news';
		$this->layout();
	}


	public function detail()
	{
		$slug = $this->uri->segment(3);
		$news = $this->db->get_where('tbl_posts', array('slug' => $slug));
		$this->data['news_detail'] = $news->row();

		if ($news->num_rows() > 0) {

			$this->db->select("COUNT(b.post_id) as jml, a.id, a.title, a.slug, a.content, a.image, a.created_date");
			$this->db->from("tbl_posts a");
			$this->db->join("tbl_posts_counter b", "a.id=b.post_id", "left");
			$this->db->group_by("b.post_id");
			$this->db->order_by("COUNT(b.post_id)", "DESC");
			$this->db->limit(3);
			$this->data['recent_news'] = $this->db->get()->result();

			$this->web = 'content/v_news_detail';
			$this->layout();
			$this->viewersPosting();
		} else {
			redirect(base_url() . 'news');
		}
	}

	function viewersPosting()
	{
		$ip = $_SERVER['REMOTE_ADDR']; // menangkap ip pengunjung
		$location = $_SERVER['PHP_SELF']; // menangkap server path
		$id = $this->uri->segment('3');
		$cek = $this->db->query("SELECT * FROM tbl_posts WHERE slug = '" . $id . "'")->row();


		$create_log = $this->db->query("INSERT INTO tbl_posts_counter(ip,location,`timestamp`,post_id)VALUES('$ip', '$location',NOW(), '$cek->id') ");
	}
}
