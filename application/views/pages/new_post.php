
<?php $this->load->view('subelement/v_navbar')?>

<script type="text/javascript" src="<?php echo  base_url().'nicEdit.js';?>"></script>
<script type="text/javascript"><?php echo base_url().'
   	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() })';?>
 </script>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Admin Dashboard</h2>   
                        <h5>Selamat Datang Bambang. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                  	<div class="col-md-12">
                    	<!---Form Element -->
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                            	FORUM
                             </div>
                             <div class="panel-body">
                             	<div class="row">
                                	<div class="col-ml-6">
                                    </div>
                                </div>
									
                                
                                <?php
			if($is_edit == 0) $url_tujuan = base_url() . 'forum/save_post';
			else $url_tujuan = base_url() . 'edit_post';
		?>
		<form method="POST" action="<?php echo $url_tujuan; ?>">
        <?php if($is_edit == 1) { ?>
        	<input name="PID" value="<?php echo $post['PID'] ?>" type="hidden"/>
        <?php } ?>
        <tr>
    	
        	<td>Judul</td><td>:</td><input type="text" name="judul" placeholder=" Judul " <?php if($is_edit == 1) echo "value='".$post['Judul']."'"; ?> />
            
            <td>Penulis</td><td>:</td><input type="nama" name="nama" placeholder="Penulis" <?php if($is_edit == 1) echo "value='".$post['Penulis']."'"; ?> />
        </tr>
        <tr>
        	<td><h3>Posting<h3></td>
            <textarea name="posting" cols="60" rows="10"><?php if($is_edit == 1) echo $post['Isi'] ?></textarea>
        </tr>
        <tr>
        	<td><input type="submit" name="submit" value="Simpan"/></td>
        </tr>
            
        </form>
        
                              </div>
                         </div>
                     </div>
                   </div>
                 </div>
   </div>
    
  
</body>
</html>
