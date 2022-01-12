
<?php $this->load->view('subelement/v_navbar')?>
<script type="text/javascript" src="<?php echo  base_url().'nicEdit.js';?>"></script>
<script type="text/javascript"><?php echo base_url().'bkLib.onDomLoaded(function() { nicEditors.allTextAreas() })';?>
    </script>

 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
					<h2>Forum Talasemia</h2>   
                        <h5>Disini anda bisa bediskusi tentang talasemia </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                  	<div class="col-md-12">
                    	<!---Form Element -->
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                            	Postingan
                             </div> 
                             <div class="panel-body">
                             	<div class="row">
                                	<div class="col-ml-6">
									</div>
                                </div>
    <?php
			$data = '';
			foreach($content->result() as $key){
				$headline = explode('<div style="page-break-after: always;">',$key->Isi);
				$confirm = "'Hapus data?'";
				echo '<div id="headline">
				          <h3 class="judul">'.$key->Judul.'</h3>
						  <div id="content_headline">
							'.$headline[0].'
						  </div>
						  <p align="right"><a href="'.base_url().'forum/del/'.$key->PID.'" onclick="return confirm('.$confirm.')" title="delete">
						  <img src="'.base_url().'theme/images/delete2.jpg"></a>'.
							anchor(base_url().'forum/edit/'.$key->PID,'&nbsp;&nbsp;&nbsp;<img src="'.base_url().'theme/images/edit22.jpg"/>		                            &nbsp;&nbsp;&nbsp;','title="edit"').
						  	anchor(base_url().'forum/baca/'.$key->PID,'&nbsp;&nbsp;&nbsp;<img src="'.base_url().'theme/images/readmore2.jpg"/>                            &nbsp;&nbsp;&nbsp;','title="baca selengkapnya"').
						  '</p>
						   
				         </div>';
						 echo form_open(base_url('edit_post')); ?>
						  <input id="pid" type="hidden"  name="pid" value="<?php $key->PID?>" required>
						  <button type="submit"><img src="<?php echo base_url().'theme/images/edit22.jpg'; ?>"/></button>
							</form>
						  <?php 
			}
		?>
    	




</body>
</html>
