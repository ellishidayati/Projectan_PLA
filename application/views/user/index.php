<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SINDANISTRA</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="<?php echo base_url('asset/user/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/user/plugins/flexslider/flexslider.css');?>" rel="stylesheet" media="screen" />	
	<link href="<?php echo base_url('asset/user/css/cubeportfolio.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/user/css/style.css');?>" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="<?php echo base_url('asset/user/skins/default.css');?>" rel="stylesheet" />
	<!-- boxed bg -->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
	<div id="wrapper">
	<!-- start header -->
		<header>
				
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!--<a class="navbar-brand" href="index.html">SISTEM INVENTORY DATA TEKNIS TRANSPORT</a>-->
                    <a class="navbar-brand" href="<?php echo site_url('User');?>"><img src="<?php echo base_url('asset/user/img/telkom.png')?>" alt="" width="140" height="80" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="dropdown active">						
							<li><a href="<?php echo site_url('User');?>">Home</a></li>
							<li><a href="<?php echo site_url('User/table_nms');?>">Inventory</a></li>
							<li><a href="<?php echo site_url('User/table_perangkat');?>">Data Link</a></li>
							<li><a href="<?php echo site_url('Home');?>">Login as Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<!-- Slider -->
				<div id="main-slider" class="main-slider flexslider">
					<ul class="slides">
					  <li>
						<img src="<?php echo base_url('asset/img/1.jpg')?>" alt="" />
					  </li>
					  <li>
						<img src="<?php echo base_url('asset/img/2.jpeg')?>" alt="" />
					  </li>
					  <li>
						<img src="<?php echo base_url('asset/img/3.png')?>" alt="" />
					  </li>
					</ul>
				</div>
			<!-- end slider -->
			</div>
		</div>
	</div>	
	</section>
			
	<section class="callaction">
	<div class="container">
		 <div class="row">
        <?php echo $map['js']; ?>
        
                <?php echo $map['html']; ?>
    </div>
		<div class="row">
			<div class="col-lg-6">
				<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			</div>
			<div class="col-lg-6">
				<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			</div>
			
		</div>
				<div class="row">
			<div class="col-lg-8">
				<div class="cta-text">
					<h2>PT Telekomunikasi Indonesia (Persero) Tbk</h2>
					<p> PT Telekomunikasi Indonesia (Persero) Tbk, biasa disebut Telkom Indonesia atau Telkom saja (IDX: TLKM, NYSE: TLK) adalah perusahaan informasi dan komunikasi serta penyedia jasa dan jaringan telekomunikasi secara lengkap di Indonesia. Telkom mengklaim sebagai perusahaan telekomunikasi terbesar di Indonesia, dengan jumlah pelanggan telepon tetap sebanyak 15 juta dan pelanggan telepon seluler sebanyak 104 juta.</p>
					<p> Telkom merupakan salah satu BUMN yang sahamnya saat ini dimiliki oleh Pemerintah Indonesia (52,56%), dan 47,44% dimiliki oleh Publik, Bank of New York, dan Investor dalam Negeri. Telkom juga menjadi pemegang saham mayoritas di 13 anak perusahaan, termasuk PT Telekomunikasi Seluler (Telkomsel). </p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cta-btn">
					<a href="https://id.wikipedia.org/wiki/Telkom_Indonesia" class="btn btn-theme btn-lg"> Learn more <i class="fa fa-angle-right"></i></a>
				</div>
			</div>					
		</div>

	</div>
	</div>
	</section>

	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; PLA UPI 2017</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            
                            <a href="">SINDANISTRA</a> Sistem Inventory Data Teknis Transport<a href=""></a> -->
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/TelkomIndonesia" data-placement="top" title="Facebook" class="fa fa-facebook-square"></a></li>
						<li><a href="https://www.facebook.com/TelkomIndonesia" data-placement="top" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="https://www.instagram.com/telkomindonesia/" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/telkomindonesiaofficial" data-placement="top" title="youtube"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('asset/user/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('asset/user/js/modernizr.custom.js');?>"></script>
<script src="<?php echo base_url('asset/user/js/jquery.easing.1.3.js');?>"></script>
<script src="<?php echo base_url('asset/user/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('asset/user/plugins/flexslider/jquery.flexslider-min.js');?>"></script> 
<script src="<?php echo base_url('asset/user/plugins/flexslider/flexslider.config.js');?>"></script>

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
</body>
</html>