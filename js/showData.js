$(function() {
	
	$("#getcontacts").click(function() {
		 
		
		var url = "../api/contactapi.php?method=getContacts&format=json";
		$("#jsondata tbody").html("");
		$.getJSON(url, function(response) {
			$.each(response.contactShow, function(i, contact) {
				var newRow = "<tr>" + 
				"<td>" + contact.name + "</td>" + 
				"<td>" + contact.email + "</td>" + 
				"<td>" + contact.country + "</td>" + 
				"<td>" + contact.phone + "</td>" + 
				"<td>" + contact.message + "</td>" + 
				"<td>" + "<button class=\'delbtn\' onclick= \'deleteContact(\""+contact.email+"\", event, this)\'>Delete</button>" + "</td>" + 
				"</tr>"; 
				$(newRow).appendTo("#jsondata tbody");
			});
			
			

		}); 
	});

});

function deleteContact(email, event, delrow) {
		var data = {
					email : email,
					method : 'deletecontact',
					format : 'json'
			};
				jQuery.ajax({
					url : '../api/contactapi.php',
					type : "POST",
					data : data,
					success : function() {
						alert('Deleted successfully');
						$(delrow).parent().parent().remove();
					},
					error : function() {
						alert('There is error while delete');
					}
				});
}