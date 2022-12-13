$(document).ready(function () {
	var dataP = null;

	// Initial
	$.ajax({
		url: 'php/pagination_process.php',
		type: 'GET',
		data: {
			p : 1
		},
		success: function(data) {
			$("#memes").html(data);
		}
	});

	// Pagination
	$(".page").click(function (event) {
		event.preventDefault();

		dataP = $(this).html();

		if (dataP == '&lt;&lt;') {
			dataP = 1;
		} else if (dataP == '&gt;&gt;') {
			$.post('php/pagination_lastpage.php', {}).done(function(data) {
				dataP = parseInt(data, 10);
            });
		}

		$.ajax({
			url: 'php/pagination_process.php',
			type: 'GET',
			data: {
				p : dataP
			},
        	success: function(data) {
                $("#memes").html(data);
        	}
		});

		$(".page").removeClass('page active');
		$(this).addClass('page active');
	});

	// Like
	$("#memes").on('click', '.like', function (event) {
		event.preventDefault();

		// alert("like");

		var meme_id = $(this).parent().parent().parent().attr('id');
		var username = $("#session_username").val();

		$.post('php/like_process.php', {
			meme_id:meme_id,
			username:username
		}).done(function(data) {
			// alert(data);

			// $(this).('.heart').attr('src', 'assets/icons/heart_fill.svg');
			// $.post('php/')
		})
		// alert (username);
	});

	// Logout
	$("#logout").click(function (event) {
		event.preventDefault();

		$.post('php/logout_process.php', {}).done(function(data) {
			location.replace('index.php');
		});
	});
});