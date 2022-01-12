<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="guest.html"><img src="assets/img/b3.png"/>S I M I A </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="<?php echo base_url('')?>" class="btn btn-danger square-btn-adjust">Back</a>  </div>
        </nav>   
           <!-- /. NAV TOP  -->
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
                     <h2>Registrasi</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lakukan Registrasi Untuk Bergabung ke Komunitas Kami
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <?php echo form_open(base_url('registrasi/add_registrasi')); ?>
											<label>Username</label>
                                            <input class="form-control" id="username" type="text" placeholder="Username" name="username" required>
											<label>Password</label>
                                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                            <label>Nama</label>
                                            <input id="nama" type="text" class="form-control" placeholder="nama" name="nama" required>
                                        	<label>Alamat</label>
                                            <input id="alamat" type="text" class="form-control" placeholder="alamat" name="alamat" required>
                                        	<label>Email</label>
                                            <input id="email" type="text" class="form-control" placeholder="email" name="email" required>                                        	
											<label>Tanggal Lahir</label>
                                         	<input class="form-control" id="tanggal" type="date" placeholder="1/1/2015" />
											<label>Jenis Kelamin</label>
											 <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" id="jenis_kelamin" value="L" checked />Laki-Laki
						                                </label>
														</div>
												<div class="radio">
                                                <label>
												<input type="radio" name="jk" id="jenis_kelamin" value="P"  />Perempuan
												</label>
												</div>
												<label>Golongan Darah</label><br />
										   
                                            	<tr>
                                            	<td>
                                            		<input type="radio" name="goldar" id="golongan_darah" value="A" checked />A
                                            	</td>
                                            	</tr>
                                            	<br />
						                        <tr><td>
						                        	<input type="radio" name="goldar" id="golongan_darah" value="B" />B
						                        </td></tr>
						                        <br />
												<tr><td>
													<input type="radio" name="goldar" id="golongan_darah" value="O" />O
												</td></tr>
												<br />
												<tr><td>
													<input type="radio" name="goldar" id="golongan_darah" value="AB" />AB
												</td></tr>
												<br />
										
												<div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" name="foto" /> 
                                        </div>
										<label>No Telp </label>
                                     		   <input class="form-control" name="telp" placeholder="081-xxx-xxx-xxx" id="telp"/>
											   <div class="form-group">
                                            <label>Riwayat Kesehatan</label>
                                            <textarea id="desk" class="form-control" rows="3" name="desk" placeholder="Silahkan di isi terkait riwayat penyakit anda"></textarea>
                                        </div>
											</div>
                                            </div>
											
                                           											
                                        </div>
	
        <button class="btn btn-danger square-btn-adjust" type="submit">Daftar</button>
		</form>
                <!-- /. ROW  -->
			</div>
             <!-- /. PAGE INNER  -->
            </div>
			 </div>
			  </div>