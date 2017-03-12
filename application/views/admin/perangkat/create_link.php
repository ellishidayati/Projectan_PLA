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
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Insert Single Data Link - Sistem Inventory Data Teknis Transport</h3>
                    </div>
          


          <div style="overflow-x:auto"> <!-- /widget-header -->
                    <div class="widget-content"  style="overflow-x:auto">
          
          
          <div class="title_right">
                   
                </div> <!-- /control-group -->
                    
              <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Link/create_link'); ?> 
                       <input id="jalur" name="jalur" type="hidden" value="<?php echo $jumlah_jalur; ?>" hidden/>


                        <label for="name">Perangkat <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <select class="form-control" name="user">
                          <option>METRO</option>
                          <option>TERA</option>
                          <option>TELKOMSEL</option>
                          <option>ISC</option>
                          <option>BCA</option>
                          <option>OTHERS</option>
                        </select>
                      </div>
                      </br> 
                              <input class="form-control" name="host_a" placeholder="Node A"></input>
                              <input class="form-control" name="host_b" placeholder="Node B"></input>
                              <input class="form-control" name="fa_a" placeholder="Interface A"></input>
                              <input class="form-control" name="fa_b" placeholder="Interface B"> </input>                   
                      </div>
                    </br>
             <!-- NODE A -->
                      <?php 
                      $a=1;
                      for ($i=0; $i < $jumlah_jalur; $i++) { 
                        

                      ?>
             <script type="text/javascript">


                      var string;
                      var lok;
                      var sh;
                      var board;
                      var nms;
                        var ajaxku;
                    function ajaxnms<?php echo $a;?>(str){
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        url=url+"?nms="+str;
                        nms = str;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedNms<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }

                        var ajaxku;
                    function ajaxlokasi<?php echo $a;?>(id){
                      lok= $("#nama_lokasi"+id).val();
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        url=url+"?lok="+lok+"&nm="+nms;
                        console.log(url);

                        ajaxku.onreadystatechange=stateChanged<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                          var ajaxku;
                    function ajaxne<?php echo $a;?>(str){
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        url=url+"?ne="+str+"&lok1="+lok+"&nm1="+nms;
                        console.log(url);
                      string = str;
                        ajaxku.onreadystatechange=stateChangedNe<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }

                          var ajaxku;
                    function ajaxboard<?php echo $a;?>(str){
                       // console.log(string);
                       board = str;
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        url=url+"?board="+board+"&ne1="+string+"&lok2="+lok+"&nm2="+nms;
                        shelf=str;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedBoard<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }
                               var ajaxku;
                    function ajaxshelf<?php echo $a;?>(str){
                        console.log(string);
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        sh = str;
                        url=url+"?shelf="+str+"&board1="+board+"&ne2="+string+"&lok3="+lok+"&nm3="+nms;
                        shelf=str;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedShelf<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                    var ajaxku;
                    function ajaxslot<?php echo $a;?>(str){
                        console.log(string);
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        url=url+"?slot="+str+"&shelf1="+shelf+"&board2="+board+"&ne3="+string+"&lok4="+lok+"&nm4="+nms;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedSlot<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }



                   function buatajax(){
                      if (window.XMLHttpRequest){
                      return new XMLHttpRequest();
                      }
                      if (window.ActiveXObject){
                      return new ActiveXObject("Microsoft.XMLHTTP");
                      }
                      return null;
                  }
                   function stateChangedNms<?php echo $a;?>(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("nama_lokasi<?php echo $a;?>").innerHTML = data;
                      }else{
                      document.getElementById("nama_lokasi<?php echo $a;?>").value = "<option selected>Pilih Kota/Kab</option>";
                      }
                      }
                  }
                  function stateChanged<?php echo $a;?>(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("berubah<?php echo $a;?>").innerHTML = data;
                      }else{
                      document.getElementById("berubah<?php echo $a;?>").value = "<option selected>Pilih Kota/Kab</option>";
                      }
                      }
                  }

                    function stateChangedNe<?php echo $a;?>(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("board<?php echo $a;?>").innerHTML = data;
                      }else{
                      document.getElementById("board<?php echo $a;?>").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                      function stateChangedShelf<?php echo $a;?>(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("slot<?php echo $a;?>").innerHTML = data;
                      }else{
                      document.getElementById("slot<?php echo $a;?>").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                  function stateChangedSlot<?php echo $a;?>(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("port<?php echo $a;?>").innerHTML = data;
                      }else{
                      document.getElementById("port<?php echo $a;?>").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                  function stateChangedBoard<?php echo $a;?>(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("shelf<?php echo $a;?>").innerHTML = data;
                      }else{
                      document.getElementById("shelf<?php echo $a;?>").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }
                  </script>
                        <label >Jalur <?php echo $a;?> <span class="required">*</span>
                        </label>
                        <table>
                        <thead>
                        <tr><th>
                      <div class="item form-group">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select class="form-control" name="nama_nms<?php echo $a;?>" id="nama_nms<?php echo $a;?>" onchange="ajaxnms<?php echo $a;?>(this.value)"> 
                                <option value="">NMS</option>
                           <?php foreach($port as $p){?>
                                <option value="<?php echo $p->nama_nms;?>"><?php echo $p->nama_nms?></option>
                                <?php } ?>
                        </select>
                      </div>
                      </div></th><th>
                      <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12" id="nama_lokasi">
                        <select class="form-control" name="nama_lokasi<?php echo $a;?>" id="nama_lokasi<?php echo $a;?>" onchange="ajaxlokasi<?php echo $a;?>(<?php echo $a; ?>)">
                                 <option value="">Lokasi</option>
                               
                        </select>
                        </div></th><th>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('ne'); ?>

                              <select class="form-control" name="ne<?php echo $a;?>" id="berubah<?php echo $a;?>" onchange="ajaxne<?php echo $a;?>(this.value)" >
                                <option value="">NE</option>
                              </select>
                          
                        </div></th><th>
                              <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('board'); ?>

                              <select class="form-control" name="board<?php echo $a;?>" id="board<?php echo $a;?>" onchange="ajaxboard<?php echo $a;?>(this.value)"  <?php echo set_value('board');?>>
                                <option value="">Board</option>
                              </select>
                          
                        </div></th></tr></th></thead><tbody><tr><th>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            
                             <?php echo form_error('shelf'); ?> 

                              <select class="form-control" name="shelf<?php echo $a;?>" id="shelf<?php echo $a;?>"  onchange="ajaxshelf<?php echo $a;?>(this.value)" <?php echo set_value('shelf');?>>
                                <option value="">Shelf</option>
                              </select>
                          
                        </div>
                   
                           
                      </div></th><th>
                      <div class="item form-group">
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('slot'); ?>

                              <select class="form-control" name="slot<?php echo $a;?>" id="slot<?php echo $a;?>"  onchange="ajaxslot<?php echo $a;?>(this.value)"<?php echo set_value('slot');?>>
                                <option value="">Slot</option>
                              </select>
                          
                        </div></th><th>
                    
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('port'); ?>

                              <select class="form-control" name="port<?php echo $a;?>" id="port<?php echo $a;?>" <?php echo set_value('board');?> onchange="ajaxtampil<?php echo $a;?>(this.value)">
                                <option value="">Port</option>
                              </select>
                          
                        </div>
                        </div></th></tr></tbody></table>
                        <?php $a++;} ?>
                          <br>
                             <input type="text" name="keterangan" placeholder="Keterangan"></input>
                             <br><br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                      
                         <div class="form-group">
                         <table><th>
                          <button id="send" type="submit" class="btn btn-success">Submit</button></th><th>
                            <a href="<?php echo site_url('Link')?>"><button type="submit" class="btn btn-danger" >Cancel</button></a></th></table>
                          </div>
                        </div>
                      </div>
                    </form>

                   
                </div>
              </div>
              </div>
            
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
  var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
  var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
  var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);
  
  </script>


  </body>

</html>
