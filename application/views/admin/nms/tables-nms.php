<!DOCTYPE html>
<html lang="en">
<head>
<style>

#myDIV {
  
  /*  width.table-layout: 500px;*/
    height: 335px;
}
</style>
    <meta charset="utf-8">
    <title>SINDANISTRA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
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
                </a><a class="brand" href="<?php echo site_url('Home');?>">SINDANISTRA</a>
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
                            class="icon-user"></i> EGrappler.com <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Profile</a></li>
                                <li><a href="javascript:;">Logout</a></li>
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
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Inventory - Sistem Inventory Data Teknis Transport</h3>
                     <div class="form-group" style="margin-top:-40px; margin-left: 880px;">
                      <div class="col-md-6 col-md-offset-3">
                     <td>
                       <a href="<?php echo site_url('Home/insert_single_nms');?>"><button type="submit" class="btn btn-primary">Insert Single Data</button></a>
                    </td>
                    </div>
                    </div>  
                     
                     <div class="form-group" style="margin-top:-40px; margin-left: 1018px;">
                      <div class="col-md-6 col-md-offset-3">
                     <td>
                       <a href="<?php echo site_url('Home/insert_double_nms');?>"><button type="submit" class="btn btn-danger">Insert Multiple Data</button></a>
                      </td>
                      </div>
                    </div>
                    </br>
                    </div>
                       <!-- /widget-header -->
                        <div class="widget-content"  style="overflow-y:auto">
                     <div class="table-responsive" id="myDIV">
                  
                        <table class="table table-striped table-bordered">
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
                          <th>Frekuensi</th>
                          <th>User</th>
                          <th>Deskripsi</th>
                         
                        <!--   <th>Deskripsi</th> -->
                          <th colspan="2">Edit data</th>
                        </tr>
                      </thead>
                <tbody>
            <?php 
            $no = 0;
            foreach($port as $portt){
              $no++;
              $i=$portt->id_merk;
                if($portt->board=="11LTX" || $portt->board=="15LTX" || $portt->board=="52TQX" || $portt->board=="55TQX" || $portt->board=="55TQX(STND)" || $portt->board=="96LTX" || $portt->board=="TQX" || $portt->board=="V2T210"){
                  $kap = "10gb";
                }elseif($portt->board=="12LSC"){
                  $kap = "100gb";
                }elseif($portt->board=="12TDX") {
                  $kap = "2x100gb";
                }elseif($portt->board=="52TOM" || $portt->board=="TOM") {
                  $kap = "1gb";
                }elseif($portt->board=="55TTX"){
                  $kap = "10x10gb";
                }elseif ($portt->board=="96LSC" || $portt->board=="V1T410") {
                  $kap = "100gb";
                }
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
          <!--                 <td><?php echo $kap?></td> -->
                          <td><?php echo $portt->frekuensi?></td>
                          <td><?php echo $portt->user?></td>
                         <td><?php echo wordwrap($portt->deskripsi,15,"<br>\n")?></td>
                          


                          <td>
                          <a href="<?php echo site_url('Home/edit_nms/'.$portt->id_port);?>" class="btn btn-info btn-xs"><i class="btn-icon-only icon-pencil"></i></a>
                          </td>
                          <td>
                          <a href="<?php echo site_url('Home/delete_nms/'.$portt->id_port);?>" class="btn btn-danger btn-xs" onclick="return doconfirm();"><i class="btn-icon-only icon-trash"></i></a>
                          </td>
                          <!-- Trigger the modal with a button -->
                         <!--  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Details<?php echo $portt->id_port?></button> -->
                          <!-- Modal -->
                        
                     
                      
                        </tr>
                <?php }?>  
                      </tbody>
              </table>
              </div>
              </div>
      <ul class="pagination">
                          <li ><?php echo $this->pagination->create_links(); ?></li>
                    </ul>

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
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

<!-- style="position: fixed;
 -->