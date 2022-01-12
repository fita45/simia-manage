<!-- Modal -->
<div id="modalAddPegawai" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Data Pegawai</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_pegawai')?>">

            <div class="control-group">
                <label class="control-label">Kode Pegawai</label>
                <div class="controls">
                    <input name="kd_pegawai" type="text" value="<?php echo $kd_pegawai; ?>" class="uneditable-input" readonly="true">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >User ID</label>
                <div class="controls">
                    <input name="username" type="text" required>
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
                    <input name="nama" type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Level</label>
                <div class="controls">
                    <select name="level" id="level">
                        <option value=""> = Pilih Level Akses = </option>
                        <option value="pegawai">Pegawai</option>
                        <option value="admin">Admin</option>
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