<!DOCTYPE html>
<html lang="en">
<head>

<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
   /* border: 1px solid #ccc;
    border-top: none;*/
}
</style>

<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url('asset/admin2/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/admin2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/admin2/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600');?>"
        rel="stylesheet">
<link href="<?php echo base_url('asset/admin2/css/font-awesome.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/admin2/css/style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/admin2/css/pages/dashboard.css');?>" rel="stylesheet">
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
          <li class="dropdown"> 
      <a href="" class="dropdown-toggle" data-toggle="dropdown">
      <i class="icon-user"></i> <?php echo $this->session->userdata('username');?> <b class="caret"></b></a>
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
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
<div class="container">
      <ul class="mainnav">

                    <li><a href="<?php echo site_url('Home/sukses');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a></li>
                    <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="icon-bar-chart"></i><span>Inventory</span> </a> </li>
                     <li><a href="<?php echo site_url('Home/table_sisa');?>"><i class="icon-bar-chart"></i><span>Sisa Jalur</span> </a> </li>
                    <li><a href="<?php echo site_url('Link');?>"><i class="icon-code"></i><span>Data Link</span> </a> </li>
                    <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                    <li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li>
                    <li><a href="<?php echo site_url('Home/manual_book');?>"><i class="icon-book"></i><span>Manual Book</span> </a> </li>

                  

    

      

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
      <div class="row">
     
        <!-- /span6 -->
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
              <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-dashboard"></i><span class="shortcut-label" onclick="openCity(event, 'Dasboard')">Dasboard</span></a>
              <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-bar-chart"></i><span class="shortcut-label" onclick="openCity(event, 'Inventory')">Inventory</span></a>
              <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-bar-chart"></i><span class="shortcut-label" onclick="openCity(event, 'Sisa_jalur')">Sisa Jalur</span></a>
              <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-code"></i><span class="shortcut-label" onclick="openCity(event, 'Data_link')">Data Link</span></a>
              <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label" onclick="openCity(event, 'Report')">Report</span></a>
              <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-file"></i><span class="shortcut-label" onclick="openCity(event, 'Setting_account')">Setting Account</span> </a>
               </div>
              <!-- /shortcuts --> 
            </div>
              <div class="widget-content">
                     <div class="table-responsive">
            <div id="Dasboard" class="tabcontent">
            <p>SINDANISTRA (Sistem Inventory Data Teknis Transport) merupakan fasilitas yang disediakan untuk mempermudah pengolahan data/website konten.</p>
            <h3>1. Dasboard</h3>
            <p>Data yang dikelola pada menu ini adalah data informasi umum dari wesite yang terdiri dari: </p>
              <table class="table table-bordered table-striped" style="background-color: none;">
            <thead>
            <tr>
            <th>Nama</th>
            <th>keterangan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Google Maps</td>
            <td>Pada Google Maps ini menunjukkan titik-titik lokasi NMS berada</td>
            </tr>
            <tr>
            <td>Data Inventory</td>
            <td>Pada grafik data inventory tersebut menunjukan banyaknya pemakaian dari setiap NMS</td>
            </tr>
            <tr>
            <td>Data Link</td>
            <td>Data Link merupakan grafik dari penyimpanan data suatu user dengan melewati interface dan jalur NMS. Terdapat dua jalur atau lebih</td>
            </tr>
             <tr>
            <td>Data User</td>
            <td>Data User</td>
            </tr>
            </tbody>
            </table>
            </div>
            <div id="Inventory" class="tabcontent">
            <p>SINDANISTRA (Sistem Inventory Data Teknis Transport) merupakan fasilitas yang disediakan untuk mempermudah pengolahan data/website konten.</p>
            <h3>2. Inventory</h3>
            <p>London is the capital city of England.</p>
            </div>


            <div id="Sisa_jalur" class="tabcontent">
            <h3>3. Sisa Jalur</h3>
            <p>London is the capital city of England.</p>
            </div>

            <div id="Data_link" class="tabcontent">
            <h3>4. Data Link</h3>
            <p>London is the capital city of England.</p>
            </div>

            <div id="Report" class="tabcontent">
            <h3>5. Report</h3>
            <p>London is the capital city of England.</p>
            </div>

            <div id="Setting_account" class="tabcontent">
            <h3>6. Setting Account</h3>
            <p>London is the capital city of England.</p>
            </div>

            </div>
            </div>
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
<script src="<?php echo base_url('asset/admin2/js/excanvas.min.js');?>"></script> 
<script src="<?php echo base_url('asset/admin2/js/chart.min.js');?>" type="text/javascript"></script> 
<script src="<?php echo base_url('asset/admin2/js/bootstrap.js');?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url('asset/admin2/js/full-calendar/fullcalendar.min.js');?>"></script>
 
<script src="<?php echo base_url('asset/admin2/js/base.js');?>"></script> 
    
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
  
</body>
</html>
