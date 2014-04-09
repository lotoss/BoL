define(['jquery', 'underscore', 'backbone'], function ($, _, Backbone) {

	return TemplView = Backbone.View.extend({

		el: '#filter',
		
		events: {

		},

		initialize: function () {
			console.log(this.el)
		}

	}); 

});