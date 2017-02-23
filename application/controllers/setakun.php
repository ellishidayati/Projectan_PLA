<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setakun extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('setakun_model');
		$this->load->library('pagination');
	}
	
		public function index(){
			
			/*$this->load->database();
			$jumlah_data = $this->report_model->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/setakun/index';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 10;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);

			$data['link_statis'] = $this->report_model->data($config['per_page'],$from);*/
			$this->load->view('admin/setakun/tables-setakun', $data);
		}

}