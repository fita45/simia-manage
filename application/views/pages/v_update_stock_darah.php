<?php $this->load->view('subelement/v_navbar')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Update Stock Darah</h2> 
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
                                    
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id Darah</label>
                                            <input class="form-control" />
											
											<br>
											<label>Golongan Darah</label>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>AB</option>
                                                <option>O</option>
                                            </select>
											</div>
                                    
											<br>
                                            <label>Tanggal Masuk </label>
                                            <input class="form-control" placeholder="10-10-2010" />
											<br>
											<label>Jam Masuk</label>
                                            <input class="form-control" placeholder="17:00:00" />
											<br>
											<label>Kota/Wilayah</label>
                                            <input class="form-control" placeholder="Kota Malang" />
											<br>
											<label>Instansi</label>
                                            <input class="form-control" placeholder="PMI" />
                                            <br>
                                  
										
                <!-- /. ROW  -->
				<a href="<?php echo base_url('update_stock_darah/update_stock_darah')?>"><button class="btn btn-default" type="button">Update</button></a>
    </div>
	
             <!-- /. PAGE INNER  -->
            </div>
         