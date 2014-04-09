define(['jquery', 'underscore', 'backbone'], function ($, _, Backbone) {

	return TemplView = Backbone.View.extend({
		el: '#left',
		
		events: {
			
		},

		initialize: function () {
			console.log(this.el)
		}

	}); 

});