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
   <link rel="icon" type="image/png" href="<?php echo base_url('asset/img/4.png');?>">
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
                        <li><a href="<?php echo site_url('Home');?>">Login as Admin</a></li>
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
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h2>Sistem Inventory Data Teknis Transport</h2><h4>Data Link</h4>
                    </div>
                    <div class="widget-content"  style="overflow-y:auto">
                    <div class="table-responsive" id="myDIV">
              
                      <table id="example2" class="table table-bordered table-striped" style="background-color: none;">
                  <thead>
                        <tr>
                         
                          <th>No</th>
                          <th>User</th>                        
                          <th>Node A</th>
                          <th>Node B</th>
                          <th>Client A</th>
                          <th>Client B</th>
                          <th>NMS</th>
                          <th>NE A</th>
                          <th>Board A</th>
                          <th>Shelf A</th>
                          <th>Slot A</th>
                          <th>Port A</th>
                          <th>Freq A</th>
                          <th>NE B</th>
                          <th>Board B</th>
                          <th>Shelf B</th>
                          <th>Slot B</th>
                          <th>Port B</th>
                          <th>freq B</th>
                          <th>Keterangan</th>
                        
                        </tr>
                      </thead>


                      <tbody>
            <?php 
            $no = 0;
            foreach($link_statis as $link){

              ?>
                        
                         
                       

                        <td><?php 
                           if($link->host_a=="-" || $link->host_a==""){
                              $no=$no+0;
                            }else{
                                $no++;
                                echo $no; }
                                 ?></td> 
                          <td><?php echo $link->user?></td>
                          <td><?php echo $link->host_a?></td>
                          <td><?php echo $link->host_b?></td>
                          <td><?php echo $link->fa_a?></td>
                          <td><?php echo $link->fa_b?></td>
                          <td><?php echo $link->nms?></td>
                          <td><?php echo $link->ne_a?></td>
                          <td><?php echo $link->board_a?></td>
                          <td><?php echo $link->shelf_a?></td>
                          <td><?php echo $link->slot_a?></td>
                          <td><?php echo $link->port_a?></td>
                          <td><?php echo $link->freq_a?></td>
                          <td><?php echo $link->ne_b?></td>
                          <td><?php echo $link->board_b?></td>
                          <td><?php echo $link->shelf_b?></td>
                          <td><?php echo $link->slot_b?></td>
                          <td><?php echo $link->port_b?></td>
                          <td><?php echo $link->freq_b?></td>
                          <td><?php echo $link->keterangan?></td>
                         
                        </tr>
                <?php }?>  
                      </tbody>
                       
                        <br>
                        <br>
              </table>
              </div>
              </div>  
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
						<div class="copyright">
						<p>&copy; PLA UPI 2017</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            
                           <a href="">SINDANISTRA</a> Sistem Inventory Data Teknis Transport<a href=""></a> -->
                        </div>
					</div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/TelkomIndonesia" data-placement="top" title="Facebook" class="fa fa-facebook-square"></a></li>
						<li><a href="https://www.facebook.com/TelkomIndonesia" data-placement="top" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="https://www.instagram.com/telkomindonesia/" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/telkomindonesiaofficial" data-placement="top" title="youtube"><i class="fa fa-youtube"></i></a></li>
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

<!-- Bootstrap core JavaScript-->
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
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>


</body>
</html>
