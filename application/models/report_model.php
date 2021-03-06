<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		function get_link_statis(){
			$this->db->select('*');
			$this->db->from('link_statis');
			return $this->db->get();
		}
	
		//FUNGSI PAGINATION REPORT
		function data($number,$offset){
			return $query = $this->db->get('link_statis',$number,$offset)->result();		
		}
		function jumlah_data(){
			return $this->db->get('link_statis')->num_rows();
		}
		
		//FUNGSI SEARCHING REPORT
		function tampil(){
			$query = $this->db->get('link_statis');
			return $query->result(); 
		}
		function caridata(){
			$c = $this->input->POST('cari');
			$this->db->like('user', $c);
			$query = $this->db->get('link_statis');
			return $query->result(); 	
		}
		
}

/* End of file employee.php */
/* Location: ./application/models/employee.php */