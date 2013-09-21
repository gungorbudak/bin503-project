function getResults() {
	var data = {};
	data['query'] = $("#query").val().trim();
	var boxes = $("input[name=options]:checked");	
	
	$.each(boxes, function(key, value){
		data[key] = $(value).val();
	});
	
	if (data['query'].length > 2) {
	
		$.ajax({
			url: '/bin503_project/process.php',
			type: 'post',
			data: data,
			success: function(response) {
				$("#results").html(response);
			}
		});
	}
}

function clearResults() {
	$("#results").empty();
	$("#query").val('');
}

$("#query").change(function() {
	getResults();
});

$("#query").bind('input propertychange', function() {
	getResults();
});

$("input[name=options]").on("click", function() {
	getResults();
});

$("#query").keypress(function(action) {
	if(action.which == 13) {
		getResults();
		return false;
    }
});

$("#query").keydown(function(action) {
	if(action.which == 8) {
		if($(this).val().length == 1) {
			clearResults();
		}
    }
});

$(".advanced_search_link").on("click", function(action) {
	action.preventDefault();
	var text = $(this).attr('alt');
	if (text == "Hidden") {
		$("#advanced_search").slideDown(500);
		$(this).attr("alt", "Shown");
		$(this).html("Hide advanced search options");
	} else if (text == "Shown") {
		$("#advanced_search").slideUp(500);
		$(this).attr("alt", "Hidden");
		$(this).html("Show advanced search options");
	}
	
});

$("#results").on("click", ".clear_results", function(action) {
	action.preventDefault();
	clearResults();
});