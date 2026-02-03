$(function() {

	// International Telephone Input
	var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "{{config('app.baseURL')}}/assets/plugins/telephoneinput/utils.min.js",
    });
});

