<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('link_model');
        $this->load->model('tn_model');
		$this->load->helper(array('url','form'));
        $this->load->library('csvimport');
        $this->load->library('session');
		
	}

	public function index(){
	
		$data['lokasi'] = $this->link_model->get_lokasi()->result();
		$data['link_statis'] = $this->link_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables-perangkat', $data);

	}

    public function insert_jalur(){
       $data['jumlah_jalur'] =  $this->input->post('jalur');
       $data['port']= $this->link_model->get_nms()->result();
      
        $this->load->view('admin/perangkat/create_link', $data);

    }

    public function create_link(){
       // $data['id_port'] = $this->input->post('id_port');
        $dataa['jumlah_jalur'] =  $this->input->post('jalur');
        echo "lala".$dataa['jumlah_jalur'];

       // exit;
        if($dataa['jumlah_jalur']<=2){
    		$data['host_a'] = $this->input->post('host_a');
            $data['host_b'] = $this->input->post('host_b');
            $data['fa_a'] = $this->input->post('fa_a');
            $data['fa_b'] = $this->input->post('fa_b');
           	$data['nms'] = $this->input->post('nama_nms1');
            $data['user'] = $this->input->post('user');            
            $data['ne_a'] = $this->input->post('ne1');
            $data['board_a'] = $this->input->post('board1');
            $data['shelf_a'] = $this->input->post('shelf1');
            $data['slot_a'] = $this->input->post('slot1');
            $data['port_a'] = $this->input->post('port1');
            $data['ne_b'] = $this->input->post('ne2');
            $data['board_b'] =$this->input->post('board2');
            $data['shelf_b'] = $this->input->post('shelf2');
            $data['slot_b'] = $this->input->post('slot2');
            $data['port_b'] = $this->input->post('port2');
            $data['keterangan'] = $this->input->post('keterangan');
            
            $this->link_model->delete_port($data['ne_a'],$data['board_a'], $data['shelf_a'], $data['slot_a'], $data['port_a']);
            $this->link_model->insert_link($data);
        }else{
            $data['host_a'] = $this->input->post('host_a');
            $data['host_b'] = $this->input->post('host_b');
            $data['fa_a'] = $this->input->post('fa_a');
            $data['fa_b'] = $this->input->post('fa_b');
            $data['nms'] = $this->input->post('nama_nms1');
            $data['user'] = $this->input->post('user');            
            $data['ne_a'] = $this->input->post('ne1');
            $data['board_a'] = $this->input->post('board1');
            $data['shelf_a'] = $this->input->post('shelf1');
            $data['slot_a'] = $this->input->post('slot1');
            $data['port_a'] = $this->input->post('port1');
            $data['ne_b'] = $this->input->post('ne2');
            $data['board_b'] =$this->input->post('board2');
            $data['shelf_b'] = $this->input->post('shelf2');
            $data['slot_b'] = $this->input->post('slot2');
            $data['port_b'] = $this->input->post('port2');
            $data['keterangan'] = $this->input->post('keterangan');
            
            $this->link_model->insert_link($data);
            $a=3;
            $b=4;
            for ($i=3; $i < $dataa['jumlah_jalur'] ; $i++) { 
                # code...

                $data2['nms']=$this->input->post('nama_nms'.$a);
                $data2['ne_a']=$this->input->post('ne'.$a);
                $data2['board_a']=$this->input->post('board'.$a);
                $data2['shelf_a']=$this->input->post('shelf'.$a);
                $data2['slot_a']=$this->input->post('slot'.$a);
                $data2['port_a']=$this->input->post('port'.$a);
                $data2['ne_b']=$this->input->post('ne'.$b);
                $data2['board_b']=$this->input->post('board'.$b);
                $data2['shelf_b']=$this->input->post('shelf'.$b);
                $data2['slot_b']=$this->input->post('slot'.$b);
                $data2['port_b']=$this->input->post('port'.$b);
                 $data['keterangan'] = $this->input->post('keterangan');

                $this->link_model->insert_link($data2);
                $a++;
                $b++;
            }
        }
      	$data['lokasi'] = $this->link_model->get_lokasi()->result();
		$data['link_statis'] = $this->link_model->get_link_statis()->result();
		
			redirect(site_url('link'));

    }

    
    public function proses_edit_link(){
            $data['id_link'] = $this->input->post('id_link');
            $data['host_a'] = $this->input->post('host_a');
            $data['host_b'] = $this->input->post('host_b');
            $data['fa_a'] = $this->input->post('fa_a');
            $data['fa_b'] = $this->input->post('fa_b');
            $data['nms'] = $this->input->post('nama_nms');
            $data['user'] = $this->input->post('user');                        
            $data['ne_a'] = $this->input->post('neA');
            $data['board_a'] = $this->input->post('boardA');
            $data['shelf_a'] = $this->input->post('shelfA');
            $data['slot_a'] = $this->input->post('slotA');
            $data['port_a'] = $this->input->post('portA');
            $data['freq_a'] = $this->input->post('freqA');
            $data['ne_b'] = $this->input->post('neB');
            $data['board_b'] =$this->input->post('boardB');
            $data['shelf_b'] = $this->input->post('shelfB');
            $data['slot_b'] = $this->input->post('slotB');
            $data['port_b'] = $this->input->post('portB');
            $data['freq_b'] = $this->input->post('freqB');
            $data['keterangan'] = $this->input->post('keterangan');
            $id_link=$this->input->post('id_link');
        $this->link_model->update_link($id_link, $data);
        // print_r($data);
        //   exit;
          redirect(site_url('Link'));
        
     }


     public function delete_link($id_link){
        $this->link_model->delete_link($id_link);
        $data['lokasi'] = $this->link_model->get_lokasi()->result();
        $data['link_statis'] = $this->link_model->get_link_statis()->result();
          redirect(site_url('link'));
 
   }

   function delete_multiple() {

            $this->load->database();
            $this->link_model->remove_checked();
          

            $data['lokasi'] = $this->link_model->get_lokasi()->result();
            $data['link_statis'] = $this->link_model->get_link_statis()->result();
            $this->load->view('admin/perangkat/tables-perangkat', $data);
           


        }

       public function edit_link($id_link){
       $data['link']=$this->link_model->get_link_by_id($id_link)->row();
        $data['port']= $this->link_model->get_nms()->result();
       $data['lokasi'] = $this->link_model->get_lokasi()->result();
       $this->load->view('admin/perangkat/edit_perangkat', $data);
   }
    


}