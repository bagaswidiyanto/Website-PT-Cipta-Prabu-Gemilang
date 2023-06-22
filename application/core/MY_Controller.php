<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{

	//set the class variable.
	var $template  = array();
	var $data      = array();
	//Load layout    
	public function layout()
	{
		date_default_timezone_set("Asia/Jakarta");

		$this->CI = &get_instance();
		// $this->data['menu']=$this->menu(0,$h="");
		$this->data['website'] = $this->CI->db->get('tbl_website')->row();
		$this->data['sosmed'] = $this->CI->db->get('tbl_sosmed')->result();
		$this->data['tagline'] = $this->CI->db->get('tbl_tagline')->result();
		$this->data['keunggulan'] = $this->CI->db->get('tbl_keunggulan')->result();


		$this->data['dc1'] = $this->CI->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
		$this->data['dc2'] = $this->CI->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();
		$this->data['dc3'] = $this->CI->db->get_where('tbl_deskripsi_content', array('id' => 3))->row();
		$this->data['dc4'] = $this->CI->db->get_where('tbl_deskripsi_content', array('id' => 4))->row();
		$this->data['dc5'] = $this->CI->db->get_where('tbl_deskripsi_content', array('id' => 5))->row();
		$this->data['dc6'] = $this->CI->db->get_where('tbl_deskripsi_content', array('id' => 6))->row();

		$number = $this->data['website']->phone;
		$n1 = substr($number, 0, 4);
		$n2 = substr($number, 4, 4);
		$n3 = substr($number, 8, 4);
		$wa = $n1 . ' ' . $n2 . ' ' . $n3;
		$this->data['noWa'] = $wa;


		$numberAPI = $this->data['website']->phone;
		$n1API = substr($numberAPI, 1);
		$apiWa = $n1API;

		$waInfo = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20PT.Cipta%20Prabu%20Gemilang...%21%0ASaya%20tertarik%20dengan%20property%20yang%20anda%20tawarkan%20diwebsite%20anda,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
		$this->data['chatInfo'] = $waInfo;


		$this->template['header']   = $this->load->view('layout/header', $this->data); //, $this->data
		$this->template['web'] = $this->load->view($this->web, $this->data); //, $this->data
		$this->template['footer'] = $this->load->view('layout/footer', $this->data); //, $this->data

		$this->initCounter(); //insert statistik
	}

	function initCounter()
	{

		$ip = $_SERVER['REMOTE_ADDR']; // menangkap ip pengunjung
		$location = 'http://ciptaprabugemilang.com' . $_SERVER['PHP_SELF']; // menangkap server path

		//membuat log dalam tabel database 'counter'
		$check = $this->db->query("SELECT * from tbl_counter where ip='" . $ip . "' and date(`timestamp`)=CURDATE()");
		$check2 = $check->row();
		if ($check->num_rows() > 0) {

			$create_log = $this->db->query("UPDATE tbl_counter SET `timestamp`=NOW() WHERE id='" . $check2->id . "'");
		} else {
			$create_log = $this->db->query("INSERT INTO tbl_counter(ip,location,`timestamp`)VALUES('$ip', '$location',NOW()) ");
		}
	}
}
