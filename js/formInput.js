$(function() {
	$.validator.addMethod('customphone', function(value, element) {
		return this.optional(element) || /^([0-9]+)$/.test(value);
	}, "Please enter only numbers");
	$("#contactForm").validate({
		rules : {
			name : "required",
			email : {
				required : true,
				email : true
			},
			phone : "customphone",
		},
		messages : {
			name : "Please enter your Name",
			email : "Please enter a valid email address",
			phone : {
				required : "Please enter a Phone No."
			}
		},
		submitHandler : function(form) {
			//Your code for AJAX starts
			event.preventDefault();
			var data = {
				name : $("#name").val(),
				email : $("#email").val(),
				enquiry : $("#enquiry").val(),
				country : $("#country").val(),
				phone : $("#phone").val(),
				message : $("#message").val(),
				method : $("#method").val(),
				format : $("#format").val()
			};
			$.post("api/contactapi.php", data).done(function(response) {
				if (response.contactSaved === "ERROR") {
					alert('Something seems to have gone wrong. Please try with a different email');
				} else {
					alert('Thank you for contacting us. Someone will get back to you shortly');
				}
			}).fail(function(){
				//When we do not receive a 200 OK from the server.	
			});  
		}
	});
	

});
