var toast ={};


toast.make = function(message, title, status){



switch(title){
	case 'info':
		status = 'info';
		title = '';
		break;
	case 'success':
		status = 'success';
		title = '';
		break;
	case 'warning':
		satus = 'warning';
		title = '';
		break;
	case 'error':
		status = 'error';
		title = '';
		break;

}

toastr.options = {
"closeButton": true,
"debug": false,
"positionClass": "toast-top-right",
"onclick": null,
"showDuration": "1000",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut",
"progressBar": false

}



if(status === 'info'){
	toastr.info(message, title);
}

if(status === 'success'){
	toastr.success(message, title);
}

if(status === 'warning'){
	toastr.warning(message, title);
}
if(status === 'error'){
	toastr.error(message, title);
}




};