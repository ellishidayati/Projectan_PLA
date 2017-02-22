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

}

/* End of file Phpexcel_model.php */
/* Location: ./application/models/Phpexcel_model.php */