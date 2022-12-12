// Pagination
$(".page").click(function(event) {
	event.preventDefault();

	var dataP = $(this).html();

	$.post("./index.php", {
		p : dataP
	}).done(function(data) {
		$("#memes").html(data);
	});
});