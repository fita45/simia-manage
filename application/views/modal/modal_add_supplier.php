<!-- Modal -->
<div id="modalAddSupplier" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Data Supplier</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_supplier')?>">

            <div class="control-group">
                <label class="control-label">Kode Supplier</label>
                <div class="controls">
                    <input name="kd_supplier" type="text" value="<?php echo $kd_supplier; ?>" class="uneditable-input" disabled="disabled">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Nama Supplier</label>
                <div class="controls">
                    <input name="nm_supplier" type="text" placeholder="Input Nama Supplier...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Alamat</label>
                <div class="controls">
                    <input name="alamat" type="text" placeholder="Input Alamat...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input name="email" type="mail" placeholder="Input Email..." >
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>