<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SINDANISTRA</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('asset/admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('asset/admin/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('asset/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('asset/admin/vendors/jqvmap/dist/jqvmap.min.css'); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('asset/admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('asset/admin/build/css/custom.min.css'); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url('Home/index');?>" class="site_title"><i class="fa fa-paw"></i> <span>SINDANISTRA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="asset/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-table"></i> Transport Users </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sistem Inventory Data Teknis Transport</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transport Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                 <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Link/proses_edit_link'); ?> 
                      <!--  <input name="jalur" type="text" value="<?php echo $jumlah_jalur; ?>" hidden/> -->

                        <label for="name">Perangkat <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <select class="form-control" name="nama_lokasi">
                          <option>METRO</option>
                          <option>TERA</option>
                          <option>TELKOMSEL</option>
                          <option>ISC</option>
                          <option>BCA</option>
                          <option>OTHERS</option>
                        </select>
                      </div>
                      </br> </br> 
                      </br>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                             <input class="form-control" name="host_a" value=" <?php echo $link->host_a; ?>">
                          
                              </input>
                        </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <input class="form-control" name="host_b" value="<?php echo $link->host_b; ?>">
                          
                              </input>
                        </div>
                              <div class="col-md-3 col-sm-6 col-xs-12">
                                <input class="form-control" name="fa_a" value="<?php echo $link->fa_a; ?>"></input>
                        </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                             <input class="form-control" name="fa_b" value="<?php echo $link->fa_b; ?>">
                          
                              </input>
                        </div>
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
                        <label >Jalur A <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select class="form-control" name="nama_nms" id="nama_nms" onchange="ajaxnmsA(this.value)"> 
                                <option value="<?php echo $link->nms?>"><?php echo $link->nms?></option>
                           <?php foreach($port as $p){?>
                                <option value="<?php echo $p->nama_nms;?>"><?php echo $p->nama_nms?></option>
                                <?php } ?>
                        </select>
                      </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12" id="nama_lokasi">
                        <select class="form-control" name="nama_lokasiA" id="nama_lokasiA" onchange="ajaxlokasiA(this.value)">
                                 <option value="">Lokasi</option>
                               
                        </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('ne'); ?>

                              <select class="form-control" name="neA" id="berubahA" onchange="ajaxneA(this.value)" >
                              <option value="<?php echo $link->ne_a?>"><?php echo $link->ne_a?></option>
                              </select>
                          
                        </div>
                              <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('board'); ?>

                              <select class="form-control" name="boardA" id="boardA" onchange="ajaxboardA(this.value)"  <?php echo set_value('board');?>>
                              <option value="<?php echo $link->board_a?>"><?php echo $link->board_a?></option>
                              </select>
                          
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            
                             <?php echo form_error('shelf'); ?> 

                              <select class="form-control" name="shelfA" id="shelfA"  onchange="ajaxshelfA(this.value)" <?php echo set_value('shelf');?>>
                                <option value="<?php echo $link->shelf_a?>"><?php echo $link->shelf_a?></option>
                              </select>
                          
                        </div>
                   
                           
                      </div>
                      <div class="item form-group">
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('slot'); ?>

                              <select class="form-control" name="slotA" id="slotA"  onchange="ajaxslotA(this.value)"<?php echo set_value('slot');?>>
                               <option value="<?php echo $link->slot_a?>"><?php echo $link->slot_a?></option>
                              </select>
                          
                        </div>
                    
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('port'); ?>

                              <select class="form-control" name="portA" id="portA" <?php echo set_value('board');?> onchange="ajaxtampilA(this.value)">
                                <option value="<?php echo $link->port_a?>"><?php echo $link->port_a?></option>
                              </select>
                          
                        </div>
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
                  </script>
                        <label >Jalur B <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select class="form-control" name="nama_nms" id="nama_nms" onchange="ajaxnmsB(this.value)"> 
                                <option value="<?php echo $link->nms?>"><?php echo $link->nms?></option>
                           <?php foreach($port as $p){?>
                                <option value="<?php echo $p->nama_nms;?>"><?php echo $p->nama_nms?></option>
                                <?php } ?>
                        </select>
                      </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12" id="nama_lokasi">
                        <select class="form-control" name="nama_lokasiB" id="nama_lokasiB" onchange="ajaxlokasiB(this.value)">
                                 <option value="">Lokasi</option>
                               
                        </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('ne'); ?>

                              <select class="form-control" name="neB" id="berubahB" onchange="ajaxneB(this.value)" >
                              <option value="<?php echo $link->ne_b?>"><?php echo $link->ne_b?></option>
                              </select>
                          
                        </div>
                              <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('board'); ?>

                              <select class="form-control" name="boardB" id="boardB" onchange="ajaxboardB(this.value)"  <?php echo set_value('board');?>>
                              <option value="<?php echo $link->board_b?>"><?php echo $link->board_b?></option>
                              </select>
                          
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            
                             <?php echo form_error('shelf'); ?> 

                              <select class="form-control" name="shelfB" id="shelfB"  onchange="ajaxshelfB(this.value)" <?php echo set_value('shelf');?>>
                                <option value="<?php echo $link->shelf_b?>"><?php echo $link->shelf_b?></option>
                              </select>
                          
                        </div>
                   
                           
                      </div>
                      <div class="item form-group">
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('slot'); ?>

                              <select class="form-control" name="slotB" id="slotB"  onchange="ajaxslotB(this.value)"<?php echo set_value('slot');?>>
                               <option value="<?php echo $link->slot_b?>"><?php echo $link->slot_b?></option>
                              </select>
                          
                        </div>
                    
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('port'); ?>

                              <select class="form-control" name="portB" id="portB" <?php echo set_value('board');?> onchange="ajaxtampilB(this.value)">
                                <option value="<?php echo $link->port_b?>"><?php echo $link->port_b?></option>
                              </select>
                          
                        </div>
                        </div>
                 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <input name="id_port" type="text" hidden/>
                         <div class="form-group" style="margin-top:11px; margin-left: -150px; position: absolute;">
                          <input name="id_link" type="text" value="<?php echo $link->id_link; ?>" hidden/>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>

                   <td>
                       <a href="<?php echo site_url('Link');?>"><button type="submit" class="btn btn-primary">Cancel</button></a>
                      </td>
                  
                </div>
              </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- validator -->
    <script src="<?php echo base_url('/vendors/validator/validator.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('/build/js/custom.min.js'); ?>"></script>

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
  </body>
</html>