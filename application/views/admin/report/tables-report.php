<!DOCTYPE html>
<html lang="en">

<style>

#myDIV {
    
    height: 335px;
   /* width: 400px;*/
  /*  width.table-layout: 500px;*/
}
</style>

 <head>
    <meta charset="utf-8">
    <title>SINDANISTRA</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="<?php echo base_url('asset/admin2/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('asset/admin2/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/font-awesome.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('asset/admin2/css/style.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('asset/admin2/css/pages/reports.css');?>" rel="stylesheet">

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
                            class="icon-cog"></i> Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Settings</a></li>
                                <li><a href="javascript:;">Help</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $this->session->userdata('username');?> <b class="caret"></b></a>
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
					<li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li>
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
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Report - Sistem Inventory Data Teknis Transport</h3>
                    </div>
					


					<div style="overflow-x:auto"> <!-- /widget-header -->
                    <div class="widget-content"  style="overflow-x:auto">
					
					
					<div class="title_right">
                       <div class="control-group">                                         
                                            <label class="control-label" for="radiobtns">Download Report</label>
                                            
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-download icon-white"></i> Download File</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="<?php echo site_url('Report/exportcsv');?>"><i class="icon-file"></i>CSV</a></li>
                                                <li><a href="<?php echo base_url('Download/download_excel.php')?>"><i class="icon-file"></i>Excel</a></li>
                                                <li><a href="<?php echo base_url('Downloadpdf/pdf.php');?>"><i class="icon-file"></i>PDF</a></li>
                                               <!--  <li class="divider"></li>
                                                <li><a href="#"><i class="i"></i> Make admin</a></li> -->
                                              </ul>
                                            </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search" >
                            <div class="input-group">
                                <form action="<?php print site_url();?>/report/cari" method=POST>
                                <input type=text name=cari>             
                                <a href="<?php echo base_url('report/download_report');?>"><button type="submit" class="btn btn-primary">search</button></a>
                                </form> 
                            </div>
                        </div>
                                              </div>
                                                  <!-- /controls -->          
                    </div>
                </div> <!-- /control-group -->
                    
					<div class="table-responsive">
					<div class="x_content" id="myDIV">
						<table id="datatable-buttons" class="table table-striped table-bordered" border="1">
							<thead>
								<tr>
									<th>No</th>                        
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
								</tr>
							</thead>

						<tbody>
							<?php 
							$no = 0;
							foreach($link_statis as $link){
							?>
								<tr>
									<td>
									 <?php	if($link->host_a=="-" || $link->host_a==""){
												$no=$no+0;
											}else{
												$no++;
												echo $no;
											}
									?>
									</td>
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
								</tr>
							<?php }?>  
						</tbody>
						</table>
						
						
                      </div>
							<!-- <?php echo $this->pagination->create_links(); ?> -->
                      </div>
						
						<!-- <td>
						   <a href="<?php echo site_url('Report/exportcsv');?>"><button type="submit" class="btn btn-primary">Download Report (.csv)</button></a>
						   <a href="<?php echo base_url('Download/download_excel.php')?>"><button type="submit" class="btn btn-success">Download Report (.xls)</button></a>
						   <a href="<?php echo base_url('Downloadpdf/pdf.php');?>"><button type="submit" class="btn btn-primary">Download Report (.pdf)</button></a>
						</td> -->
						
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

<script src="<?php echo base_url('asset/admin2/js/jquery-1.7.2.min.js');?>"></script>
<script src="<?php echo base_url('asset/admin2/js/excanvas.min.js');?>"></script>
<script src="<?php echo base_url('asset/admin2/js/chart.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/admin2/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('asset/admin2/js/base.js');?>"></script>
<script>
    
    function myFunction() {
        document.getElementById("myDIV").style.overflowY = "scroll";
    }
    
    </script>


  </body>

</html>
