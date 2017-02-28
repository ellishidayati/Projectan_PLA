<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phpexcel_model extends CI_Model {

    public function upload_data($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './uploads/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }

        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);

        for ($i=2; $i < ($numRows+1) ; $i++) { 
                

            $ins = array(
                        'id_port'=>'NULL',
                        'nama_nms'=>$worksheet[$i]['A'],
                        'nama_lokasi'=>$worksheet[$i]['B'],
                        'id_merk'=>$worksheet[$i]['C'],
                        'nama_ne'=>$worksheet[$i]['D'],
                        'rack'=>$worksheet[$i]['E'],
                        'shelf'=>$worksheet[$i]['F'],
                        'slot'=>$worksheet[$i]['G'],
                        'port'=>$worksheet[$i]['H'],
                        'board'=>$worksheet[$i]['I'],
                        'kapasitas'=>$worksheet[$i]['J'],
                        'frekuensi'=>$worksheet[$i]['K'],
                        'user'=>$worksheet[$i]['L'],
                        'deskripsi'=>$worksheet[$i]['M']
                   );

            $this->db->insert('port', $ins);
        }
    }

     public function upload_data_link($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './uploads/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }

        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);

        for ($i=2; $i < ($numRows+1) ; $i++) { 
       

            $ins = array(
                         'user'=>$worksheet[$i]['A'],
                         'host_a'=>$worksheet[$i]['B'],
                        'host_b'=>$worksheet[$i]['C'],
                        'fa_a'=>$worksheet[$i]['D'],
                        'fa_b'=>$worksheet[$i]['E'],
                        'nms'=>$worksheet[$i]['F'],
                        'ne_a'=>$worksheet[$i]['G'],
                        'board_a'=>$worksheet[$i]['H'],
                        'rack_a'=>$worksheet[$i]['I'],
                        'shelf_a'=>$worksheet[$i]['J'],
                        'slot_a'=>$worksheet[$i]['K'],
                        'port_a'=>$worksheet[$i]['L'],
                        'freq_a'=>$worksheet[$i]['M'],
                        'ne_b'=>$worksheet[$i]['N'],
                        'board_b'=>$worksheet[$i]['O'],
                        'rack_b'=>$worksheet[$i]['P'],
                        'shelf_b'=>$worksheet[$i]['Q'],
                        'slot_b'=>$worksheet[$i]['R'],
                        'port_b'=>$worksheet[$i]['S'],
                        'freq_b'=>$worksheet[$i]['T']
                   );

            $this->db->insert('link_statis', $ins);
        }
    }


}

/* End of file Phpexcel_model.php */
/* Location: ./application/models/Phpexcel_model.php */
                      