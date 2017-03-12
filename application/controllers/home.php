<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('tn_model');
        $this->load->model('admin_model');
		$this->load->model('link_model');
		$this->load->library('csvimport');
        $this->load->library('google_maps');
	}


	public function index(){
		$data['jumlah'] = $this->tn_model->jumlah_nms()->result();
        $data['link'] = $this->tn_model->jumlah_link()->result();
        $data['lala'] = $this->tn_model->get_nms_link()->result();
        $data['user'] = $this->tn_model->get_user()->result();
     

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
		$this->load->view('user/index',$data);	
	}

	
	public function index(){
		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/login',$data);	
	}

    public function login(){
        $username = $this->input->post('username', 'true');
        $password = $this->input->post('password', 'true');
        $temp_account = $this->admin_model->check_admin_account1($username, $password)->row();

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
                $this->session->set_flashdata('notification', 'username dan password tidak sesuai, coba lagi');
                redirect(site_url('home/index'));
            }   
        }
    }
	
	//logout
	public function logout(){
		$this->session->sess_destroy(); //untuk mencatat akan dihapus
		redirect(site_url('home'));
    }
	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function setakun(){
		$this->load->view('admin/login_super_admin');	
	}
	
	public function setakun_(){
		$data['admin'] = $this->tn_model->get_admin()->result();
		$this->load->view('admin/setakun/tables-akun', $data);
	}
	
	public function login_saaa(){
        $username = $this->input->post('username', 'true');
        $password = $this->input->post('password', 'true');
        $status = $this->input->post('status', 'true');
        $temp_account = $this->admin_model->check_admin_account($username, $password, $status)->row();

        // check account
        $num_account = count($temp_account);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/login_super_admin');
        }else{
            if ($num_account > 0){
                // kalau ada set session
                $array_items = array(
                    'id_admin' => $temp_account->id_admin,
                    'username' => $temp_account->username,
                    'status' => $temp_account->status,
                    'logged_in' => true
                );
                $this->session->set_userdata($array_items);
                redirect(site_url('Home/setakun_'));
            }else{
                // kalau ga ada diredirect lagi ke halaman login
                $this->session->set_flashdata('notification', 'username dan password tidak sesuai, coba lagi');
                redirect(site_url('home/setakun'));
            }   
        }
    }
	
	public function delete_akun($id_admin){
	 	$this->tn_model->delete_akun($id_admin);
		$data['admin'] = $this->tn_model->get_admin()->result();
		$this->load->view('admin/setakun/tables-akun', $data);
	}
	
	function insert_akun(){
		$this->load->view('admin/setakun/insert-akun');
	}	
	
	public function proses_insert_akun(){
        $data['id_admin'] = $this->input->post('id_admin');
        $data['nama'] = $this->input->post('nama');
        $data['jabatan'] = $this->input->post('jabatan');
        $data['status'] = $this->input->post('status');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
		
		$this->tn_model->insert_akun($data);

		redirect('Home/setakun_');
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
    public function sukses(){
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
	         	$marker['infowindow_content'] = '1 - Hello World!';
				$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='.$kordinat->kd.'|'.$kordinat->warna.'|000000';
	             $this->google_maps->add_marker($marker);

	         }

        $data['map'] = $this->google_maps->create_map();

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

		$data['port'] = $this->tn_model->data($config['total_rows'],$from);
		$data['merk'] = $this->tn_model->get_merk_by_id()->result();
		$this->load->view('admin/nms/tables-nms', $data);
	}

	public function table_sisa(){

		$data['port'] = $this->tn_model->get_sisa_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id()->result();
		$this->load->view('admin/nms/tables-sisa', $data);
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

    function delete_multiple() {

            $this->load->database();
            $this->tn_model->remove_checked();
            // redirect('Home/tables_nms');

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

            // $this->load->view('admin/nms/tables-nms');


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
	
	
        
}