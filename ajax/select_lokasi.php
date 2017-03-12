okeee <?php
include "../koneksi.php";
if (!empty($_GET['nms'])){
	$nms = $_GET['nms'];	
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM sisa_port where nama_nms='$nms' group by nama_lokasi"); 
		echo"<option>Pilih Nama NE</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value='".$d['nama_lokasi']."'>".$d['nama_lokasi']."</option>";
			// echo $d['nama_ne'];
		}
	// }
}
if (!empty($_GET['lok'])){
	$lok = $_GET['lok'];	
	$nms = $_GET['nm'];
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM sisa_port where nama_lokasi='$lok' and nama_nms='$nms' group by nama_ne"); 
		echo"<option>Pilih Nama NE</option>";
		//echo"<option>".$_GET['ne']."</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value='".$d['nama_ne']."'>".$d['nama_ne']."</option>";
			// echo $d['nama_ne'];
		}
	// }
}
if (!empty($_GET['ne'])){
$ne = $_GET['ne'];
$lok1 = $_GET['lok1'];
$nms1 = $_GET['nm1'];

	// if (ctype_digit($_GET['ne'])) {

		$query = mysqli_query($conn,"SELECT * FROM sisa_port where  nama_nms = '$nms1' and nama_lokasi = '$lok1' and nama_ne='$ne' group by board "); 

		echo"<option>Pilih Board</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['board'].">".$d['board']."</option>";
			//echo $d['nama_ne'];
		}
}
if (!empty($_GET['board'])){
	$board = $_GET['board'];
	$ne = $_GET['ne1'];
	$lok = $_GET['lok2'];
	$nms = $_GET['nm2'];
	//html_escape($t);
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM sisa_port where board='$board' and nama_ne='$ne' and nama_lokasi = '$lok' and nama_nms = '$nms'  group by shelf"); 
		echo"<option>Pilih Shelf</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['shelf'].">".$d['shelf']."</option>";
			//echo $d['nama_ne'];
		}
	// }

}
 if (!empty($_GET['shelf']) || $_GET['shelf']=='0'){
 	$shelf = $_GET['shelf'];
 	$board = $_GET['board1'];
	$ne = $_GET['ne2'];
	$lok = $_GET['lok3'];
	$nms = $_GET['nm3'];

	// if (ctype_digit($_GET['ne'])) {
		echo $l."----------------";


		$query = mysqli_query($conn,"SELECT * FROM sisa_port where shelf='$shelf' and board='$board' and nama_ne='$ne' and nama_lokasi = '$lok' and nama_nms = '$nms' group by slot "); 
		echo"<option>Pilih Slot</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['slot'].">".$d['slot']."</option>";
			//echo $d['nama_ne'];
		}

	// }
 }



if (!empty($_GET['slot'])){
	$slot = $_GET['slot'];
	$shelf = $_GET['shelf1'];
 	$board = $_GET['board2'];
	$ne = $_GET['ne3'];
	$lok = $_GET['lok4'];
	$nms = $_GET['nm4'];		

	// if (ctype_digit($_GET['ne'])) {


		$query = mysqli_query($conn,"SELECT * FROM sisa_port where slot = '$slot' and shelf='$shelf' and board='$board' and nama_ne='$ne' and nama_lokasi = '$lok' and nama_nms = '$nms'  group by port"); 
		echo"<option>Pilih Port</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['port'].">".$d['port']."</option>";
			//echo $d['nama_ne'];
		}
}
 //echo $_GET['board'];
 // echo "<option value="hai">HAI</option>";
?>
