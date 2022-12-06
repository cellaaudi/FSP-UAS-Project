$("#formLogin").submit(function(event) {
    event.preventDefault();

    var fData = new FormData($("#formLogin")[0]);

    $.ajax({
        url: 'login_process.php',
		type: 'POST',
		data: fData,
		async: false, 
		Cache: false,
		contentType: false,
		processData: false,
		enctype: 'multipart/form-data',
		success: function(data) {
            if (data == "Welcome") {
                location.replace('index.php');
            } else if (data == "User not found") {
                alert("User not found");
            }
		}
    });
});