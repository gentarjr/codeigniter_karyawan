$(document).ready(function(){

	// $('#btn-login').click(function(){
	// 	data = [];
	// 	var nik = $('#nik_login').val();
	// 	var password = $('#pass_login').val();

	// 	data.push({
	// 		nik:nik,
	// 		password:password
	// 	});
	// 	ajax_login_aplikasi(data);
	// });

	// function ajax_login_aplikasi(data){
	// 	$.ajax({
	// 		url: 'Controller_login/login_aplikasi',
	// 		type:'POST',
	// 		data:{
	// 			data
	// 		},
	// 		dataType:'json',
	// 		cache:false,
	// 		success: function(response, status, error){
	// 			console.log(response);
	// 			var res = JSON.stringify(response);
	// 			if (response === false || response === '' || res.includes('imeout')) {
	// 				info_error(status, response);
	// 			}else if(response){
	// 				try{
	// 					if (response !== false && error['responseText'] !== 'null' && !response.includes('timeout') && !response.includes('is closed') && !response.includes('Internal Server Error')){
	// 						datass = $.parseJSON(response);
	// 						if (datass.length === 0) {
	// 							console.log(response);
	// 							alert_error('Data Tidak Ditemukan!');
	// 						}else{
	// 							console.log(response);
	// 							ajax_dashboard_aplikasi(datass);
	// 						}
	// 					}
	// 				}catch(e){
	// 					console.log(e);
	// 					$('#overlay-screen').hide();
	// 					alert_error('terjadi Kesalahan, silahkan coba lagi');
	// 				}
	// 			}
	// 		}
	// 	});
	// }

	// function ajax_dashboard_aplikasi(datass){
	// 	var session_login = datass.length;
	// 	console.log(session_login);
	// 	$.ajax({
	// 		url: 'Controller_login/akses_login',
	// 		type:'POST',
	// 		datass:{
	// 			session_login:session_login
	// 		},
	// 		dataType:'json',
	// 		cache:false,
	// 		success: function(response, status, error){
	// 			console.log
	// 		}
	// 	});
	// }
});