<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class link_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		function get_link_statis(){
			$this->db->select('*');
			$this->db->from('link_statis');
			return $this->db->get();
		}

		function get_link_by_id($id){
			$this->db->select('*');
			$this->db->from('link_statis');
			$this->db->where('id_link',$id);
			$this->db->group_by('nms');
			return $this->db->get();
		}

		function get_lokasi(){
			$this->db->select('*');
			$this->db->from('lokasi');
			return $this->db->get();
		}

		function get_nms(){
			$this->db->select('nama_nms');
			$this->db->from('port');
			$this->db->group_by('nama_nms');
			return $this->db->get();
		}


		function get_ne($id){
			$this->db->select('*');
			$this->db->from('ne');
			$this->db->where('id_lokasi',$id);
			return $this->db->get();
		}

		function insert_link($data){
			$this->db->insert('link_statis', $data);
		}

		// function insert_jalur($data){
		// 	$this->db->insert('jumlah_jalur');
		// }
		// function get_jalur(){
		// 	$this->db->select('*');
		// 	$this->db->from('jumlah_jalur');
		// 	return $this->db->affected_rows();
		// }
		    function update_link($id_link, $data){
			$this->db->where('id_link', $id_link);
			$this->db->update('link_statis', $data);
	}
		function delete_link($id_link){
			$this->db->where('id_link', $id_link);
			$this->db->delete('link_statis');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
		}

		function remove_checked() {
		
			$delete = $this->input->post('del');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id_link', intval($delete[$i]));
				$this->db->delete('link_statis');
			}
		
	}

}

/* End of file employee.php */
/* Location: ./application/models/employee.php */