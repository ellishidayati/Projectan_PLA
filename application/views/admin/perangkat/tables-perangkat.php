<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
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

              <!-- /row -->
  
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
                              </input>
                      </form>


          <!--   <canvas id="pie-chart" class="chart-holder"></canvas> -->
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
        
            
            
            
        </div> <!-- /span6 -->
          
          
          <div class="span6">
            
            <div class="widget">
              
          <div class="widget-header">
            <i class="icon-bookmark"></i>
            <h3>Insert Multiple Data Link</h3>
          </div> <!-- /widget-header -->
          
          <div class="widget-content">
        
              <a href="<?php echo site_url('link/insert_double_perangkat');?>"><button type="submit" class="btn btn-primary">Insert Multiple Data</button></a>
              <br>
              <br>
           <!--  <canvas id="bar-chart" class="chart-holder"></canvas> -->
          </div> <!-- /widget-content -->
        
        </div> <!-- /widget -->
                  
          </div> <!-- /span6 -->
          
        </div> <!-- /row -->
        

          <!--    <div class="widget" > -->
                    <!-- <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Insert Single</h3>
                    </div> -->
                     <!--  <div class="widget-content"  style="overflow-x:auto">
                  
                       <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Link/insert_jalur'); ?> 
                        <label for="name">Masukan Jalur</label>
                    
                              <input class="form-control" name="jalur" placeholder="Jalur">
                              </input>
                      </form>


                       <a href="<?php echo site_url('link/insert_double_perangkat');?>"><button type="submit" class="btn btn-primary" style="margin-top:-45px; margin-left: 300px; position: absolute;">Insert Multiple Data</button></a>
                   
                  
                   </div> -->
           
               <!-- <div class="widget" >
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Insert Single</h3>
                    </div>
                      <div class="widget-content"  >
                       <a href="<?php echo site_url('link/insert_double_perangkat');?>"><button type="submit" class="btn btn-primary">Insert Multiple Data</button></a>
                     </div>
                     </div> -->
                  
            <!--   </div> -->
                <div class="widget">
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Data Link - Sistem Inventory Data Teknis Transport</h3>
                    </div>
                        <div style="overflow-x:auto"> <!-- /widget-header -->
                        <div class="widget-content"  style="overflow-x:auto">
                   
                    </br>
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered">
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
                          <th colspan="2">Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
            <?php 
            $no = 0;
            foreach($link_statis as $link){

              ?>
                        <tr>

                          <td><?php 
                           if($link->host_a=="-" || $link->host_a==""){
                              $no=$no+0;
                            }else{
                                $no++;
                                echo $no; }
                                 ?></td>
                        
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
                          <td> <a href="<?php echo site_url('Link/edit_link/'.$link->id_link);?>" class="btn btn-info btn-xs"><i class="btn-icon-only icon-pencil"></i></a></td>
                          <td>
                          <a href="<?php echo site_url('Link/delete_link/'.$link->id_link);?>" class="btn btn-danger btn-xs" onclick="return doconfirm();"><i class="btn-icon-only icon-trash"></i></a>
                          </td>
                        </tr>
                <?php }?>  
                      </tbody>
              </table>
              </div>
              </div>
       <!--  <ul class="pagination">
                          <li ><?php echo $this->pagination->create_links(); ?></li>
                    </ul>  -->

                                <!-- /bar-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
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
        var doughnutData = [
        {
            value: 30,
            color: "#F7464A"
        },
        {
            value: 50,
            color: "#46BFBD"
        },
        {
            value: 100,
            color: "#FDB45C"
        },
        {
            value: 40,
            color: "#949FB1"
        },
        {
            value: 120,
            color: "#4D5360"
        }

      ];

        var myDoughnut = new Chart(document.getElementById("donut-chart").getContext("2d")).Doughnut(doughnutData);


        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
        {
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
        {
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]

        }

var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);

var pieData = [
        {
            value: 30,
            color: "#F38630"
        },
        {
            value: 50,
            color: "#E0E4CC"
        },
        {
            value: 100,
            color: "#69D2E7"
        }

      ];

        var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

        var chartData = [
      {
          value: Math.random(),
          color: "#D97041"
      },
      {
          value: Math.random(),
          color: "#C7604C"
      },
      {
          value: Math.random(),
          color: "#21323D"
      },
      {
          value: Math.random(),
          color: "#9D9B7F"
      },
      {
          value: Math.random(),
          color: "#7D4F6D"
      },
      {
          value: Math.random(),
          color: "#584A5E"
      }
    ];
        var myPolarArea = new Chart(document.getElementById("line-chart").getContext("2d")).PolarArea(chartData);
  </script>
</body>
</html>

<!-- style="position: fixed;
 -->