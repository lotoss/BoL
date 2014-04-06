define([], function () {
	function Class ()  {}

	Class.prototype.extend  = function () {
		var idx = 0;
		if ( 'length' in arguments[0] ) {
			var mixins = arguments[0];
			idx = 1;
		}

		var publicProps =  arguments[idx],
			staticProps =  arguments[idx + 1],
			privateProps =  arguments[idx + 2];

		var F = new Function () {};

		for (var key in publicProps) {
			F.prototype[key] = publicProps[key];
		}

		for (var key in staticProps) {
			F[key] = publicProps[key];
		}

		console.log(F);

	};


	return Class;

});