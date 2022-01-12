<?php $this->load->view('subelement/v_navbar')?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Profile</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Silahkan ubah profile anda
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php echo form_open(base_url('edit_profile/EditProfile')); ?>
                                            <label>Nama</label><br>
                                            <input type="text" name="nama" id="nama" value="<?php echo "$name"; ?>" required><br>
                                        	<label>Alamat</label>
                                            <input id="alamat" type="text" class="form-control" placeholder="alamat" name="alamat" value="<?php echo "$alamat"; ?>" required>
                                        	<label>Email</label>
                                            <input id="email" type="text" class="form-control" placeholder="email" name="email" value="<?php echo "$email"; ?>" required>                                        	
											<label>Tanggal Lahir</label>
                                         	<input class="form-control" id="tanggal" name="tanggal" type="date" placeholder="1/1/2015" value="<?php echo "$tanggal_lahir"; ?>"/>
											<label>Jenis Kelamin</label>
											 <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" id="jenis_kelamin" value="L" <?php if($jenis_kelamin=='L'){echo "checked";};?>  />Laki-Laki
						                                </label>
														</div>
												<div class="radio">
                                                <label>
												<input type="radio" name="jk" id="jenis_kelamin" value="P"  <?php if($jenis_kelamin=='P'){echo "checked";};?>/>Perempuan
												</label>
												</div>
												<label>Golongan Darah</label><br />
										   
                                            	<tr>
                                            	<td>
                                            		<input type="radio" name="goldar" id="golongan_darah" value="A" <?php if($golongan_darah=='A'){echo "checked";};?> />A
                                            	</td>
                                            	</tr>
                                            	<br />
						                        <tr><td>
						                        	<input type="radio" name="goldar" id="golongan_darah" value="B" <?php if($golongan_darah=='B'){echo "checked";};?>/>B
						                        </td></tr>
						                        <br />
												<tr><td>
													<input type="radio" name="goldar" id="golongan_darah" value="O" <?php if($golongan_darah=='O'){echo "checked";};?>/>O
												</td></tr>
												<br />
												<tr><td>
													<input type="radio" name="goldar" id="golongan_darah" value="AB" <?php if($golongan_darah=='AB'){echo "checked";};?>/>AB
												</td></tr>
												<br />
										
										<!--		<div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" name="foto" /> 
                                        </div>-->
										<label>No Telp </label>
                                     		   <input class="form-control" name="telp" placeholder="081-xxx-xxx-xxx" id="telp" value="<?php echo "$telpon"; ?>"/>
											   <div class="form-group">
                                            <label>Riwayat Kesehatan</label>
                                            <textarea id="desk" class="form-control" rows="3" name="desk" placeholder="Silahkan di isi terkait riwayat penyakit anda" ><?php echo $desk; ?></textarea>
                                        </div>
											</div>
                                            </div>
											
                                           											
                                        </div>
		<input id="id" type="hidden" class="form-control" placeholder="id" name="id" value="<?php echo "$id";?>">
        <button class="btn btn-danger square-btn-adjust" type="submit">Edit</button></form>
		 <?php echo form_open(base_url('edit_profile/Cancel')); ?><br>
		<button class="btn btn-danger square-btn-adjust" type="submit">Cancel</button>
		
                <!-- /. ROW  -->
			</div>
             <!-- /. PAGE INNER  -->
            </div>
			 </div>
			  </div>