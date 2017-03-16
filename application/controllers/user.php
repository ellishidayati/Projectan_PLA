<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('tn_model');
        $this->load->model('admin_model');
		$this->load->model('link_model');
		$this->load->library('google_maps');
	}

	public function index(){
		$data['jumlah'] = $this->tn_model->jumlah_nms()->result();
        $data['link'] = $this->tn_model->jumlah_link()->result();
        $data['lala'] = $this->tn_model->get_nms_link()->result();
        $data['user'] = $this->tn_model->get_user()->result();
             $data['sisa'] = $this->tn_model->jumlah_sisa_port()->result();
     

        $config['center'] = '0.7893,113.9213';
        $config['zoom'] = 5;
        $this->google_maps->initialize($config);

             $coords = $this->tn_model->get_longlat()->result();
	         foreach ($coords as $kordinat) {
	            
	             $marker = array();
	             $marker['position'] = $kordinat->lng.','.$kordinat->lat;
	         	$marker['infowindow_content'] = ''.$kordinat->nama_lokasi.'';
				$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='.$kordinat->kd.'|'.$kordinat->warna.'|000000';
	             $this->google_maps->add_marker($marker);

	         }
	         
        $data['map'] = $this->google_maps->create_map();
		$this->load->view('user/index', $data);	
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