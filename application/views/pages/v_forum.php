<?php $this->load->view('subelement/v_navbar')?>
<script type="text/javascript" src="nicEdit.js"></script>
    <script type="text/javascript">
    	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
    <style>
        select{
            font-weight: bold;
            font-size: 12px;
        }
        input{
            font-weight: bold;
        }
    </style>

<!--========================= Content Wrapper ==============================-->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Selamat Datang <?php echo $user?>  </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
	
				<!--<div class="row carousel-holder">-->

              
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
										<div class="col-md-12">
											<div class="jumbotron">
											<center><h1>Forum</h1>
											<?php echo form_open(base_url('login/forum')); ?>
											<p>Adalah Sistem Informasi bagi panderita Thalasemia</p>
											<p>
											<a class="btn btn-primary btn-lg" role="button">Read More</a>
											</p></center>
											</div>
										</div>
									</div>
                                </div>
                                <div class="item">
									<div class="row">
										<div class="col-md-12">
											<div class="jumbotron">
											<center><h1>Simia</h1>
											<p>Adalah balbalbalbababalablablalba</p>
											<p>
											<a class="btn btn-primary btn-lg" role="button">Read More</a>
											</p></center>
											</div>
										</div>
									</div>
                                </div>
                                <div class="item">
                                    <div class="row">
										<div class="col-md-12">
											<div class="jumbotron">
											<center><h1>Simia</h1>
											<p>Adalah balbalbalbababalablablalba</p>
											<p>
											<a class="btn btn-primary btn-lg" role="button">Read More</a>
											</p></center>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
          

                <!--</div>-->
               
				</br>
				<div class="profil-area">
						<div class="foto-profil">
                            <img src="images/simia.jpg"/>
                            
						</div>	
			    </div>
                    
				<form method="post" action="insert-thread.php">
                     <table>
                         <tr>
                             <td><input type="text" placeholder="Judul Thread" name="judul" title="Title" required /></td>
                         </tr>  
                         <tr>
                             <td style="font-weight: bold;">Kategori : 
                                 <select name="kategori" title="Kategori">
                                      <option value= "Informasi"</option></select>
                              </td>
                        </tr> 
                        <tr>
                              <td> <textarea name="posting" cols="88"  placeholder="isi" ></textarea></td>
                        </tr>
                              
                        <tr>
                              <td><input type="submit" value="Create Thread" class="tombol" />
                              <a href="#" onclick="window.open('emoticon.php', 'newwindow', 'width=500, height=350'); return false;"><button class="tombol">Emoticon</button></a></td>
                              </tr>
                                        
                     </table>
               </form>       
                 <!-- /. ROW  -->           
	</div>   
             <!-- /. PAGE INNER  -->

<!--<div class="container">
    <h1 class="text-info" style="text-align: center">Aplikasi Pergudangan</h1>
    <br/>
</?php if(isset($dt_contact)){
//foreach($dt_contact as $row){
?>
    <div class="row well" style="text-align: center">
        <h3></?php echo $row->nama?></h3>
        <h4></?php echo $row->desc?></h4>
        <h5 class="muted"></?php echo $row->alamat?></h5>
        <h5 class="muted"></?php echo $row->email?> || </?php echo $row->telp?> || </?php echo $row->website?></h5>

    </div>
</?php }
}
?>
</div>-->


