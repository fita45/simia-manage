<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/img/blood11.png" rel="shortcut icon" />


    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>
    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/chosen.jquery.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>
	
    
</head>	
<body>

 <div id="wrapper">
         			
<style type="text/css">
	h3.judul{
		display:block;
		line-height:40px;
		border-bottom:silver 2px double;
	}
	p.penulis,p.tanggal{
		display:block;
		line-height:20px;
		border-bottom:silver 2px solid;
	}
</style>
<?php $this->load->view('subelement/v_navbar')?>


 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
	<h2>Admin Dashboard</h2>   
                        <h5>Selamat Datang Bambang. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                  	<div class="col-md-12">
                    	<!---Form Element -->
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                            	FORUM
                             </div> 
                             <div class="panel-body">
                             	<div class="row">
                                	<div class="col-ml-6">
									</div>
                                </div>
<?php
	echo $baca;
?>

</body>
</html>

