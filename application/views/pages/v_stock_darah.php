<?php $this->load->view('subelement/v_navbar')?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Stock Darah</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
			<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Satu ID Darah mewakili satu kantong darah
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>ID Darah</th>
                                            <th>Golongan Darah</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Jam Masuk</th>
											<th>Kota/Wilayah</th>
											<th>Instansi</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            <th class="span3">
            <a href="<?php echo site_url('tambah_stock_darah')?>" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data
            </a>
        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    $no=1;
    if(isset($stock_darah)){
        foreach($stock_darah as $row){
            ?>
            <?php
			if($no%2==0){
			?>
            <tr class="even gradeA">
                <?php $no++; ?>
                <td>D-<?php echo $row->id_darah; ?></td>
                <td><?php echo $row->golongan_darah; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal)); ?></td>
                <td><?php echo $row->jam; ?></td>
                <td><?php echo $row->kota; ?></td>
                <td><?php echo $row->instansi; ?></td>
                <td> 
                    <a class="btn btn-mini" href="<?php echo base_url('update_stock_darah')?>">
                        <i class="icon-eye-open"></i> Update</a>
                </td>
                <td>    
                    <a class="btn btn-mini" href="<?php echo site_url('stock_darah/hapus/'.$row->id_darah)?>"
                       onclick="return confirm('Anda yakin ingin menghapus data dengan id darah D-<?php echo $row->id_darah ?>?');">
                        <i class="icon-trash"></i> Delete</a>
                </td>
                
            </tr>
            <?php } else{
			?>
            <tr class="odd gradeA">
                <?php $no++; ?>
                <td>D-<?php echo $row->id_darah; ?></td>
                <td><?php echo $row->golongan_darah; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal)); ?></td>
                <td><?php echo $row->jam; ?></td>
                <td><?php echo $row->kota; ?></td>
                <td><?php echo $row->instansi; ?></td>
                <td>
                    <a class="btn btn-mini" href="<?php echo base_url('update_stock_darah')?>">
                        <i class="icon-eye-open"></i> Update</a>
                </td>
                <td>
                    <a class="btn btn-mini" href="<?php echo site_url('stock_darah/hapus/'.$row->id_darah)?>"
                       onclick="return confirm('Anda yakin ingin menghapus data dengan id darah D-<?php echo $row->id_darah ?>?');">
                        <i class="icon-trash"></i> Delete</a>
                </td>
            </tr>
            <?php }
			?>
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

