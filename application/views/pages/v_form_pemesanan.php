<?php $this->load->view('subelement/v_navbar')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Form Pemesanan</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pesan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                          
                             				<label>ID User</label>
                                            <input class="form-control" id="user_id" type="text" placeholder="U01" /> <br />
                                            <label>Golongan Darah</label><br />
										   
                                            	<tr>
                                            	<td>
                                            		<input type="radio" name="goldar" id="golongan_darah" value="A"/>A
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
												
												
												
										    <label>Tanggal</label>
                                         	<input class="form-control" id="tanggal" type="date" placeholder="1/1/2015" />
                                         	<label>Kota</label>
                                            <input class="form-control" id="kota" type="text" placeholder="Malang" />                             
                             				<label>Instansi</label>
                                            <input class="form-control" id="instansi" type="text" placeholder="RSUD Malang" /> <br />
                                            <label>Status</label>
                                            <input class="form-control" id="status" type="text" placeholder="bingung" /> <br />
                                            
                                            
                                            
                                            
                                            
                                            
								<br />   <button class="btn btn-danger square-btn-adjust" onclick="pesan()" type="submit">Pesan</button>						
                                        </div>
                                       </form>




		</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    <script src="assets/js/pemesanan.js"></script>
    
   
</body>
</html>
