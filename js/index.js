$(document).ready(function () {
	// Pagination
	$(".page").click(function (event) {
		event.preventDefault();

		var dataP = $(this).html();

		$.post("./index.php", {
			p: dataP
		}).done(function (data) {
			$("#memes").html(data);
		});
	});

	// Like Button
	$(".like").click(function (event) {
		event.preventDefault();

		alert("like");
	});

	// Logout
	$(".out").click(function (event) {
		event.preventDefault();

		location.replace('index.php?do=logout');

		// alert("logout");
		// $.ajax({
		// 	url: 'logout_process.php',
		// 	type: 'GET',
		// 	success: function(data){
		// 		location.replace('login.php');
		// 	}
		// });
	});
});