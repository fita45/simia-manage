<!-- Modal -->
<?php
if (isset($data_barang_rusak)){
foreach($data_barang_rusak as $row){
	?>
	<div id="#modalEditBarangRusak<?php echo $row->kd_barang?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Edit Data Barang Rusak</h3>
		</div>
		<div class="modal-body">
			<form class="form-horizontal" method="post" action="<?php echo site_url('barang_rusak/edit_barang_rusak')?>">
			
				<div class="control-group">
					<label class="control-label">Kode Barang</label>
					<div class="controls">
						<input name="kd_barang" type="text" value="<?php echo $row->kd_barang; ?>" class="uneditable-input" readonly="true">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Kode Pembelian</label>
					<div class="controls">
						<input name="kd_pembelian" type="text" value="<?php echo $row->kd_pembelian; ?>" class="uneditable-input" readonly="true">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Kode Supplier</label>
					<div class="controls">
						<input name="kd_supplier" type="text" value="<?php echo $row->kd_supplier; ?>" class="uneditable-input" readonly="true">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Jumlah Barang Rusak</label>
					<div class="controls">
						<input name="jumlah_barang_rusak" type="text" value="<?php echo $row->jumlah_barang_rusak; ?>" class="uneditable-input" readonly="true">
					</div>
				</div>
	
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary">Save changes</button>
				</div>
	
	
			</form>
		</div>
	</div>
<?php }
}
?>