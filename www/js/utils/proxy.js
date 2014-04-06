define(['jquery'], function ($) {
	
	function Proxy () {

	}

	Proxy.prototype.options = {

	};

	Proxy.prototype.send = function (url, data) {
		return $.ajax({
			type: 'POST',
			dataType: 'json',	
			data: data,
			url: url
		});
	};

	return new Proxy();
});