<!DOCTYPE html>
<html lang="en">

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
   <link rel="icon" type="image/png" href="<?php echo base_url('asset/img/logo.png');?>">
  <link rel="stylesheet" href="<?php echo base_url('css/ionicons.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/datatables/dataTables.bootstrap.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins-->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/bootstrap.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/font-awesome.min.css');?>">

    <link href="<?php echo base_url('asset/admin2/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600')?>"
        rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/style.css');?>" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
  
  <body>
    <div class="navbar navbar-fixed-top" style="position: fixed;">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a><a class="brand" href="<?php echo site_url('Home/sukses');?>">SINDANISTRA</a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $this->session->userdata('username');?>  <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Profile</a></li>
                                <li><a href="<?php echo site_url('home/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
   
    <!-- /navbar -->
    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                    <li><a href="<?php echo site_url('Home/sukses');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a>
                    </li>
                    <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="icon-bar-chart"></i><span>Inventory</span> </a> </li>
                    <li><a href="<?php echo site_url('Link');?>"><i class="icon-code"></i><span>Data Link</span> </a> </li>
                    <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
					<li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-cog"></i><span>Setting Account </span> </a> </li>
				</ul>
		   </div>
            <!-- /container -->
        </div>
        <!-- /subnavbar-inner -->
    </div>

     </div>
     <br>
     <br>
     <br>
     </br>
     </br>
     </br>
    <!-- /subnavbar -->
	
	<div class="main">
        <div class="main-inner">
            <div class="container">
			 <div class="widget">
            
                  <div class="widget-header">
                    <i class="icon-bookmark"></i>
                    <h3>Download Report</h3>
                  </div> <!-- /widget-header -->
          
          <div class="widget-content">
			
				<?php   
					$x="";
                    if(isset($_SESSION['x'])){
                    //echo $_SESSION['x'];
                     $x = $_SESSION['x'];
                     }
                ?>

                           <div class="title_right">
                       <div class="control-group">                                        
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-download icon-white"></i> Download File</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url('Download/download_excel.php?x=').$x;?>"><i class="icon-file"></i>Excel</a></li>
                                                <li><a href="<?php echo base_url('Downloadpdf/pdf.php?x=').$x;?>"><i class="icon-file"></i>PDF</a></li>
                                               <!--  <li class="divider"></li>
                                                <li><a href="#"><i class="i"></i> Make admin</a></li> -->
                                              </ul>
                                            </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search" >
                            <div class="input-group">
								<h4>Download berdasarkan USER</h4>
                                <form action="<?php print site_url();?>/report/cari" method=POST>
                                <input class="input-lg" type=text name=cari>             
                                <a href="<?php echo base_url('report/download_report');?>"><button type="submit" class="btn btn-primary">OK</button></a>
                                </form> 
                            </div>
                        </div>
						<br></br>
						<br></br>
                            </div>
                               <!-- /controls -->          
                    </div>
              <!-- /control-group -->


          <!--   <canvas id="pie-chart" class="chart-holder"></canvas> -->
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            </div>
                <div class="widget">
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Report - Sistem Inventory Data Teknis Transport</h3>
                    </div>
					
					<div style="overflow-x:auto"> <!-- /widget-header -->
                    <div class="widget-content"  style="overflow-x:auto">

                   

					<!-- <br>
					<div class="title_right">
						<div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<form action="<?php print site_url();?>/report/cari" method=POST>
								<input type=text name=cari>				
								<a href="<?php echo base_url('report/download_report');?>"><button type="submit" class="btn btn-primary">search</button></a>
								</form>	
							</div>
						</div>
					</div> -->
					
					<div class="table-responsive">
					<div class="x_content" id="myDIV">
						<table id="example2" class="table table-striped table-bordered" border="1">
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
                                    <th>NE B</th>
                                    <th>Board B</th>
                                    <th>Shelf B</th>
                                    <th>Slot B</th>
                                    <th>Port B</th>
                                    <th>keterangan</th>
                                </tr>
							</thead>

						<tbody>
                            <?php 
                            $no = 0;
                            foreach($link_statis as $link){
                            ?>
                                <tr>
                                    <td>
                                     <?php  if($link->host_a=="-" || $link->host_a==""){
                                                $no=$no+0;
                                            }else{
                                                $no++;
                                                echo $no;
                                            }
                                    ?>
                                    </td>
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

                                    <td><?php echo $link->ne_b?></td>
                                    <td><?php echo $link->board_b?></td>
                                    <td><?php echo $link->shelf_b?></td>
                                    <td><?php echo $link->slot_b?></td>
                                    <td><?php echo $link->port_b?></td>
                                    <td><?php echo $link->keterangan?></td>
                                </tr>
                            <?php }?>  
                        </tbody>
						</table>
						</div>
						</div>
					 
						<!-- <?php 	
						$x="";
						if(isset($_SESSION['x'])){
							//echo $_SESSION['x'];
							$x = $_SESSION['x'];
						}
						?> -->
						
						<!-- <td>
							<a href="<?php echo base_url('Download/download_excel.php?x=').$x;?>"><button type="submit" class="btn btn-primary">Download Report berdasarkan pencarian </button></a>
							<a href="<?php echo site_url('Report');?>"><button type="submit" class="btn btn-danger">Back</button></a>
						</td>
						 -->
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="extra">
        <div class="extra-inner">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /extra-inner -->
    </div>
    <!-- /extra -->
    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
                    </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div>
    <!-- /footer -->

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
    <!-- Bootstrap core JavaScript
    ================================================== -->
      

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
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>


  <script>

    $(function(){
        $('.cek-all').click(function(){

          var cek = $(this).attr('checked')=='checked' ? true : false;

            $('.cekmultipel').attr('checked', cek);

        })

    })

</script>
</body>
</html>
