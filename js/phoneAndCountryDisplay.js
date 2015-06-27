$(function() {
    $("#fphone").hide();
    $("#fcountry").hide();
		$("#fenquiry").change(function(){
			var val=$(this).val();
			switch (val){
				case 'job':
					$("#fphone").hide();
					$("#fcountry").hide();
					break;
				case 'business':
					$("#fphone").show();
					$("#fcountry").show();
					break;
				default:
					$("#fphone").hide();
					$("#fcountry").hide();
					break;
			}
		});
});