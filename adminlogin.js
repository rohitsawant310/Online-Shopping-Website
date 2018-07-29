function admin(){	
$(document).ready(
		 function()
				{
				jQuery.ajax({
					
					type:"GET",
					url:"adminvalid.php?key1="+$("#Admin_name").val()+"&key2="+$("#A_password").val(),
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