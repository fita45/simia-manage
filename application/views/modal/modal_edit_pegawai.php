<!-- Modal -->
<?php
if (isset($data_pegawai)){
    foreach($data_pegawai as $row){
        ?>
        <div id="modalEditPegawai<?php echo $row->kd_pegawai?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Pegawai</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_pegawai')?>">

                    <div class="control-group">
                        <label class="control-label">Kode Pegawai</label>
                        <div class="controls">
                            <input name="kd_pegawai" type="text" value="<?php echo $row->kd_pegawai; ?>" class="uneditable-input" readonly="true">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >User ID</label>
                        <div class="controls">
                            <input name="username" type="text" value="<?php echo $row->username?>" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Password</label>
                        <div class="controls">
                            <input name="password" type="password" required>
                        </div>
                    </div>

                    <hr/>

                    <div class="control-group">
                        <label class="control-label">Nama Pegawai</label>
                        <div class="controls">
                            <input name="nama" type="text" value="<?php echo $row->nama?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Level</label>
                        <div class="controls">
                            <select name="level" id="level">
                                <?php if($row->level == 'admin'){?>
                                    <option value="admin" selected="selected">Admin</option>
                                <?php }else{ ?>
                                    <option value="pegawai">Pegawai</option>
                                <?php }?>
                            </select>
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
    <?php }
}
?>