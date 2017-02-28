<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('report_model');
		$this->load->library('pagination');
	}
	
		//REPORT
		public function index(){

			if(isset($_SESSION['x'])){
				unset($_SESSION['x']);
			}
			
			$this->load->database();
			$jumlah_data = $this->report_model->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/report/index';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 10;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);

			$data['link_statis'] = $this->report_model->data($config['total_rows'],$from);
			$this->load->view('admin/report/tables-report', $data);
		}
		
		public function download_report(){
			$this->load->view('admin/report/download-report');
		}
	
		//DOWNLOAD CSV REPORT
		public function exportcsv() {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";

        $filename = "datektransport.csv";
        $query = "SELECT * FROM link_statis";

        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
		}

		//SEARCH REPORT
		public function cari(){
			$data['link_statis']=$this->report_model->caridata();
			//jika data yang dicari tidak ada maka akan keluar informasi 
			//bahwa data yang dicari tidak ada
			if($data['link_statis']==null) {
				print 'maaf data yang anda cari tidak ada atau keywordnya salah  ';
				print anchor('report','kembali');
			}else{
				$this->load->database();
				$jumlah_data = $this->report_model->jumlah_data();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'index.php/report/table-report';
				$config['total_rows'] = $jumlah_data;
				$config['per_page'] = 10;
				$from = $this->uri->segment(3);
				$this->pagination->initialize($config);
				
				$c = $_POST['cari'];
				$this->session->set_userdata('x',$c);
				
				$data2['link_statis'] = $this->report_model->data($config['total_rows'],$from);
				$this->load->view('admin/report/download-report',$data);
			}
		}
}