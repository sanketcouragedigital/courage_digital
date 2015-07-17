$(function() {
    $("#phone").hide();
    $("#country").hide();    
		$("#enquiry").change(function(){
			var val=$(this).val();
			switch (val){
				case 'job':
					$("#phone").hide();
					$("#country").hide();
					$("label.error").hide();
  					$(".error").removeClass("error");				
					break;
				case 'business':
					$("#phone").show();
					$("#country").show();
					break;
				default:
					$("#phone").hide();
					$("#country").hide();
					$("label.error").hide();
 					$(".error").removeClass("error");
					break;
			}
		});
});