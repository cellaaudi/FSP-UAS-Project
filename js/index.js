$(document).ready(function () {
	var dataP = null;

	// Initial
	$.ajax({
		url: 'pagination_process.php',
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
			$.post('pagination_lastpage.php', {}).done(function(data) {
				dataP = parseInt(data, 10);
            });
		}

		$.ajax({
			url: 'pagination_process.php',
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

	// Like Button
	$(".like").click(function() {
		// event.preventDefault();

		alert("like");
	});

	// Logout
	$("#logout").click(function (event) {
		event.preventDefault();

		$.post('logout_process.php', {}).done(function(data) {
			location.replace('index.php');
		});
	});
});