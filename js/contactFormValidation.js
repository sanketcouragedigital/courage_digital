$(function() {
	$.validator.addMethod('customphone', function(value, element) {
		return this.optional(element) || /^([0-9]+)$/.test(value);
	}, "Please enter only numbers");

	$().ready(function() {
		// validate contact form on keyup and submit
		$("#contactForm").validate({
			rules : {
				fname : "required",
				femail : {
					required : true,
					email : true
				},
				fphone : "customphone"
			},
			messages : {
				fname : "Please enter your Name",
				femail : "Please enter a valid email address",
				fphone : {
					required : "Please enter a Phone No.",
				},
			}
		});

	});

});

