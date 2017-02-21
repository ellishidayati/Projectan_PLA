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
    <!--search-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>


    <script type="text/javascript">
            function ajaxjalur(str) {
    if (str.length == 0) { 
        document.getElementById("tambahdd").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tambahdd").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../../ajax/coba.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
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
                <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="fa fa-table"></i> NMS </a>
                <li><a href="<?php echo site_url('link');?>"><i class="fa fa-table"></i> Transport Users </a></li>
                <li><a href="<?php echo site_url('Report');?>"><i class="fa fa-table"></i> Report </a></li>
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
                    <img src="<?php echo site_url('Home/index');?>" alt="">John Doe
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
             <div class="col-md-12 col-sm-12 col-xs-12">
           
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create data link</h2>
                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                  
                    <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Link/create_link'); ?> 
                       <input name="jalur" type="text" value="<?php echo $jumlah_jalur; ?>" hidden/>

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
                              <input class="form-control" name="host_a" placeholder="Node A">
                          
                              </input>
                        </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <input class="form-control" name="host_b" placeholder="Node B">
                          
                              </input>
                        </div>
                              <div class="col-md-3 col-sm-6 col-xs-12">
                              <input class="form-control" name="fa_a" placeholder="Interface A">
                          
                              </input>
                        </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <input class="form-control" name="fa_b" placeholder="Interface B">
                          
                              </input>
                        </div>
                      </div>

                      
                   
                   
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
                        url=url+"?ne="+lok+"&nm="+nms;
                        console.log(url);

                        ajaxku.onreadystatechange=stateChanged<?php echo $a;?>;
                        ajaxku.open("GET",url,true);
                        ajaxku.send(null);
                    }


                          var ajaxku;
                    function ajaxne<?php echo $a;?>(str){
                        ajaxku = buatajax();
                        var url="../../ajax/select_lokasi.php";
                        url=url+"?board="+str;
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
                        url=url+"?shelf="+string;
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
                        url=url+"?slot="+str+"&sh="+string+"&n="+lok;
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
                        url=url+"?port="+board;
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
                      <div class="item form-group">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select class="form-control" name="nama_nms<?php echo $a;?>" id="nama_nms<?php echo $a;?>" onchange="ajaxnms<?php echo $a;?>(this.value)"> 
                                <option value="">NMS</option>
                           <?php foreach($port as $p){?>
                                <option value="<?php echo $p->nama_nms;?>"><?php echo $p->nama_nms?></option>
                                <?php } ?>
                        </select>
                      </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12" id="nama_lokasi">
                        <select class="form-control" name="nama_lokasi<?php echo $a;?>" id="nama_lokasi<?php echo $a;?>" onchange="ajaxlokasi<?php echo $a;?>(<?php echo $a; ?>)">
                                 <option value="">Lokasi</option>
                               
                        </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('ne'); ?>

                              <select class="form-control" name="ne<?php echo $a;?>" id="berubah<?php echo $a;?>" onchange="ajaxne<?php echo $a;?>(this.value)" >
                                <option value="">NE</option>
                              </select>
                          
                        </div>
                              <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('board'); ?>

                              <select class="form-control" name="board<?php echo $a;?>" id="board<?php echo $a;?>" onchange="ajaxboard<?php echo $a;?>(this.value)"  <?php echo set_value('board');?>>
                                <option value="">Board</option>
                              </select>
                          
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            
                             <?php echo form_error('shelf'); ?> 

                              <select class="form-control" name="shelf<?php echo $a;?>" id="shelf<?php echo $a;?>"  onchange="ajaxshelf<?php echo $a;?>(this.value)" <?php echo set_value('shelf');?>>
                                <option value="">Shelf</option>
                              </select>
                          
                        </div>
                   
                           
                      </div>
                      <div class="item form-group">
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('slot'); ?>

                              <select class="form-control" name="slot<?php echo $a;?>" id="slot<?php echo $a;?>"  onchange="ajaxslot<?php echo $a;?>(this.value)"<?php echo set_value('slot');?>>
                                <option value="">Slot</option>
                              </select>
                          
                        </div>
                    
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                              <?php echo form_error('port'); ?>

                              <select class="form-control" name="port<?php echo $a;?>" id="port<?php echo $a;?>" <?php echo set_value('board');?> onchange="ajaxtampil<?php echo $a;?>(this.value)">
                                <option value="">Port</option>
                              </select>
                          
                        </div>
                        </div>
                        <?php $a++;} ?>
                 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <input name="id_port" type="text" hidden/>
                         <div class="form-group" style="margin-top:11px; margin-left: -100px; position: absolute;">
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>

                     <td>
                       <a href="<?php echo site_url('link/insert_double_perangkat');?>"><button type="submit" class="btn btn-primary">Insert Multiple Data</button></a></td></hidden>
                      </td>
                  
                </div>
              </div>
              </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
           
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transport Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"><table id="datatable-buttons" class="table table-hover">
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
                          <th>Aksi</th>
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
                          <td>
                                 <a href="<?php echo site_url('Link/edit_link/'.$link->id_link);?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit <?php echo $link->id_link?></a>
                          <a href="<?php echo site_url('Link/delete_link/'.$link->id_link);?>" class="btn btn-danger btn-xs" onclick="return doconfirm();"><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
                        </tr>
                <?php }?>  
                      </tbody>
                    </table>
                        <br />
               
          <br />
          <br />
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
    <script src="<?php echo base_url('asset/admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('asset/admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('asset/admin/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('asset/admin/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('asset/admin/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('asset/admin/vendors/gauge.js/dist/gauge.min.js'); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('asset/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('asset/admin/vendors/iCheck/icheck.min.js'); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('asset/admin/vendors/skycons/skycons.js'); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.time.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.resize.js'); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('asset/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/flot.curvedlines/curvedLines.js'); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('asset/admin/vendors/DateJS/build/date.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('asset/admin/vendors/jqvmap/dist/jquery.vmap.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('asset/admin/vendors/moment/min/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('asset/admin/build/js/custom.min.js'); ?>"></script>

    <!-- Datatables -->


    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>