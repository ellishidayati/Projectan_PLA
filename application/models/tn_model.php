<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tn_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		//cek keberadaan user di sistem
		function get_port(){
			$this->db->select('*');
			$this->db->from('port');
			return $this->db->get();
		}
		
		function get_admin(){
			$this->db->select('*');
			$this->db->from('admin');
			return $this->db->get();
		}
		
		function delete_akun($id_admin){
			$this->db->where('id_admin',$id_admin);
			$this->db->delete('admin');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
		}
		
		function insert_akun($data){
			$this->db->insert('admin', $data);
		}

		function get_nms(){
			$this->db->select('nama_nms');
			$this->db->from('port');
			$this->db->group_by('nama_nms');
			return $this->db->get();
		}

			function get_merk(){
			$this->db->select('*');
			$this->db->from('merk');
			return $this->db->get();
		}

		function get_link_statis(){
			$this->db->select('*');
			$this->db->from('link_statis');
			return $this->db->get();
		}
		
		function get_merk_by_id(){
			$this->db->select('*');
			$this->db->from('merk');
			return $this->db->get();
		}
		function get_port_by_id($id){
			$this->db->select('*');
			$this->db->from('port');
			$this->db->where('id_port',$id);
			return $this->db->get();
		}

		function get_link_by_id($id){
			$this->db->select('*');
			$this->db->from('link_statis');
			$this->db->where('id_link',$id);
			return $this->db->get();
		}

 	 function get_addressbook() {     
        $query = $this->db->get('port');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }

     function get_addressbook_link() {     
        $query = $this->db->get('link_statis');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_csv($data) {
        $this->db->insert('port', $data);
    }

     function insert_csv_link($data2) {
        $this->db->insert('link_statis', $data2);
    }
	 
	// function pagination NMS
	function data($number,$offset){
		return $query = $this->db->get('port',$number,$offset)->result();		
	}
	function jumlah_data(){
		return $this->db->get('port')->num_rows();
	}
	
    //update port
    function update_port($id_port, $data){
			$this->db->where('id_port', $id_port);
			$this->db->update('port', $data);
	}

	//delete port
	function delete_nms($id_port){
		$this->db->where('id_port',$id_port);
		$this->db->delete('port');
		if($this->db->affected_rows()==1){
			return TRUE;
		}
		return FALSE;
	}

	//function insert port
	function insert_port($data){
			$this->db->insert('port', $data);
	}

	function remove_checked() {
		
			$delete = $this->input->post('del');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id_port', intval($delete[$i]));
				$this->db->delete('port');
			}
		
	}

	function jumlah_nms(){
		$this->db->select("count(nama_nms) as 'total', nama_nms");
		$this->db->from('port');
		$this->db->group_by('nama_nms');
		return $this->db->get();
	}

	function jumlah_link(){
		$this->db->select("count(nms) as 'total', nms");
		$this->db->from('link_statis');
		$this->db->group_by('nms');
		return $this->db->get();
	}

		function get_nms_link(){
			$this->db->select('*');
			$this->db->from('link_statis');
			$this->db->group_by('nms');
			return $this->db->get();
		}
	function get_user(){
		$this->db->select("count(user) as 'total', user");
		$this->db->from('link_statis');
		$this->db->group_by('user');
		return $this->db->get();
	}
		function get_longlat(){
		$this->db->select("*");
		$this->db->from('lokasi');
		return $this->db->get();
	}
}


/* End of file employee.php */
/* Location: ./application/models/employee.php */