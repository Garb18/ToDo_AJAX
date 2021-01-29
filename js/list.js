$(document).ready(function() {

	$('#addproduct').click(function() {
		//Get value of item name
		var itemName_input = $('#product').val();
		var listid_input = $('#listid').val();

		//Lets disable all input fields to stop users from entering twice
		$('#product, #addproduct').prop("disabled", true);

		//Lets send the data to our PHP file
		request = $.ajax({
			url: "ajax/addItemsToList.php",
			type: "post",
			data: { listid : listid_input, itemName : itemName_input}
		});

		// If we're successfull!
		request.done(function (response, textStatus, jqXHR){
			$("#todoList").append('<li>'+itemName_input+'</li>');
			$('#product').val("");
		});

		// If we're successfull or it failed - re-enable fields
	    request.always(function () {
	        $('#product, #addproduct').prop("disabled", false);
	    });
	});
});