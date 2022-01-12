function pesan () {
			var darah_id = $('#darah_id').val();
			var user_id = $('#user_id').val();
			var golongan_darah="-";
            var radiodarah = document.getElementsByName('goldar');
            for (var j =0; j<radiodarah.length;j++){
            	if(radiodarah[j].checked){
            		golongan_darah= radiodarah[j].value;
            	}
            }
			var tanggal = $('#tanggal').val();
			var kota = $('#kota').val();
			var instansi = $('#instansi').val();
			var status = $('#status').val();
			// alert(darah_id);
			// alert(user_id);
			// alert(golongan_darah);
			// alert(tanggal);
			// alert(kota);
			// alert(instansi);
			// alert(status);
			$.ajax({
		  		url  : 'cont_pemesanan/add_pemesanan',
		  		type : "POST",
		  		data : {darah1: darah_id, user1: user_id, gdarah1: golongan_darah, tanggal1: tanggal, kota1: kota, instansi1: instansi, status1: status},
		  		beforeSend : function() {
		  			// alert("cek1");
				},
				complete : function() {
				},
				success : function() {
					alert("Sukses");
					location.reload();
				},
				error : function() {
					alert("error");
				}
		  	});
		
}