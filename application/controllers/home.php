<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('tn_model');
		$this->load->model('admin_model');
		$this->load->library('csvimport');
	}

	public function index(){
		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/login',$data);	
	}

    public function login(){
        $username = $this->input->post('username', 'true');
        $password = $this->input->post('password', 'true');
        $temp_account = $this->admin_model->check_admin_account($username, $password)->row();

        // check account
        $num_account = count($temp_account);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/login');
        }else{
            if ($num_account > 0){
                // kalau ada set session
                $array_items = array(
                    'id_admin' => $temp_account->id_admin,
                    'username' => $temp_account->username,
                    'logged_in' => true
                );
                $this->session->set_userdata($array_items);
                redirect(site_url('Home/sukses'));
            }else{
                // kalau ga ada diredirect lagi ke halaman login
                $this->session->set_flashdata('notification', 'Peringatan : username dan password salah');
                redirect(site_url('home'));
            }   
        }
    }
	
	//logout
	public function logout(){
		$this->session->sess_destroy(); //untuk mencatat akan dihapus
		redirect(site_url('home'));
    }
	
	public function login_sa(){
		$this->load->view('admin/login_super_admin');	
	}
    public function sukses(){
        $data['port'] = $this->tn_model->get_port()->result();
        $data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
        $this->load->view('admin/index',$data); 
    }

	public function table_nms(){
		$this->load->database();
		$jumlah_data = $this->tn_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/home/table_nms';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['port'] = $this->tn_model->data($config['per_page'],$from);
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables-nms', $data);
	}

	public function tables_link_statis(){
		$data['link_statis'] = $this->tn_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables_perangkat', $data);
	}
	
	public function table_perangkat(){
		$data['link_statis'] = $this->tn_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables_perangkat', $data);
	}

	public function insert_single_nms(){
        $data['merk']=$this->tn_model->get_merk()->result();
        $this->load->view('admin/nms/insert-single-nms', $data);
	}
	
	public function insert_double_nms(){
		$this->load->view('admin/nms/insert-double-nms');
	}

	public function insert_double_link(){
		$this->load->view('admin/perangkat/insert_double_link');
	}

	public function edit_nms($id_port){
		$data['port']=$this->tn_model->get_port_by_id($id_port)->row();
		$data['merk']=$this->tn_model->get_merk()->result();
		$this->load->view('admin/nms/edit-nms',$data);
	}

	 public function proses_edit_nms(){
	 	$data['id_port'] = $this->input->post('id_port');
	 	$data['nama_nms'] = $this->input->post('nama_nms');
        $data['nama_lokasi'] = $this->input->post('nama_lokasi');
        $data['id_merk']=$this->input->post('id_merk');
        $data['nama_ne']=$this->input->post('nama_ne');
        $data['rack']=$this->input->post('rack');
        $data['shelf']=$this->input->post('shelf');
        $data['slot']=$this->input->post('slot');
        $data['port']=$this->input->post('port');
        $data['board']=$this->input->post('board');
        $data['frekuensi']=$this->input->post('frekuensi');
        $data['user']=$this->input->post('user');
        $data['deskripsi']=$this->input->post('deskripsi');
        $id_port=$this->input->post('id_port');
        $this->tn_model->update_port($id_port, $data);
      	  //redirect(site_url().'/Home');
   		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables-nms', $data);
	 }

	function insert_nms($id_port){
		$this->load->view('admin/nms/insert-single-nms');
	}	
	
	public function proses_insert_nms(){
		$this->load->database();
		$jumlah_data = $this->tn_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/home/table_nms';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		
        $data['id_port'] = $this->input->post('id_port');
		$data['nama_nms'] = $this->input->post('nama_nms');
        $data['nama_lokasi'] = $this->input->post('nama_lokasi');
        $data['id_merk']=$this->input->post('id_merk');
        $data['nama_ne']=$this->input->post('nama_ne');
        $data['rack']=$this->input->post('rack');
        $data['shelf']=$this->input->post('shelf');
        $data['slot']=$this->input->post('slot');
        $data['port']=$this->input->post('port');
        $data['board']=$this->input->post('board');
        $data['frekuensi']=$this->input->post('frekuensi');
        $data['user']=$this->input->post('user');
        $data['deskripsi']=$this->input->post('deskripsi');
		$this->tn_model->insert_port($data);
		
		$data['port'] = $this->tn_model->data($config['per_page'],$from);
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables-nms', $data);
    }

	public function delete_nms($id_port){
		/*$this->load->database();
		$jumlah_data = $this->tn_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/home/table_nms';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);*/
		
	 	$this->tn_model->delete_nms($id_port);
		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables-nms', $data);
	
	}

	public function insert_single_perangkat(){
		$this->load->view('admin/perangkat/insert_single_perangkat');
	}

	public function insert_double_perangkat(){
		$this->load->view('admin/perangkat/insert_double_perangkat');
	}
	public function edit_perangkat(){
		$this->load->view('admin/perangkat/edit_perangkat');
	}
	
	 function importcsv() {
        $data['addressbook'] = $this->tn_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '5000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('admin/nms/tables-nms', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $data = array(
                        'id_port'=>'NULL',
                        'nama_nms'=>$row['nama_nms'],
                        'nama_lokasi'=>$row['nama_lokasi'],
                        'id_merk'=>$row['id_merk'],
                        'nama_ne'=>$row['nama_ne'],
                        'rack'=>$row['rack'],
                        'shelf'=>$row['shelf'],
                        'slot'=>$row['slot'],
                        'port'=>$row['port'],
                        'board'=>$row['board'],
                        'frekuensi'=>$row['frekuensi'],
                        'user'=>$row['user'],
                        'deskripsi'=>$row['deskripsi'],

                    );
                    $this->tn_model->insert_csv($data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                $this->load->database();
                $jumlah_data = $this->tn_model->jumlah_data();
                $this->load->library('pagination');
                $config['base_url'] = base_url().'index.php/home/table_nms';
                $config['total_rows'] = $jumlah_data;
                $config['per_page'] = 100;
                $from = $this->uri->segment(3);
                $this->pagination->initialize($config);

                $data['port'] = $this->tn_model->data($config['per_page'],$from);
                $data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
                $this->load->view('admin/nms/tables-nms', $data);
        	
                    } else 
                        $data['error'] = "Error occured";
                        $this->load->view('admin/nms/tables-nms', $data);
                    }
 
        } 

        function importcsv_link() {
        $data2['addressbook'] = $this->tn_model->get_addressbook_link();
        $data2['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '5000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data2['error'] = $this->upload->display_errors();
 
            $this->load->view('admin/perangkat/tables_perangkat', $data2);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './upload/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $roww) {
                    $data2 = array(
                        'id_link'=>$roww['id_link'],
                        'host_a'=>$roww['host_a'],
                        'host_b'=>$roww['host_b'],
                        'fa_a'=>$roww['fa_a'],
                        'fa_b'=>$roww['fa_b'],
                        'nms'=>$roww['nms'],
                        'ne_a'=>$roww['ne_a'],
                        'board_a'=>$roww['board_a'],
                        'rack_a'=>$roww['rack_a'],
                        'shelf_a'=>$roww['shelf_a'],
                        'slot_a'=>$roww['slot_a'],
                        'port_a'=>$roww['port_a'],
                        'freq_a'=>$roww['freq_a'],
                        'ne_b'=>$roww['ne_b'],
                        'board_b'=>$roww['board_b'],
                        'rack_b'=>$roww['rack_b'],
                        'shelf_b'=>$roww['shelf_b'],
                        'slot_b'=>$roww['slot_b'],
                        'port_b'=>$roww['port_b'],
                        'freq_b'=>$roww['freq_b'],

                    );
                    $this->tn_model->insert_csv_link($data2);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');

               $data2['link_statis'] = $this->tn_model->get_link_statis()->result();
				// $data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
				$this->load->view('admin/perangkat/tables_perangkat', $data2);
	
            } else 
                $data2['error'] = "Error occured";
                $this->load->view('admin/perangkat/tables_perangkat', $data2);
            }
        } 
}