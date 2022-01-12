<?php $this->load->view('subelement/v_navbar')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Stock Darah</h2> 
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <?php echo form_open(base_url('stock_darah/tambah_stock_darah')); ?>
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select class="form-control">
                                                <option name="golongan_darah" id="golongan_darah" value='A'>A</option>
                                                <option name="golongan_darah" id="golongan_darah" value='B'>B</option>
                                                <option name="golongan_darah" id="golongan_darah" value='AB'>AB</option>
                                                <option name="golongan_darah" id="golongan_darah" value='O'>O</option>
                                            </select>
											</div>
                                    
											<br>
                                            <label>Tanggal Masuk </label>
                                            <input class="form-control" id="tanggal" name="tanggal" placeholder="10-10-2010" />
											<br>
											<label>Jam Masuk</label>
                                            <input class="form-control" id="jam" name="jam" placeholder="17:00:00" />
											<br>
											<label>Kota/Wilayah</label>
                                            <input class="form-control" id="kota" name="kota" placeholder="Kota Malang" />
											<br>
											<label>Instansi</label>
                                            <input class="form-control" id="instansi" name="instansi" placeholder="PMI" />
                                            <br>
                                  
										
                <!-- /. ROW  -->
				<button class="btn btn-danger square-btn-adjust" type="submit">Tambah</button>
		</form>
    </div>
	
             <!-- /. PAGE INNER  -->
            </div>
         