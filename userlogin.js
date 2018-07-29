function user(){	
$(document).ready(
		 function()
				{
				jQuery.ajax({
					
					type:"GET",
					url:"uservalid.php?key1="+$("#user_name").val()+"&key2="+$("#password").val(),
				    dataType:"html",
				    success:function(response){
				    	$("#mydiv").html(response);
				    },
				    error:function(){
				    	$("#mydiv").html("error");
				    }
				})
				
		 })
			
}