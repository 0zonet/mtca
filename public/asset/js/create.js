$('#create').click(function(e){
	e.preventDefault();
	var title = $('#title').val();
	var image = $('#image').val();
	var category_id = $('#category_id').val();
	var body  = $('#body').val();

	var data = {
		'title' : title,
		'image' : image,
		'category_id' : category_id,
		'body' : body
	};

	var token = $('#token').val();
	var route = 'http://localhost:8000/product';

	//Send ajax
	$.ajax({
		url : route,
		headers: {'X-CSRF-TOKEN' : token},
		type: 'POST',
		dataType: 'json',
		data : {product : data} 
	}).done(function(data){
		console.log(data);
	});
});