define([], function () {
	var Class = function () {};
	
	Class.prototype.extend = function () {

		var idx = 0;
		if ( 'length' in arguments[0] ) {
			var mixins = arguments[0];
			idx = 1;
		}

		var publicProps =  arguments[idx],
			staticProps =  arguments[idx + 1],
			privateProps =  arguments[idx + 2];
			console.log(this)



		var F = new this.constructor ();

		if (mixins) 
			for (var i = 0; i < mixins.length; i++ )
				 for (var key in mixins[i] ) F.prototype[key] = publicProps[key];

		for (var key in publicProps) F.prototype[key] = publicProps[key];
		for (var key in staticProps) F[key] = publicProps[key];
		

		return F;

	};

	var Class = new Class();

	//console.dir(Class)

	//console.log(Class.extend)

	var Animal = new Class.extend({
		init: function () {
			console.log('init');
		},

		run: function () {
			console.log('run');
		}
	});

	console.log(Animal)

	var animal = new Animal;

	console.log(animal)


	var Rabbit = new Animal.extend({
		jump: function () {
			console.log('jump');
		}
	});


	
	console.log(Rabbit)

	
	var rabbit = new Rabbit;
	
	
	console.log(rabbit)
});