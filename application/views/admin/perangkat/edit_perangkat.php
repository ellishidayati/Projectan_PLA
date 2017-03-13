<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>SINDANISTRA</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
     <link rel="icon" type="image/png" href="<?php echo base_url('asset/img/logo.png');?>">
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

      <li><a href="<?php echo site_url('Home/sukses');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a></li>
                    <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="icon-bar-chart"></i><span>Inventory</span> </a> </li>
                     <li><a href="<?php echo site_url('Home/table_sisa');?>"><i class="icon-bar-chart"></i><span>Sisa Jalur</span> </a> </li>
                    <li><a href="<?php echo site_url('Link');?>"><i class="icon-code"></i><span>Data Link</span> </a> </li>
                    <li><a href="<?php echo site_url('Report');?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                    <li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li>
                    <li><a href="<?php echo site_url('Home/manual_book');?>"><i class="icon-book"></i><span>Manual Book</span> </a> </li>

    <!-- <li><a href="<?php echo site_url('Home/setakun');?>"><i class="icon-user"></i><span>Setting Akun</span> </a> </li> -->

      

    <!--     <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li> -->
  <ul>     
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
                    <div class="widget-header" ><i class="icon-bar-chart"></i><h3>Edit Single Data Link - Sistem Inventory Data Teknis Transport</h3>
                    </div>
          


          <div style="overflow-x:auto"> <!-- /widget-header -->
                    <div class="widget-content"  style="overflow-x:auto">
          
          
          <div class="title_right">
                   
                </div> <!-- /control-group -->

                 <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Link/proses_edit_link'); ?> 
                      <!--  <input name="jalur" type="text" value="<?php echo $jumlah_jalur; ?>" hidden/> -->

                        <label for="name">Perangkat <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <select class="form-control" name="nama_lokasi" value=" <?php echo $link->user; ?>">
                          <option>METRO</option>
                          <option>TERA</option>
                          <option>TELKOMSEL</option>
                          <option>ISC</option>
                          <option>BCA</option>
                          <option>OTHERS</option>
                        </select>
                      </div>
                      </br>
                      
                             <input class="form-control" name="host_a" value=" <?php echo $link->host_a; ?>">
                          
                              </input>
                      
                              <input class="form-control" name="host_b" value="<?php echo $link->host_b; ?>">
                          
                              </input>
                      
                                <input class="form-control" name="fa_a" value="<?php echo $link->fa_a; ?>"></input>
                       
                          
                             <input class="form-control" name="fa_b" value="<?php echo $link->fa_b; ?>">
                          
                              </input>
                    
                      </div>

                      
                   
                   
                      <!-- NODE A -->
                     
                        

                   
                <script type="text/javascript">


                      var string;
                      var lok;
                      var sh;
                      var board;
                      var nms;
                        var ajaxku;
                    function ajaxnmsA(str){
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        url=url+"?nms="+str;
                        nms = str;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedNmsA;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }

                        var ajaxku;
                    function ajaxlokasiA(str){
                      lok= str;
                        ajaxku = buatajax();
                         var url="../../../ajax/select_lokasi.php";
                        url=url+"?ne="+lok+"&nm="+nms;
                        console.log(url);

                        ajaxku.onreadystatechange=stateChangedA;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                          var ajaxku;
                    function ajaxneA(str){
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        url=url+"?board="+str;
                        console.log(url);
                      string = str;
                        ajaxku.onreadystatechange=stateChangedNeA;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }

                          var ajaxku;
                    function ajaxboardA(str){
                       // console.log(string);
                       board = str;
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        url=url+"?shelf="+string;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedBoardA;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }
                               var ajaxku;
                    function ajaxshelfA(str){
                        console.log(string);
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        sh = str;
                        url=url+"?slot="+str+"&sh="+string+"&n="+lok;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedShelfA;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                    var ajaxku;
                    function ajaxslotA(str){
                        console.log(string);
                        ajaxku = buatajax();
                       var url="../../../ajax/select_lokasi.php";
                        url=url+"?port="+board;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedSlotA;
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
                   function stateChangedNmsA(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("nama_lokasiA").innerHTML = data;
                      }else{
                      document.getElementById("nama_lokasiA").value = "<option selected>Pilih Kota/Kab</option>";
                      }
                      }
                  }
                  function stateChangedA(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("berubahA").innerHTML = data;
                      }else{
                      document.getElementById("berubahA").value = "<option selected>Pilih Kota/Kab</option>";
                      }
                      }
                  }

                    function stateChangedNeA(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("boardA").innerHTML = data;
                      }else{
                      document.getElementById("boardA").value ="<option selected>Pilih Kecamatan</option>";
                    }
                  }
                }

                     function stateChangedShelfA(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("slotA").innerHTML = data;
                      }else{
                      document.getElementById("slotA").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                  function stateChangedSlotA(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("portA").innerHTML = data;
                      }else{
                      document.getElementById("portA").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                  function stateChangedBoardA(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("shelfA").innerHTML = data;
                      }else{
                      document.getElementById("shelfA").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }
                  </script>
                  </br>
                        <label >Jalur A <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                      
                        <select class="form-control" name="nama_nms" id="nama_nms" onchange="ajaxnmsA(this.value)"> 
                                <option value="<?php echo $link->nms?>"><?php echo $link->nms?></option>
                           <?php foreach($port as $p){?>
                                <option value="<?php echo $p->nama_nms;?>"><?php echo $p->nama_nms?></option>
                                <?php } ?>
                        </select>
                   
                 
                        
                        <select class="form-control" name="nama_lokasiA" id="nama_lokasiA" onchange="ajaxlokasiA(this.value)">
                                 <option value="">Lokasi</option>
                               
                        </select>
                   
                       
                            
                              <?php echo form_error('ne'); ?>

                              <select class="form-control" name="neA" id="berubahA" onchange="ajaxneA(this.value)" >
                              <option value="<?php echo $link->ne_a?>"><?php echo $link->ne_a?></option>
                              </select>
                        
                              
                            
                              <?php echo form_error('board'); ?>

                              <select class="form-control" name="boardA" id="boardA" onchange="ajaxboardA(this.value)"  <?php echo set_value('board');?>>
                              <option value="<?php echo $link->board_a?>"><?php echo $link->board_a?></option>
                              </select>
                          
                     
                           
                      </div></br>
                      <div class="item form-group">
                       
                            
                             <?php echo form_error('shelf'); ?> 

                              <select class="form-control" name="shelfA" id="shelfA"  onchange="ajaxshelfA(this.value)" <?php echo set_value('shelf');?>>
                                <option value="<?php echo $link->shelf_a?>"><?php echo $link->shelf_a?></option>
                              </select>
                          
                       
                   
                          
                            
                              <?php echo form_error('slot'); ?>

                              <select class="form-control" name="slotA" id="slotA"  onchange="ajaxslotA(this.value)"<?php echo set_value('slot');?>>
                               <option value="<?php echo $link->slot_a?>"><?php echo $link->slot_a?></option>
                              </select>
                          
                      
                    
                      
                            
                              <?php echo form_error('port'); ?>

                              <select class="form-control" name="portA" id="portA" <?php echo set_value('board');?> onchange="ajaxtampilA(this.value)">
                                <option value="<?php echo $link->port_a?>"><?php echo $link->port_a?></option>
                              </select>
                          
                    
                        </div>
                         
                      <!-- NODE B -->
                      
                <script type="text/javascript">


                      var string;
                      var lok;
                      var sh;
                      var board;
                      var nms;
                        var ajaxku;
                    function ajaxnmsB(str){
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        url=url+"?nms="+str;
                        nms = str;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedNmsB;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }

                        var ajaxku;
                    function ajaxlokasiB(str){
                      lok= str;
                        ajaxku = buatajax();
                         var url="../../../ajax/select_lokasi.php";
                        url=url+"?ne="+lok+"&nm="+nms;
                        console.log(url);

                        ajaxku.onreadystatechange=stateChangedB;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                          var ajaxku;
                    function ajaxneA(str){
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        url=url+"?board="+str;
                        console.log(url);
                      string = str;
                        ajaxku.onreadystatechange=stateChangedNeB;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }

                          var ajaxku;
                    function ajaxboardB(str){
                       // console.log(string);
                       board = str;
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        url=url+"?shelf="+string;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedBoardB;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }
                               var ajaxku;
                    function ajaxshelfB(str){
                        console.log(string);
                        ajaxku = buatajax();
                        var url="../../../ajax/select_lokasi.php";
                        sh = str;
                        url=url+"?slot="+str+"&sh="+string+"&n="+lok;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedShelfB;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                    var ajaxku;
                    function ajaxslotB(str){
                        console.log(string);
                        ajaxku = buatajax();
                       var url="../../../ajax/select_lokasi.php";
                        url=url+"?port="+board;
                        console.log(url);
                        ajaxku.onreadystatechange=stateChangedSlotB;
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
                   function stateChangedNmsB(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("nama_lokasiB").innerHTML = data;
                      }else{
                      document.getElementById("nama_lokasiB").value = "<option selected>Pilih Kota/Kab</option>";
                      }
                      }
                  }
                  function stateChangedB(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("berubahB").innerHTML = data;
                      }else{
                      document.getElementById("berubahB").value = "<option selected>Pilih Kota/Kab</option>";
                      }
                      }
                  }

                    function stateChangedNeB(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("boardB").innerHTML = data;
                      }else{
                      document.getElementById("boardB").value ="<option selected>Pilih Kecamatan</option>";
                    }
                  }
                }

                     function stateChangedShelfB(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("slotB").innerHTML = data;
                      }else{
                      document.getElementById("slotB").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                  function stateChangedSlotB(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("portB").innerHTML = data;
                      }else{
                      document.getElementById("portB").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }

                  function stateChangedBoardB(){
                      var data;
                      if (ajaxku.readyState==4){
                      data=ajaxku.responseText;
                      if(data.length>=0){
                      document.getElementById("shelfB").innerHTML = data;
                      }else{
                      document.getElementById("shelfB").value ="<option selected>Pilih Kecamatan</option>";

                      }
                      }
                  }
                  </script></br>
                        <label >Jalur B <span class="required">*</span>
                        </label>
                   
                     
                        <select class="form-control" name="nama_nms" id="nama_nms" onchange="ajaxnmsB(this.value)"> 
                                <option value="<?php echo $link->nms?>"><?php echo $link->nms?></option>
                           <?php foreach($port as $p){?>
                                <option value="<?php echo $p->nama_nms;?>"><?php echo $p->nama_nms?></option>
                                <?php } ?>
                        </select>
                  
                    
                       
                        <select class="form-control" name="nama_lokasiB" id="nama_lokasiB" onchange="ajaxlokasiB(this.value)">
                                 <option value="">Lokasi</option>
                               
                        </select>
                     
                        
                            
                              <?php echo form_error('ne'); ?>

                              <select class="form-control" name="neB" id="berubahB" onchange="ajaxneB(this.value)" >
                              <option value="<?php echo $link->ne_b?>"><?php echo $link->ne_b?></option>
                              </select>
                          
                   
                          
                            
                              <?php echo form_error('board'); ?>

                              <select class="form-control" name="boardB" id="boardB" onchange="ajaxboardB(this.value)"  <?php echo set_value('board');?>>
                              <option value="<?php echo $link->board_b?>"><?php echo $link->board_b?></option>
                              </select>
                          
                       </br></br>
                        
                      <div class="item form-group">
                            
                             <?php echo form_error('shelf'); ?> 

                              <select class="form-control" name="shelfB" id="shelfB"  onchange="ajaxshelfB(this.value)" <?php echo set_value('shelf');?>>
                                <option value="<?php echo $link->shelf_b?>"><?php echo $link->shelf_b?></option>
                              </select>
                          
                    
                   
                           
                    
                          
                            
                              <?php echo form_error('slot'); ?>

                              <select class="form-control" name="slotB" id="slotB"  onchange="ajaxslotB(this.value)"<?php echo set_value('slot');?>>
                               <option value="<?php echo $link->slot_b?>"><?php echo $link->slot_b?></option>
                              </select>
                          
                   
                    
                            
                              <?php echo form_error('port'); ?>

                              <select class="form-control" name="portB" id="portB" <?php echo set_value('board');?> onchange="ajaxtampilB(this.value)">
                                <option value="<?php echo $link->port_b?>"><?php echo $link->port_b?></option>
                              </select>
                            <br>
                               <select class="form-control" name="keterangan" >
                                <option value="<?php echo $link->keterangan?>"><?php echo $link->keterangan?></option>
                              </select>
                              </br>
                        </div>
                 
                        <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                      </br>
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
