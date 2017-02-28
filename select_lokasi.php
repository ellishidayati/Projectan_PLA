<?php
include "../koneksi.php";
if (!empty($_GET['nms'])){
	$nms = $_GET['nms'];	
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM port where nama_nms='$nms' group by nama_lokasi"); 
		echo"<option>Pilih Nama NE</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value='".$d['nama_lokasi']."'>".$d['nama_lokasi']."</option>";
			// echo $d['nama_ne'];
		}
	// }
}
if (!empty($_GET['ne'])){
	$lok = $_GET['ne'];	
	$nms = $_GET['nm'];
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT nama_ne FROM port WHERE NOT EXISTS (select *from link_statis where (port.nama_lokasi='$lok' and port.nama_nms='$nms' and port.nama_ne = link_statis.ne_a and port.rack=link_statis.rack_a and port.shelf=link_statis.shelf_a and port.slot=link_statis.slot_a and port.port=link_statis.port_a and port.board=link_statis.board_a) OR (port.nama_lokasi='$lok' and port.nama_nms='$nms' and port.nama_ne = link_statis.ne_b and port.rack=link_statis.rack_b and port.shelf=link_statis.shelf_b and port.slot=link_statis.slot_b and port.port=link_statis.port_b and port.board=link_statis.board_b)) group by nama_ne "); 
		echo"<option>Pilih Nama NE</option>";
		//echo"<option>".$_GET['ne']."</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value='".$d['nama_ne']."'>".$d['nama_ne']."</option>";
			// echo $d['nama_ne'];
		}
	// }
}
if (!empty($_GET['board'])){
$br = $_GET['board'];		

	// if (ctype_digit($_GET['ne'])) {

		$query = mysqli_query($conn,"SELECT * FROM port where not exists (select *from link_statis where (port.nama_ne='$br' and port.nama_ne = link_statis.ne_a and port.rack=link_statis.rack_a and port.shelf=link_statis.shelf_a and port.slot=link_statis.slot_a and port.port=link_statis.port_a and port.board=link_statis.board_a) OR (port.nama_ne='$br' and port.nama_ne = link_statis.ne_b and port.rack=link_statis.rack_b and port.shelf=link_statis.shelf_b and port.slot=link_statis.slot_b and port.port=link_statis.port_b and port.board=link_statis.board_b))  group by board "); 

		echo"<option>Pilih Board</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['board'].">".$d['board']."</option>";
			//echo $d['nama_ne'];
		}
}
if (!empty($_GET['shelf'])){
	$t = $_GET['shelf'];
	//html_escape($t);
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM port where not exists  (select *from link_statis where (port.nama_ne='$t' and port.nama_ne = link_statis.ne_a and port.rack=link_statis.rack_a and port.shelf=link_statis.shelf_a and port.slot=link_statis.slot_a and port.port=link_statis.port_a and port.board=link_statis.board_a) OR (port.nama_ne='$t' and port.nama_ne = link_statis.ne_b and port.rack=link_statis.rack_b and port.shelf=link_statis.shelf_b and port.slot=link_statis.slot_b and port.port=link_statis.port_b and port.board=link_statis.board_b)) group by shelf, order by port"); 
		echo"<option>Pilih Shelf</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['shelf'].">".$d['shelf']."</option>";
			//echo $d['nama_ne'];
		}
	// }

}
 if (!empty($_GET['slot']) || $_GET['slot']=='0'){

$b = $_GET['slot'];
$t = $_GET['sh'];
$l = $_GET['n'];
	// if (ctype_digit($_GET['ne'])) {
		echo $l."----------------";


		$query = mysqli_query($conn,"SELECT * FROM port where not exists (select *from link_statis where (port.shelf='$b' and port.nama_ne='$t' and port.nama_lokasi='$l' and port.nama_ne = link_statis.ne_a and port.rack=link_statis.rack_a and port.shelf=link_statis.shelf_a and port.slot=link_statis.slot_a and port.port=link_statis.port_a and port.board=link_statis.board_a) OR (port.shelf='$b' and port.nama_ne='$t' and port.nama_lokasi='$l' and port.nama_ne = link_statis.ne_b and port.rack=link_statis.rack_b and port.shelf=link_statis.shelf_b and port.slot=link_statis.slot_b and port.port=link_statis.port_b and port.board=link_statis.board_b)) group by slot, order by port"); 
		if(!empty($query)){
			echo "lala";
		}
		echo"<option>Pilih Slot</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['slot'].">".$d['slot']."</option>";
			//echo $d['nama_ne'];
		}

	// }
 }



if (!empty($_GET['port'])){
$port = $_GET['port'];		

	// if (ctype_digit($_GET['ne'])) {


		$query = mysqli_query($conn,"SELECT * FROM port where not exists (select *from link_statis where (port.board='$port' and port.nama_ne = link_statis.ne_a and port.rack=link_statis.rack_a and port.shelf=link_statis.shelf_a and port.slot=link_statis.slot_a and port.port=link_statis.port_a and port.board=link_statis.board_a) OR (port.board='$port' and port.nama_ne = link_statis.ne_b and port.rack=link_statis.rack_b and port.shelf=link_statis.shelf_b and port.slot=link_statis.slot_b and port.port=link_statis.port_b and port.board=link_statis.board_b)) group by port, order by port"); 
		echo"<option>Pilih Port</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['port'].">".$d['port']."</option>";
			//echo $d['nama_ne'];
		}
}
 //echo $_GET['board'];
 // echo "<option value="hai">HAI</option>";
?>
