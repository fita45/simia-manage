
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('')?>"><img src="assets/img/b3.png"/>S I M I A </a> 
            </div>
 <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href= "<?php echo base_url('registrasi')?>" class="btn btn-danger square-btn-adjust">Daftar</a> </div>
</nav>            <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
					</li>				
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-edit fa-3x"></i>Login<span class="fa arrow"></a>	
						<?php echo form_open(base_url('login/cek_login')); ?>
						<ul class="nav nav-second-level">						
                            <li>
							<a>Username :</a>
                                 <div class="form-login">     	
                                      <input class="form-control" id="username" type="text" placeholder="Username" name="username" required>
                                 </div>
                            </li>
                            <li>
							<a>Password :</a>
							     <div class="form-login">									
										<input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                 </div>
                            </li>
							<li>
							<button class="btn btn-danger square-btn-adjust" type="submit">Login</button>					
                            </li>
						</ul>
						</form>
                    </li>				
                </ul>             
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>User Dashboard</h2>   
                        <h5>Selamat Datang di SIMIA</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
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
										<center><h1>Selamat Datang ! </h1>
											<p>anda belum punya akun ?</p>
											<p>
											<a href= "<?php echo base_url('registrasi')?>" class="btn btn-primary btn-lg" role="button">Daftar</a>
											</p></center>
											</div>
										</div>
									</div>
                                </div>
                                <div class="item">
									<div class="row">
										<div class="col-md-12">
											<div class="jumbotron">
											<center><h1>Selamat Datang ! </h1>
											<p>anda belum punya akun ?</p>
											<p>
											<a href= "<?php echo base_url('registrasi')?>" class="btn btn-primary btn-lg" role="button">Daftar</a>
											</p></center>
											</div>
										</div>
									</div>
                                </div>
                                <div class="item">
                                    <div class="row">
										<div class="col-md-12">
											<div class="jumbotron">
											<center><h1>Selamat Datang ! </h1>
											<p>anda belum punya akun ?</p>
											<p>
											<a href= "<?php echo base_url('registrasi')?>" class="btn btn-primary btn-lg" role="button">Daftar</a>
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
           
                 
             </div>
   
                 <!-- /. ROW  -->           
  
     

