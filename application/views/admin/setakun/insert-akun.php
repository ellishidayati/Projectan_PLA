<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SINDANISTRA</title>
     <link rel="icon" type="image/png" href="<?php echo base_url('asset/img/logo.png');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="<?php echo base_url('asset/admin2/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('asset/admin2/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin2/css/font-awesome.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('asset/admin2/css/style.css');?>" rel="stylesheet">
   


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="<?php echo site_url('Home/sukses');?>">SINDANISTRA</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							<?php echo $this->session->userdata('username');?> 
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Profile</a></li>
							<li><a href="<?php echo site_url('home/logout'); ?>">Logout</a></li>
						</ul>						
					</li>
				</ul>
			
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			  <ul class="mainnav">

       <li><a href="<?php echo site_url('Home/sukses');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a>
                    </li>
                    <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="icon-bar-chart"></i><span>Inventory</span> </a> </li>
                     <li><a href="<?php echo site_url('Home/table_sisa');?>"><i class="icon-bar-chart"></i><span>Sisa Jalur</span> </a> </li>
                    <li><a href="<?php echo site_url('Link');?>"><i class="icon-code"></i><span>Data Link</span> </a> </li>
                    <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                   
                    <li><a href="<?php echo site_url('Home/manual_book');?>"><i class="icon-book"></i><span>Manual Book</span> </a> </li>
		<!-- <li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li> -->

      

    <!--     <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li> -->
	<ul>
		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-bookmark"></i>
	      				<h3>Insert New Account</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">		
						<div class="tab-content">
							<div>
								<form id="edit-profile" class="form-horizontal" <?php echo form_open_multipart('Home/proses_insert_akun'); ?> 
									<fieldset>
										
									<div class="control-group">											
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama</label>

										<div class="controls">
										 <div class="col-md-6 col-sm-6 col-xs-12">
                          					<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" type="text" required="required">
                      					 </div>
											</div> 				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="name">Jabatan</label>
												<div class="controls">
                             						<select class="form-control" name="jabatan" required="required">
                             								<option value=""></option> 
                                							<option value="manager">manager</option>
                                							<option value="pegawai">pegawai</option>
                              						</select>
												</div> <!-- /controls -->				
										</div> <!-- /control-group -->
									

                      					<div class="control-group">
                       						 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Status akun</label>
                        				<div class="controls">
                         					<select class="form-control" name="status" required="required">
                         						<option value=""></option> 
                                				<option value="super admin">super admin</option>
                                				<option value="admin">admin</option>
                              				</select>
                        				</div>
                     					</div>

										 <div class="control-group">
                        					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Username</label>
                       					 	<div class="controls">
                          						<input  id="website" name="username" required="required" class="form-control col-md-7 col-xs-12">
                       					 	</div>
                      					</div>
										
										
										 <div class="control-group">
                       						 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Password</label>
                       							 <div class="controls">
                          							<input  type="password" name="password"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" required="required">
                        						</div>
                     					 </div>


										 <div class="form-actions">
                       
                      
                          <button id="send" type="submit" class="btn btn-primary">Submit</button>
                     
                      </div>
										
							
									</fieldset>
								</form>
								 <div class="control-group" style="margin-top:-83px; margin-left: 250px; position: absolute;">
                      <div class="controls">
                          <a href="<?php echo site_url('Home/setakun_');?>"><button type="submit" class="btn">Cancel</button></a>
                      </div>
                    </div>
								</div>
								
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    
    
    
 
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
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    


<script src="<?php echo base_url('asset/admin2/js/jquery-1.7.2.min.js');?>"></script>
	
<script src="<?php echo base_url('asset/admin2/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('asset/admin2/js/base.js');?>"></script>


  </body>

</html>
