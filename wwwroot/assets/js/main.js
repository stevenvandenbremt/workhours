$(document).ready(function(){
	console.log("ready!");

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

$("#showtoast-info").click(function(){
	toastr.info("info toast!");
});
$("#showtoast-success").click(function(){
	toastr.success("Success toast!");
});
$("#showtoast-warning").click(function(){
	toastr.warning("Warning toast!");
});
$("#showtoast-error").click(function(){
	toastr.error("Success toast!");
});
});