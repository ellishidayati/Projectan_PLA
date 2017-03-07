<!DOCTYPE html>
<html lang="en">
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo site_url('Home/sukses');?>">SINDANISTRA</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('Home/setakun');?>">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"> 
			<a href="" class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-user"></i> <?php echo $this->session->userdata('username');?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" data-target="#myModal">Profile</a></li>
			  
			<!-- Trigger the modal with a button 
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
							
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
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="<?php echo site_url('home/sukses');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="icon-bar-chart"></i><span>Inventory</span> </a> </li>
         <li><a href="<?php echo site_url('Link');?>"><i class="icon-code"></i><span>Data Link</span> </a> </li>
        <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
		<!-- <li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li> -->
    <!--     <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li> -->
	<ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
	
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Profile</h4>
				 </div>
				 <div class="modal-body">
					<p>Some text in the modal.</p>
				 </div>
				 <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>

			</div>
		</div>	
		
    <div class="row">
      <div id="googleMap" style="width:100%;height:450px;"></div>
    </div>
      <div class="row">
       <br>
        <br>
        <div class="span6">
           <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /span6 -->
       
        <div class="span6">
        
    
               <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
   
      
          
        </div>
        <div class="row">
       <br>
        <br>
        <div class="span6">
           <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /span6 -->
       
        <div class="span6">
        
    
         
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
   
      
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
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
        <div class="span12"> &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url('asset/admin2/js/jquery-1.7.2.min.js');?>"></script> 
<script src="<?php echo base_url('asset/admin2/js/excanvas.min.js')?>"></script> 
<script src="<?php echo base_url('asset/admin2/js/chart.min.js');?>" type="text/javascript"></script> 
<script src="<?php echo base_url('asset/admin2/js/bootstrap.js');?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url('asset/admin2/js/full-calendar/fullcalendar.min.js');?>"></script>
 
<script src="<?php echo base_url('asset/admin2/js/base.js');?>"></script> 
<script type="text/javascript">
  Highcharts.chart('container1', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Data Inventory'
    },
    // subtitle: {
    //     text: 'Source: WorldClimate.com'
    // },
    xAxis: {
        categories: [<?php foreach ($jumlah as $p) {
              echo "'".$p->nama_nms."',";
            }?>]
    },
    yAxis: {
        title: {
            text: 'Jumlah Data'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Inventory',
        data: [<?php foreach ($jumlah as $jml) {
              echo "".$jml->total.",";
            }?>]
    }]
});
</script>
<script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Data Link'
    },
    // subtitle: {
    //     text: 'Source: WorldClimate.com'
    // },
    xAxis: {
        categories: [<?php foreach ($lala as $jml) {
              echo "'".$jml->nms."',";
            }?>]
    },
    yAxis: {
        title: {
            text: 'Jumlah Data'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [ {
        name: 'Data Link',
        data: [<?php foreach ($link as $jml) {
              echo "".$jml->total.",";
            }?>]
    }]
});
</script>
<script type="text/javascript">
  Highcharts.chart('container2', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Data User'
    },
    // subtitle: {
    //     text: 'Source: WorldClimate.com'
    // },
    xAxis: {
        categories: [<?php foreach ($user as $jml) {
              echo "'".$jml->user."',";
            }?>]
    },
    yAxis: {
        title: {
            text: 'Jumlah Data'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [ {
        name: 'Data User',
        data: [<?php foreach ($user as $jml) {
              echo "".$jml->total.",";
            }?>]
    }]
});
</script>
<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(0.7893,113.9213),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpLItGaLzmoLdYdYu4FX0wzHu0yngX9xo&callback=myMap"></script>
</body>
</html>
