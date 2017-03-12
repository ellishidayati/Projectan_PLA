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
                                <li><a href="javascript:;">Profile</a></li
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
                     <li><a href="<?php echo site_url('Home/table_sisa');?>"><i class="icon-bar-chart"></i><span>Sisa Jalur</span> </a> </li>
                    <li><a href="<?php echo site_url('Link');?>"><i class="icon-code"></i><span>Data Link</span> </a> </li>
                    <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>

                    <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Manual Book</span> </a> </li>
          <!--<li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li>-->

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
            <div class="row">
            <div class="span6">
              <div class="widget">
            
                  <div class="widget-header">
                    <i class="icon-bookmark"></i>
                    <h3>Insert Single Data Link</h3>
                  </div> <!-- /widget-header -->
          
          <div class="widget-content">

                       <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Link/insert_jalur'); ?> 
                      
                    
                              <input class="form-control" name="jalur" placeholder="Masukan Jalur">
                              </input><br><br>
                               <input type="submit" name="submit" class="btn btn-primary">
                      </form>


          <!--   <canvas id="pie-chart" class="chart-holder"></canvas> -->
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            </div>
            <div class="span6">
               <div class="widget">
              
          <div class="widget-header">
            <i class="icon-bookmark"></i>
            <h3>Insert Multiple Data Link</h3>
          </div> <!-- /widget-header -->
          
          <div class="widget-content">
        
            <div class="x_content">
                <fieldset>
                     <form method="post" action="<?php echo site_url('Excel/link')?>" enctype="multipart/form-data">
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                   </form>
                  </div>
           <!--  <canvas id="bar-chart" class="chart-holder"></canvas> -->
          </div> <!-- /widget-content -->
        
        </div> <!-- /widget -->
            </div>
            </div>

     
                <div class="widget">
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Inventory - Sistem Inventory Data Teknis Transport</h3>
                    </div>
                       <!-- /widget-header -->
                        <div class="widget-content"  style="overflow-y:auto">
                     <div >
                 <form action="<?php echo site_url('link/delete_multiple'); ?>" method="post">

                       <table id="example1" class="table table-bordered table-striped" style="background-color: none;">
                  <thead>
                        <tr>
                         <th><input type="checkbox" class="cek-all"></th>
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
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
            <?php 
            $no = 0;
            foreach($link_statis as $link){

              ?>
                        
                         
                          <td><input type="checkbox" name="del[]" class="cekmultipel" value="<?php echo $link->id_link;?>"></td>

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
                          <td> <a href="<?php echo site_url('Link/edit_link/'.$link->id_link);?>" class="btn btn-info btn-xs"><i class="btn-icon-only icon-pencil"></i></a></td>
                         <!--  <td>
                          <a href="<?php echo site_url('Link/delete_link/'.$link->id_link);?>" class="btn btn-danger btn-xs" onclick="return doconfirm();"><i class="btn-icon-only icon-trash"></i></a>
                          </td> -->
                        </tr>
                <?php }?>  
                      </tbody>
                        <input name="do" type="submit" class="btn btn-danger btn-xs" value="Delete">
                        <br>
                        <br>
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
      "lengthChange": false,
      "searching": false,
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
