<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('tn_model');
        $this->load->model('admin_model');
		$this->load->model('link_model');
		$this->load->library('csvimport');
	}

	public function index(){
		$this->load->view('user/index');	
	}

	public function table_nms(){
		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id()->result();
		$this->load->view('user/table-nms', $data);
	}
	
	public function table_perangkat(){
		$data['link_statis'] = $this->tn_model->get_link_statis()->result();
		$this->load->view('user/table-perangkat', $data);
	}
	
}