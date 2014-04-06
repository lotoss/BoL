requirejs.config({

	baseUrl: '/js/',
	
	paths: {
		//vendors
		'jquery' : 'vendors/jquery-1.11.0.min',
		'underscore' : 'vendors/underscore-min',
		'backbone' : 'vendors/backbone-min',
		//'jquery' : 'vendors/jquery-1.11.0.min',

		//Site parts

		//Apps

		//Modules
		'class' : 'utils/class',
		'components' : 'utils/components',
		'proxy' : 'utils/proxy'
	},

	shim: {
		'jquery': {
			exports: 'jQuery'
		},
		'underscore': {
			exports: '_'
		},
		'backbone': {
			exports: 'Backbone',
			deps: ['jquery', 'underscore']
		}
	},

	urlArgs: "bust=" +  (new Date()).getTime()
	

});

requirejs(['jquery', 'underscore', 'backbone'], function ($, _, Backbone) {
	
	$(function () {
		if ( $('.block-form').size() ) 
			requirejs(['site/index']);

		/*if ( $('.block-form').size() ) 
			requirejs(['apps/search/index']);*/

		/*if ( $('.block-form').size() ) 
			requirejs(['apps/booking/index']);*/
	});

});