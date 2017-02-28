<?php

include 'conn.php';

//mengambil data dari tabel
$sql=mysqli_query($conn, "SELECT * FROM link_statis");

		$no = 0;
		$qrys=mysqli_query($conn,"SELECT * FROM link_statis");
		
		
		if(isset($_GET['x'])){
			$e = $_GET['x'];
			if($e != ""){
				$sql=mysqli_query($conn,"SELECT * FROM link(target, link)k_statis WHERE host_a LIKE '$e'");
			}
		}
		

$data = array();
	while ($row = mysqli_fetch_array($sql)) {
   		array_push($data, $row);
	}
 
//mengisi judul dan header tabel

$judul = "DATA TEKNIS TRANSPORT";
$header = array(
			array("label"=>"No", "length"=>10, "align"=>"C"),
			array("label"=>"User", "length"=>20, "align"=>"C"),
			array("label"=>"Node A", "length"=>25, "align"=>"C"),
			array("label"=>"Node B", "length"=>25, "align"=>"C"),
			array("label"=>"Client A", "length"=>22, "align"=>"C"),
			array("label"=>"Client B", "length"=>22, "align"=>"C"),
			array("label"=>"NMS", "length"=>20, "align"=>"C"),
			array("label"=>"NE", "length"=>43, "align"=>"C"),
			array("label"=>"Board", "length"=>30, "align"=>"C"),
			array("label"=>"Rack", "length"=>10, "align"=>"C"),
			array("label"=>"Shelf", "length"=>12, "align"=>"C"),
			array("label"=>"Slot", "length"=>10, "align"=>"C"),
			array("label"=>"Port", "length"=>10, "align"=>"C"),
			array("label"=>"Frekuensi", "length"=>15, "align"=>"C"),
			
		);
 



//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF('L');
$pdf->AddPage();
 
//tampilan Judul Laporan
$pdf->SetFont('Arial','B','12'); //Font Arial, Tebal/Bold, ukuran font 16
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
//Header Table
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(220,220,220); //warna dalam kolom header
$pdf->SetTextColor(0); //warna tulisan putih
$pdf->SetDrawColor(192,192,192); //warna border
$pdf->SetFont('Arial','B',8);
	foreach ($header as $kolom) {
    	$pdf->Cell($kolom['length'], 6, $kolom['label'], 1, '0', $kolom['align'], true);
	}

$pdf->Ln();
 
//menampilkan data table
$pdf->SetFillColor(220,220,220); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;
$i=1;
	foreach ($data as $baris) {
		$j = 0;
		$baris[0]=$i;
		$temp=$baris[1];
		$baris[1]=$baris[6];
		$baris[6]=$temp;

		for($j=0; $j<14; $j++){
			
				$pdf->Cell($header[$j]['length'], 6, $baris[$j], 1, '0', 'C', $fill);
		
			
		
		}

		$pdf->Ln();
		for($k=0; $k<14; $k++){
			if($k>6){
		$pdf->Cell($header[$k]['length'], 6, $baris[$k+7], 1, '0', 'C', $fill);
		}else{
			$pdf->Cell($header[$k]['length'], 6, '', 1, '0', 'C', $fill);
		}
		}
		$i++;
		$fill = !$fill;
		$pdf->Ln();
		}
 
//output file pdf
$pdf->Output();
?>