$(document).ready(function () {
	var dataP = null;
	var username = $("#session_username").val();

	// Initial
	$.ajax({
		url: 'https://cellaketinnopen.000webhostapp.com/php/pagination_process.php',
		type: 'GET',
		data: {
			p: 1,
			username: username
		},
		success: function (data) {
			$("#memes").html(data);
		}
	});

	// Pagination
	$(".page").click(function (event) {
		event.preventDefault();

		dataP = $(this).html();

		$.ajax({
			url: 'https://cellaketinnopen.000webhostapp.com/php/pagination_process.php',
			type: 'GET',
			data: {
				p: dataP,
				username: username
			},
			success: function (data) {
				$("#memes").html(data);
			}
		});

		$(".page").removeClass('page active');
		$(this).addClass('page active');
	});

	// Like
	$("#memes").on('click', '.like', function (event) {
		event.preventDefault();

		var meme_id = $(this).parent().parent().parent().attr('id');

		$.post('https://cellaketinnopen.000webhostapp.com/php/like_process.php', {
			meme_id: meme_id,
			username: username
		}).done(function (data) {
			pagination();
		})
	});

	// Logout
	$("#logout").click(function (event) {
		event.preventDefault();

		$.post('https://cellaketinnopen.000webhostapp.com/php/logout_process.php', {}).done(function (data) {
			location.replace('index.php');
		});
	});

	function pagination() {
		dataP = $('.page').html();
		$.ajax({
			url: 'https://cellaketinnopen.000webhostapp.com/php/pagination_process.php',
			type: 'GET',
			data: {
				p: dataP,
				username: username
			},
			success: function (data) {
				$("#memes").html(data);
			}
		});
	}
});