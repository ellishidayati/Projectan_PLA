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
		function get_nms_link(){
			$this->db->select('nms');
			$this->db->from('link_statis');
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
			$this->db->from('sisa_port');
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

		function delete_port($ne,$board,$shelf,$slot,$port){
			$this->db->where('nama_ne', $ne);
			$this->db->where('board', $board);
			$this->db->where('shelf', $shelf);
			$this->db->where('slot', $slot);
			$this->db->where('port', $port);
			$this->db->delete('sisa_port');
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