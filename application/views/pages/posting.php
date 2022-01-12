<?php
if(is_array($posting)){
	$data='';
	$no=1;
	foreach($posting as $key){
		$data .= '<tr>
					<td height="20">'.$no.'</td>
					<td>'.$key->Judul.'</td>
					<td>
						<a href="'.base_url().'index.php/home/baca/'.$key->PID.'">Baca</a> | 
						<a href="'.base_url().'index.php/home/hapus/'.$key->PID.'" onclick="return confirm(\'Apakah Anda Yakin?\');">Hapus</a>
					</td>
				  </tr>';
		$no++;
	}
}
?>
<style type="text/css">
table{
	border:silver 1px solid;
	color:#666666;
}
table tr td{
	padding:0 5px 0 5px;
	border-bottom:silver 1px solid;
	border-right:silver 1px solid;
}
a{
	font:normal 12px Tahoma,Verdana;
	color:blue;
	text-decoration:none;
}
a:hover{
	color:#ff9900;
}
</style>
<table width="670" cellspacing="0" cellpadding="0">
	<tr>
		<td height="25" colspan="3">DAFTAR POSTING TUTORIAL</td>
	</tr>
	<tr>
		<td height="20" width="30">No</td>
		<td width="550">Judul</td>
		<td width="100">Menu</td>
	</tr>
	<?php echo ("".$data); ?>
</table>