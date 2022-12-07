$(document).ready(function () {
    $("#formLogin").submit(function (event) {
        // alert("test");

        event.preventDefault();

        var fData = new FormData($("#formLogin")[0]);

        $.ajax({
            // URL diganti ke hosting (https://www.cellaketinnopen.000webhostapp.com/login_process.php)
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
                } else {
                    alert("User not found");
                }
        	}
        });
    });
});