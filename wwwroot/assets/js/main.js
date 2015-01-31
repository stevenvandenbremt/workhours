$(document).ready(function(){
	console.log("ready!");

	$('#submit_batchtime').on('click', function(e){
		e.preventDefault();
		toast.make('I love you more :)', 'sweety', 'success');

	});
});