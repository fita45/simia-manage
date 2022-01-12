<!-- Modal -->
<div id="modalAddPembelianBarang" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Data Barang</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo site_url('pembelian/tambah_pembelian_to_cart')?>">

            <div class="control-group">
                <label class="control-label">Kode Barang</label>
                <div class="controls">
                    <input name="kd_barang" type="text" placeholder="Input Kode Barang...">*Kode Barang tidak boleh sama
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Nama Barang</label>
                <div class="controls">
                    <input name="nm_barang" type="text" placeholder="Input Nama Barang...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Stok</label>
                <div class="controls">
                    <input name="qty" type="text" placeholder="Input Stok...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Harga</label>
                <div class="controls">
                    <input name="harga" type="text" placeholder="Input Harga...">
                </div>
            </div>

<!--            ACTION BUTTON -->
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>

</div>