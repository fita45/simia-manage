<!-- Modal -->
<?php
if(isset($data_supplier)){
foreach($data_supplier as $row){
?>
<div id="modalEditSupplier<?php echo $row->kd_supplier?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Edit Data Supplier</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_supplier')?>">


            <div class="control-group">
                <label class="control-label">Kode Supplier</label>
                <div class="controls">
                    <input name="kd_supplier" type="text" value="<?php echo $row->kd_supplier; ?>" class="uneditable-input" readonly="true">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Nama Supplier</label>
                <div class="controls">
                    <input name="nm_supplier" type="text" value="<?php echo $row->nm_supplier; ?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Alamat</label>
                <div class="controls">
                    <input name="alamat" type="text" value="<?php echo $row->alamat; ?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input name="email" type="mail" value="<?php echo $row->email; ?>">
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