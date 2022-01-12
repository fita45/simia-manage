<?php $this->load->view('subelement/v_navbar')?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Pemesanan Darah</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Darah</th>
											<th>ID User</th>
                                            <th>Golongan Darah</th>
											<th>Tanggal</th>
											<th>Kota</th>
											<th>Instansi</th>
											<th>Status Pemesanan</th>
											<a href="<?php echo site_url('cont_view_pemesanan/tambah_stock_darah')?>" 
                                       </tr>
                                    </thead>
                                    <tbody>        
    <?php
    $no=0;
    if(isset($pemesanan_darah)){
        foreach($pemesanan_darah as $row){
            $no++;
            ?>
             
            <tr class="gradeX">
              <td><?php echo $no; ?></td>
                <td><?php echo $row->darah_id; ?></td>
                <td><?php echo $row->user_id; ?></td>
                <td><?php echo $row->golongan_darah; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal)); ?></td>
                <td><?php echo $row->kota; ?></td>
                <td><?php echo $row->instansi; ?></td>
                <td>
                     <?php echo $row->status; ?>
                </td>
            </tr>
            
        <?php }
    }
    ?>   
										
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
			</div>                        
</div>

