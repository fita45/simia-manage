<!-- Modal -->
<div id="modalAddBarangRusak" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Barang</h3>
    </div>
    <div class="modal-body">
        <form id="frm" name="frm" class="form-horizontal" method="post" action="<?php echo site_url('barang_rusak/tambah_barang_rusak')?>">
            <div class="control-group">
                <label class="control-label">Nama Barang</label>
                <div class="controls">
					<select id="kd_barang" class="chzn-select" name="kd_barang" value="" data-placeholder="Pilih Barang">
                        <?php
                        $data_barang=$this->model_app->manualQuery("SELECT * from tbl_barang where stok > 0")->result();
                        foreach($data_barang as $row){
                           ?>
                            <option value="<?php echo $row->kd_barang?>"><?php echo $row->nm_barang?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div id="detail_barang" name="detail_barang"></div>


            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button type="submit" class="btn btn-primary" disabled="disabled" id="add" name="add">Simpan</button>
            </div>

        </form>
    </div>
</div>

<script type="text/javascript">
    $("#kd_barang").change(function(){
        var kd_barang = $("#kd_barang").val();
        $.ajax({
            type: "POST",
            url : "<?php echo base_url('barang_rusak/get_detail_barang'); ?>",
            data: "kd_barang="+kd_barang,
            cache:false,
            success: function(data){
                $('#detail_barang').html(data);
                document.frm.add.disabled=false;
            }
        });
    });

</script>