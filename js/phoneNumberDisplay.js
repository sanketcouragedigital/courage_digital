$(function() {
    $("#fphone").hide();
		$("#fenquiry").change(function(){
			var val=$(this).val();
			switch (val){
				case 'job':
					$("#fphone").hide();
					break;
				case 'business':
					$("#fphone").show();
					break;
				default:
					$("#fphone").hide();
					break;
			}
		});
});