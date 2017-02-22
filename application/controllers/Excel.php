<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

    public $nama_tabel = 'csvimport';//Nama Tabel

    public function __construct()
    {
        parent::__construct();
        $this->load->library("PHPExcel");
        $this->load->model("phpexcel_model");
    }


    public function nms(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->phpexcel_model->upload_data($filename);
            unlink('./uploads/'.$filename);
            redirect('Home/table_nms','refresh');
        }
    }

    public function link(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->phpexcel_model->upload_data($filename);
            unlink('./uploads/'.$filename);
            redirect('Link','refresh');
        }
    }


}

/* End of file Phpexcel.php */
/* Location: ./application/controllers/Phpexcel.php */