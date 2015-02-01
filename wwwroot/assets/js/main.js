$(document).ready(function(){
	console.log("ready!");

	$('#submit_batchtime').on('click', function(e){
		e.preventDefault();

		var formdata = $('#batchtime_form').serialize();
		console.log(formdata);

		/*$.post('/workday/create', formdata, function(data){

			console.log(data);

		}.fail(function(data){
			toast.make('batchtime post failed', 'error');
		});*/

	$.ajax({
           url: "/workday/add_batchtime",
           type: "POST",
           cache: false,
           dataType: 'json',
           data: formdata,
           success:function(result){
           		console.log(result['passed_date']);
           		console.log(result['batchtime']);
           		toast.make(result['toast_message'], 'success');
           },
           error: function(result){
           	console.log(result);
				toast.make('batchtime post failed', 'error');

           }
       });

	});
});