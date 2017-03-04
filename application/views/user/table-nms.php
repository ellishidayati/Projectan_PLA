<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	#myDIV {
		
		height: 400px;
	   /* width: 400px;*/
	  /*  width.table-layout: 500px;*/
	}
	</style>
	
    <meta charset="utf-8">
    <title>SINDANISTRA</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Tell the browser to be responsive to screen width -->

	  <link rel="stylesheet" href="<?php echo base_url('css/ionicons.min.css');?>">
	  <!-- DataTables -->
	  <link rel="stylesheet" href="<?php echo base_url('plugins/datatables/dataTables.bootstrap.css');?>">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins-->
	  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css');?>">

	  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/bootstrap.css');?>">
	  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/font-awesome.min.css');?>">

	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="<?php echo base_url('asset/user/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/user/plugins/flexslider/flexslider.css');?>" rel="stylesheet" media="screen" />	
	<link href="<?php echo base_url('asset/user/css/cubeportfolio.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/user/css/style.css');?>" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="<?php echo base_url('asset/user/skins/default.css');?>" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
	<!-- start header -->
	<header>
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    	<!--<a class="navbar-brand" href="index.html">SISTEM INVENTORY DATA TEKNIS TRANSPORT</a>-->
                    <a class="navbar-brand" href="<?php echo site_url('User');?>"><img src="<?php echo base_url('asset/user/img/telkom.png')?>" alt="" width="140" height="80" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">						
                        <li><a href="<?php echo site_url('User');?>">Home</a></li>
                        <li><a href="<?php echo site_url('User/table_nms');?>">Inventory</a></li>
                        <li><a href="<?php echo site_url('User/table_perangkat');?>">Data Link</a></li>
                        <li><a href="<?php echo site_url('Home/index2');?>">Login as Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<!-- start slider -->
  
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="widget">
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h2>Sistem Inventory Data Teknis Transport</h2><h4>Inventory</h4>             
                    </div>
                       <!-- /widget-header -->
                        <div class="widget-content"  style="overflow-y:auto">
                     <div class="table-responsive" id="myDIV">
                

                <table id="example1" class="table table-bordered table-striped" style="background-color: none;">
					<thead>
                        <tr>
                          <th>No</th>
                          <th>NMS</th>
                          <th>Lokasi</th>
                          <th>Merk</th>
                          <th>NE</th>
                          <th>Rak</th>
                          <th>Shelf</th>
                          <th>Slot</th>
                          <th>Port</th>
                          <th>Board</th>
                          <th>Kapasitas</th>
                          <th>Frekuensi</th>
                          <th>User</th>
                          <th>Deskripsi</th>
                        </tr>
                    </thead>
					
            <tbody>	
            <?php 
				$no = 0;
				foreach($port as $portt){
				  $no++;
				  $i=$portt->id_merk;
            ?>
                <tr>
					<td><?php echo $no?></td>
					<td><?php echo $portt->nama_nms?></td>
					<td><?php echo $portt->nama_lokasi?></td>
					<td><?php echo $merk[$i-1]->nama_merk?></td>
					<td><?php echo $portt->nama_ne?></td>
					<td><?php echo $portt->rack?></td>
					<td><?php echo $portt->shelf?></td>
					<td><?php echo $portt->slot?></td>
					<td><?php echo $portt->port?></td>
					<td><?php echo $portt->board?></td>
					<td><?php echo $portt->kapasitas?></td>
					<td><?php echo $portt->frekuensi?></td>
					<td><?php echo $portt->user?></td>
					<td><?php echo wordwrap($portt->deskripsi,15,"<br>\n")?></td>		
                </tr>        
            <?php }?>  
            </tbody>
           
			  </table>
              </div>
              </div>
			  <!-- /bar-chart -->
              </div>
            <!-- /widget-content -->
			</div>
        </div>
        <!-- /container -->
    </div>
    <!-- /main-inner -->
</div>
<!-- /main -->
    
	
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; PLA UPI 2017</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="">SINDANISTRA</a> Sistem Inventory Data Teknis Transport<a href=""></a>
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>-->

	
<!-- Le javascript
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/app.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js');?>"></script>
<!-- page script -->
<!-- Bootstrap core JavaScript -->
    
<script>

    function doconfirm(){
      job = confirm("Are you sure to delete permanently?");
        if (job!=true){
          return false;
        }
    }
</script>
    <script>
    
    function myFunction() {
        document.getElementById("myDIV").style.overflowY = "scroll";
    }
    
    </script>

    <script>

    $(function(){
        $('.cek-all').click(function(){

          var cek = $(this).attr('checked')=='checked' ? true : false;

            $('.cekmultipel').attr('checked', cek);

        })

    })

</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $("#example2").DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


</body>
</html>
