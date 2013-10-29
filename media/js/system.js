$(document).ready(function(){
	$("#create").on("click",function(){
		$.ajax({
			type:"POST",
			url:"././?action=createAccount",
			data :{	
				username : $('#username').val(),
				password : $("#password").val()
			}, 
			dataType :"json",
			success : function(data){
				$('#dialog').html(data.success);	
			}});
	});
	
	
	
	
});