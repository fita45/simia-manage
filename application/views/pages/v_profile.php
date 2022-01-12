<?php $this->load->view('subelement/v_navbar')?>
<div id="page-wrapper" >
<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
					<?php
					foreach($profile as $pro){
					?>
					 <?php echo form_open(base_url('edit_profile')); ?>
					<h2>Profile Pribadi Anda</h2>
                	<h3>Nama			: </h3> <h4> <?php echo $pro->nama; ?></h4><br>
					<input type="hidden" name="nama" id="nama" value="<?php echo $pro->nama; ?>">
					<h3>Alamat			: </h3> <h4> <?php echo $pro->alamat; ?></h4><br>
					<input type="hidden" name="alamat" id="alamat" value="<?php echo $pro->alamat; ?>">
					<h3>Email			: </h3> <h4> <?php echo $pro->email; ?></h4><br>
					<input type="hidden" name="email" id="email" value="<?php echo $pro->email; ?>">
					<h3>Tanggal Lahir 	: </h3> <h4> <?php echo $pro->tanggal_lahir; ?></h4><br>
					<input type="hidden" name="tanggal" id="tanggal" value="<?php echo $pro->tanggal_lahir; }?>">
					<h3>Jenis Kelamin	: </h3> <h4> <?php if($pro->jenis_kelamin=='L'){echo "Laki - Laki";}else{echo "Perempuan";}; ?></h4><br>
					<input type="hidden" name="jk" id="jk" value="<?php echo $pro->jenis_kelamin; ?>">
					<h3>Golongan Darah	: </h3> <h4> <?php echo $pro->golongan_darah; ?></h4><br>
					<input type="hidden" name="goldar" id="goldar" value="<?php echo $pro->golongan_darah; ?>">
					<h3>No Telp			: </h3> <h4> <?php echo $pro->telpon; ?></h4><br>
					<input type="hidden" name="telp" id="telp" value="<?php echo $pro->telpon; ?>">
					<h3>Riwayat Kesehatan : </h3> <h4> <?php echo $pro->desk; ?></h4><br>
					<input type="hidden" name="desk" id="desk" value="<?php echo $pro->desk; ?>">										
					<input type="hidden" name="id" id="id" value="<?php echo $pro->member_id; ?>">
					<button class="btn btn-default" type="submit">Edit</button>
					</form>		
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
             <hr>
     </div>