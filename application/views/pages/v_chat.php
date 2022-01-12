
<div id="page-wrapper" >
<div id="page-inner">
 <div class="row">
                    <div class="col-md-12">
                     <h2>Chat Room</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
 <hr />
 <script>
$(function(){
    $('#textchat').html("LOADING CHAT...");
    function refreshDiv(){
        $.ajax({
            url: '<?php echo base_url();?>chat/retrieve'
        }).done(function(result) {
			$('#textchat').html(result);
            window.setTimeout(refreshDiv, 3000);
        });
}
    window.setTimeout(refreshDiv, 3000);
});
function insertComment(){
	var chatme=$("#chatme").val();
	if(chatme==''){return alse;}
		$.ajax({
			url:'<?php echo base_url(); ?>chat/actchat/',		 
			type:'POST',
			data:$('#chatme').serialize(),
			success:function(data){ 
			  	$('#textchat').html(data);
			 	$("#chatme").val('');
			 }
		});		
}
</script>
<div id="tabledata">
<div class="span12">
  <div class="well grey">
      <div class="well-header">
          <h5>Lakukan Komunikasi Langsung Dengan Dokter </h5>
          </div>
          <div class="well-content">
          <div class="table_options top_options">
          </div>
		  <form id="frmchat" name="frmchat">
          <a style="float:left;margin-right:5px; margin-bottom:5px;margin-top:0px;width:10%" href="#" onclick="return insertComment();" class="btn btn-danger square-btn-adjust""> Send </a> &nbsp;
		  <input type="text"  class="span12" name="chatme" style="width:80%;float:left" placeholder="Chat Here" id="chatme">		  
          </form>

          <div id="textchat" name="textchat" style="min-height:400px;width:100%;border:1px solid #999;overflow:auto">

          </div>
          <div class="table_options bottom_options">
          </div>
    </div>
  </div>
</div>
</div>
</div>