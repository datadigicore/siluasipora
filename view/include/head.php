<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description"  content="Aplikasi Website Tentang Evaluasi Menteri Pemuda Dan Olahraga"/>
<meta name="keywords" content="Kemenpora, Evaluasi Kementerian Pemuda Dan Olahraga"/>
<meta name="robots" content="ALL,NOFOLLOW"/>
<meta name="Author" content="Daimler"/>
<meta http-equiv="imagetoolbar" content="no"/>
<title>Sistem Evaluasi Kemenpora </title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>static/img/favicon.ico">

<!-- Bootstrap core CSS -->
<link href="<?php echo $base_url ?>static/plugin/bootstrap/bootstrap.css" rel="stylesheet">

<!--Font Awesome css-->
<link href="<?php echo $base_url ?>static/plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo $base_url ?>static/css/style.css" type="text/css"/>

<link rel="stylesheet" href="<?php echo $base_url ?>static/css/group_table.css" type="text/css"/>

<link rel="stylesheet" href="<?php echo $base_url ?>static/css/demo_page.css" />
<link rel="stylesheet" href="<?php echo $base_url ?>static/css/demo_table.css" />

<link rel="stylesheet" href="<?php echo $base_url ?>static/css/jquery-ui.css" type="text/css" media="screen" />
<script type="text/JavaScript" src="<?php echo $base_url ?>static/js/jquery.min.js"></script>
<script type="text/JavaScript" src="<?php echo $base_url ?>static/js/jquery-1.10.1.js"></script>
<script type="text/JavaScript" src="<?php echo $base_url ?>static/js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo $base_url ?>static/css/jquery-ui.css">
<link rel="stylesheet" href="<?php echo $base_url ?>static/css/style.css">


<!-- Main JS -->
<script src="<?php echo $base_url ?>static/plugin/jquery/jquery.js"></script>
<script src="<?php echo $base_url ?>static/plugin/jquery/jquery-1.8.3.min.js"></script>
<script src="<?php echo $base_url ?>static/plugin/bootstrap/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo $base_url ?>static/plugin/jquery/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo $base_url ?>static/plugin/jquery/jquery.scrollTo.min.js"></script>
<script src="<?php echo $base_url ?>static/plugin/jquery/jquery.nicescroll.js" type="text/javascript"></script>

<!-- Chart JS -->
<script src="<?php echo $base_url ?>static/plugin/Chartjs_1.0.2/Chart.min.js" type="text/javascript"></script>


<?php 
if ($_GET[act]=='tambah' OR $_GET[act]=='ubah' OR $_GET[act]=='input' OR $_GET[act]=='update') {?>
<link rel="stylesheet" href="<?php echo $base_url ?>static/js/jquery-ui.css" type="text/css"/>
<script src="<?php echo $base_url ?>static/js/jquery-1.7.min.js"></script>
<script src="<?php echo $base_url ?>static/js/jquery.validate.js"></script>
<script src="<?php echo $base_url ?>static/js/jquery-ui.js"></script>
<script src="<?php echo $base_url ?>static/js/lib.datepicker.js"></script>
<script src="<?php echo $base_url ?>static/js/lib.hideshow.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/jquery.number.min.js"></script>
<?php 
if ($_GET['module']=='detail_evaluasi_pusat'){ ?>
<script src="<?php echo $base_url ?>static/js/lib.tambah_detail_evaluasi_pusat.js"></script>

<?php
}elseif ($_GET['module']=='detail_evaluasi_dekon'){ ?>
<script src="<?php echo $base_url ?>static/js/lib.tambah_detail_evaluasi_dekon.js"></script>

<?php
} }
else{ ?>
<link rel="stylesheet" href="<?php echo $base_url ?>static/css/demo_page.css" />
<link rel="stylesheet" href="<?php echo $base_url ?>static/css/demo_table.css" />
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/jquery.dataTables.rowGrouping.js"></script>    
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/jquery.highchartTable.js"></script>    
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/highcharts.js"></script>    
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/exporting.js"></script>    
<script type="text/javascript" language="javascript" src="<?php echo $base_url ?>static/js/jquery.highchartTable.js"></script> 
<script src="<?php echo $base_url ?>static/js/lib.tables.js"></script>


<?php } ?>

<!-- Fancybox -->
<script type="text/javascript" src="upload/plugin/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="upload/plugin/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="upload/plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="upload/plugin/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="upload/plugin/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="upload/plugin/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="upload/plugin/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="upload/plugin/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

</head>